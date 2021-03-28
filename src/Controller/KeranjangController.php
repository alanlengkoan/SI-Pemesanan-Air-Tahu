<?php

namespace App\Controller;

use App\Entity\TbChat;
use App\Entity\TbCod;
use Xendit\Xendit;
use Exception;
use App\Entity\TbKeranjang;
use App\Entity\TbPelanggan;
use App\Entity\TbPembayaran;
use App\Entity\TbPemesanan;
use App\Entity\TbPemesananDetail;
use App\Entity\TbPengantaranDetail;
use App\Entity\TbProduk;
use App\Entity\User;
use App\Service\MyfunctionHelper;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class KeranjangController extends AbstractController
{
    private $mng;
    private $myfun;

    public function __construct(EntityManagerInterface $mng, TokenStorageInterface $security, MyfunctionHelper $myfun)
    {
        $this->mng   = $mng;
        $this->myfun = $myfun;
        $check_security = $security->getToken()->getUser();
    }

    /**
     * @Route("/user/keranjang", name="keranjang")
     */
    // untuk menampilkan halaman keranjang
    public function index()
    {
        $idu = $this->getUser()->id_users;
        $sql = "SELECT k.id_keranjang, p.gambar, p.nama, k.jumlah AS jumlah_keranjang, k.harga, k.sub_total, ( SELECT SUM( s.stock ) FROM App\Entity\TbStock s WHERE s.kd_produk = p.kd_produk ) AS stock, ( SELECT SUM( pd.jumlah ) FROM App\Entity\TbPemesananDetail pd WHERE pd.kd_produk = p.kd_produk ) AS jumlah FROM App\Entity\TbKeranjang k LEFT JOIN App\Entity\TbProduk p WITH k.kd_produk = p.kd_produk WHERE k.id_user = '$idu'";
        $qry = $this->mng->createQuery($sql);

        $data = [
            'keranjang' => $qry->getResult(),
        ];

        return $this->render('home/keranjang.html.twig', $data);
    }

    /**
     * @Route("/user/keranjang/add", name="keranjang_add")
     */
    // untuk proses simpan detail produk
    public function add_cart(Request $post)
    {
        $id_user   = $post->request->get('inpidusers');
        $kd_produk = $post->request->get('inpkdproduk');

        // untuk mengecek produk yang dibeli
        $cek_keranjang = $this->getDoctrine()->getRepository(TbKeranjang::class)->findBy(['id_user' => $id_user, 'kd_produk' => $kd_produk]);

        $count = count($cek_keranjang);

        if ($count == 1) {
            // proses untuk mengubah produk dalam keranjang
            $jumlah = $cek_keranjang[0]->getJumlah() + 1;
            $subtotal = $jumlah * $cek_keranjang[0]->getHarga();
            $cek_keranjang[0]->setJumlah($jumlah);
            $cek_keranjang[0]->setSubTotal($subtotal);

            $this->mng->persist($cek_keranjang[0]);
        } else {
            // proses untuk menyimpan produk dalam keranjang
            $keranjang = new TbKeranjang();
            $produk = $this->getDoctrine()->getRepository(TbProduk::class)->findOneBy(['kd_produk' => $kd_produk]);

            $keranjang->setIdUser($id_user);
            $keranjang->setKdProduk($kd_produk);
            $keranjang->setJumlah('1');
            $keranjang->setHarga($produk->getHarga());
            $keranjang->setSubTotal($produk->getHarga());

            $this->mng->persist($keranjang);
        }

        $this->mng->flush();

        $response = ['status' => true];
        return new JsonResponse($response);
    }

    /**
     * @Route("/user/keranjang/del", name="keranjang_del")
     */
    // untuk proses hapus belanja
    public function del_cart(Request $post)
    {
        try {
            $id = $post->request->get('id');

            $produk  = $this->getDoctrine()->getRepository(TbKeranjang::class)->find($id);

            $this->mng->remove($produk);
            $this->mng->flush();

            $response = ['msg' => 'Berhasil dihapus'];
        } catch (Exception $e) {
            $response = ['msg' => 'Gagal dihapus'];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/user/checkout", name="checkout")
     */
    // untuk proses pemesanan
    public function checkout(Request $post)
    {
        $id_keranjang = $post->request->get('inpidkeranjang');
        $jumlah       = $post->request->get('inpjumlah');
        $harga        = $post->request->get('inpharga');
        $sub_total    = $post->request->get('inpsubtotal');
        $idu          = $this->getUser()->id_users;

        if ($id_keranjang == null) {
            // apa bila keranjang kosong
            return new RedirectResponse("keranjang");
        } else {
            $count = count($id_keranjang);

            // untuk update data pada keranjang
            for ($i = 0; $i < $count; $i++) {
                $keranjang = $this->mng->getRepository(TbKeranjang::class)->findOneBy(['id_keranjang' => $id_keranjang[$i]]);

                $keranjang->setJumlah($jumlah[$i]);
                $keranjang->setHarga($harga[$i]);
                $keranjang->setSubTotal($sub_total[$i]);

                $this->mng->persist($keranjang);
                $this->mng->flush();
            }

            // untuk data keranjang
            $sql1 = "SELECT k.id_keranjang, p.gambar, p.nama, k.jumlah, k.harga, k.sub_total FROM App\Entity\TbKeranjang k LEFT JOIN App\Entity\TbProduk p WITH k.kd_produk = p.kd_produk WHERE k.id_user = '$idu'";
            $qry1 = $this->mng->createQuery($sql1);

            // untuk data user
            $sql2 = "SELECT p.id_users, p.kelamin, p.telepon, p.alamat, u.nama, u.email FROM App\Entity\TbPelanggan p LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users WHERE p.id_users = '$idu'";
            $qry2 = $this->mng->createQuery($sql2);

            // untuk data bank
            $sql3 = "SELECT b.id_bank, b.nama, b.rekening FROM App\Entity\TbBank b";
            $qry3 = $this->mng->createQuery($sql3);

            $data = [
                'kd_order' => $this->myfun->getKodeUrut("tb_pemesanan", "ODR-"),
                'checkout' => $qry1->getResult(),
                'user'     => $qry2->getSingleResult(),
                'bank'     => $qry3->getResult(),
            ];

            return $this->render('home/checkout.html.twig', $data);
        }
    }

    /**
     * @Route("/user/finish", name="finish")
     */
    // untuk proses pemesanan selesai
    public function checkout_finish(Request $post)
    {
        // untuk pemesanan
        $iduser       = $this->getUser()->id_users;
        $inpkodeorder = $post->request->get('inpkodeorder');
        $inpnama      = $post->request->get('inpnama');
        $inpemail     = $post->request->get('inpemail');
        $inpnotelpon  = $post->request->get('inpnotelpon');
        $inpkelamin   = $post->request->get('inpkelamin');
        $inpalamat    = $post->request->get('inpalamat');

        // untuk pembayaran
        $inpmetodepembayaran = $post->request->get('inpmetodepembayaran');
        $inpidbank           = $post->request->get('inpidbank');

        // untuk mengecek apa bila proses simpan berhasil
        try {
            // untuk update data user
            $user = $this->mng->getRepository(User::class)->findOneBy(['id_users' => $iduser]);
            $user->setNama($inpnama);
            $user->setEmail($inpemail);

            // untuk update data pelanggan
            $pelanggan = $this->mng->getRepository(TbPelanggan::class)->findOneBy(['id_users' => $iduser]);
            $pelanggan->setKelamin($inpkelamin);
            $pelanggan->setTelepon($inpnotelpon);
            $pelanggan->setAlamat($inpalamat);

            // untuk simpan data pada tabel pemesanan
            $pemesanan = new TbPemesanan();
            $pemesanan->setKdPemesanan($inpkodeorder);
            $pemesanan->setIdUsers($iduser);
            $pemesanan->setTglPemesanan(date_create());
            $pemesanan->setMetodePembayaran($inpmetodepembayaran);
            $pemesanan->setStatusPembayaran('0');
            $pemesanan->setStatusPengantaran('0');
            $pemesanan->setPilihKurir('n');
            $pemesanan->setIns(date_create());
            $pemesanan->setUpd(date_create());

            // untuk simpan data detail pengantaran
            $detail_pengantaran = new TbPengantaranDetail();
            $detail_pengantaran->setKdPemesanan($inpkodeorder);
            $detail_pengantaran->setStatus('0');
            $detail_pengantaran->setIns(date_create());

            // untuk simpan data pembayaran
            if ($inpmetodepembayaran == 't') {
                $pembayaran = new TbPembayaran();
                $pembayaran->setKdPemesanan($inpkodeorder);
                $pembayaran->setIdBank($inpidbank);
                $pembayaran->setIns(date_create());
                $pembayaran->setUpd(date_create());

                $this->mng->persist($pembayaran);
            } else {
                $cod = new TbCod;
                $cod->setKdPemesanan($inpkodeorder);
                $cod->setIns(date_create());
                $cod->setUpd(date_create());

                $this->mng->persist($cod);
            }

            // Xendit::setApiKey('xnd_development_pUj0OMOV1UznlAuvGMavIJmRJKeL9zncyGPh0UOLYPORiiUjQmKduXOD19PKn');
            // $ovoParams = [
            //     'external_id'  => 'demo-' . time(),
            //     'amount'       => 32000,
            //     'phone'        => '081298498259',
            //     'ewallet_type' => 'OVO'
            // ];
            // $createOvo = \Xendit\EWallets::create($ovoParams);
            // dd($createOvo);

            // untuk simpan data pada tabel detail pemesanan
            $sql = "SELECT k.id_keranjang, p.gambar, p.kd_produk, k.jumlah, k.harga, k.sub_total FROM App\Entity\TbKeranjang k LEFT JOIN App\Entity\TbProduk p WITH k.kd_produk = p.kd_produk WHERE k.id_user = '$iduser'";
            $qry = $this->mng->createQuery($sql);
            $checkout = $qry->getResult();

            foreach ($checkout as $value) {
                $pemesanan_d = new TbPemesananDetail();
                $pemesanan_d->setKdPemesanan($inpkodeorder);
                $pemesanan_d->setKdProduk($value['kd_produk']);
                $pemesanan_d->setJumlah($value['jumlah']);
                $pemesanan_d->setHarga($value['harga']);
                $pemesanan_d->setSubTotal($value['sub_total']);

                $this->mng->persist($pemesanan_d);
            }

            // untuk hapus isi keranjang berdasarkan id users
            $keranjang = $this->getDoctrine()->getRepository(TbKeranjang::class)->findBy(['id_user' => $iduser]);
            for ($i = 0; $i < count($keranjang); $i++) {
                $this->mng->remove($keranjang[$i]);
            }

            $this->mng->persist($user);
            $this->mng->persist($pelanggan);
            $this->mng->persist($pemesanan);
            $this->mng->persist($detail_pengantaran);
            $this->mng->flush();

            // apa bila berhasil
            return new RedirectResponse("nota/{$inpkodeorder}");
        } catch (Exception $e) {
            // apa bila gagal
            return new Response('gagal');
        }
    }

    /**
     * @Route("/user/nota/{kd}", name="nota")
     */
    // untuk nota pesanan
    public function nota(string $kd)
    {
        $iduser = $this->getUser()->id_users;

        // data pemesanan
        $sql2 = "SELECT p.id_users, p.kd_pemesanan, p.metode_pembayaran, u.nama, u.email, c.telepon, p.tgl_pemesanan, p.status_pembayaran, c.kelamin, c.alamat FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\TbPelanggan c WITH p.id_users = c.id_users LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users WHERE p.id_users = '$iduser' AND p.kd_pemesanan = '$kd'";
        $qry2 = $this->mng->createQuery($sql2);
        $data_pemesanan = $qry2->getSingleResult();

        // data pemesanan detail
        $sql3 = "SELECT pd.kd_pemesanan, p.gambar, p.nama, pd.jumlah, pd.harga, pd.sub_total FROM App\Entity\TbPemesananDetail pd LEFT JOIN App\Entity\TbProduk p WITH pd.kd_produk = p.kd_produk WHERE pd.kd_pemesanan = '$kd'";
        $qry3 = $this->mng->createQuery($sql3);

        // data pembayaran detail
        $sql4 = "SELECT pe.nama_penyetor, pe.atas_nama, pe.jumlah_transfer, pe.tanggal_transfer, pe.bukti, b.nama, b.rekening, pe.ins FROM App\Entity\TbPembayaran pe LEFT JOIN App\Entity\TbBank b WITH pe.id_bank = b.id_bank WHERE pe.kd_pemesanan = '$kd'";
        $qry4 = $this->mng->createQuery($sql4);

        // data pembayaran cod
        $sql5 = "SELECT c.nama_bayar, c.jumlah_bayar, c.tanggal_bayar FROM App\Entity\TbCod c WHERE c.kd_pemesanan = '$kd'";
        $qry5 = $this->mng->createQuery($sql5);

        // mengecek metode pembayaran
        if ($data_pemesanan['metode_pembayaran'] == 'c') {
            $data = [
                'data_pemesanan'        => $qry2->getSingleResult(),
                'data_pemesanan_detail' => $qry3->getResult(),
                'data_pembayaran_cod'   => $qry5->getSingleResult()
            ];
        } else {
            $data = [
                'data_pemesanan'         => $qry2->getSingleResult(),
                'data_pemesanan_detail'  => $qry3->getResult(),
                'data_pembayaran_detail' => $qry4->getSingleResult()
            ];
        }

        // apa bila berhasil
        return $this->render('home/nota.html.twig', $data);
    }
   
    /**
     * @Route("/user/tracking/{kd}", name="tracking")
     */
    // untuk tracking pesanan
    public function tracking(string $kd)
    {
        $data = [
            'halaman'      => "Tracking & Chat Pemesanan",
            'kd_pemesanan' => $kd,
            'tracking'     => $this->mng->getRepository(TbPengantaranDetail::class)->getRiwayat($kd),
        ];

        return $this->render('home/tracking.html.twig', $data);
    }

    /**
     * @Route("/user/load_chat/{kd}", name="load_chat")
     */
    public function load_chat(string $kd)
    {
        $data = [
            'id_users' => $this->getUser()->id_users,
            'chat'     => $this->mng->getRepository(TbChat::class)->getDetail($kd)
        ];

        return $this->render('home/chat.html.twig', $data);
    }

    /**
     * @Route("/user/send_chat", name="send_chat")
     */
    public function send_chat(Request $post)
    {
        $chat = new TbChat();
        $chat->setKdPemesanan($post->request->get('kd_pemesanan'));
        $chat->setIdUsers($this->getUser()->id_users);
        $chat->setPesan($post->request->get('pesan'));
        $chat->setLevel('user');
        $chat->setDateSend(date_create());

        $this->mng->persist($chat);
        $this->mng->flush();

        return $this->load_chat($post->request->get('kd_pemesanan'));
    }

    /**
     * @Route("/user/cetak/{kd}", name="cetak")
     */
    // untuk cetak pesanan
    public function cetak(string $kd)
    {
        $iduser = $this->getUser()->id_users;

        // data pemesanan
        $sql2 = "SELECT p.id_users, p.kd_pemesanan, p.metode_pembayaran, u.nama, u.email, c.telepon, p.tgl_pemesanan, p.status_pembayaran, c.kelamin, c.alamat FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\TbPelanggan c WITH p.id_users = c.id_users LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users WHERE p.id_users = '$iduser' AND p.kd_pemesanan = '$kd'";
        $qry2 = $this->mng->createQuery($sql2);
        $data_pemesanan = $qry2->getSingleResult();

        // data pemesanan detail
        $sql3 = "SELECT pd.kd_pemesanan, p.gambar, p.nama, pd.jumlah, pd.harga, pd.sub_total FROM App\Entity\TbPemesananDetail pd LEFT JOIN App\Entity\TbProduk p WITH pd.kd_produk = p.kd_produk WHERE pd.kd_pemesanan = '$kd'";
        $qry3 = $this->mng->createQuery($sql3);

        // data pembayaran detail
        $sql4 = "SELECT pe.nama_penyetor, pe.atas_nama, pe.jumlah_transfer, pe.tanggal_transfer, pe.bukti, b.nama, b.rekening, pe.ins FROM App\Entity\TbPembayaran pe LEFT JOIN App\Entity\TbBank b WITH pe.id_bank = b.id_bank WHERE pe.kd_pemesanan = '$kd'";
        $qry4 = $this->mng->createQuery($sql4);

        // data pembayaran cod
        $sql5 = "SELECT c.nama_bayar, c.jumlah_bayar, c.tanggal_bayar FROM App\Entity\TbCod c WHERE c.kd_pemesanan = '$kd'";
        $qry5 = $this->mng->createQuery($sql5);

        // mengecek metode pembayaran
        if ($data_pemesanan['metode_pembayaran'] == 'c') {
            $data = [
                'data_pemesanan'        => $qry2->getSingleResult(),
                'data_pemesanan_detail' => $qry3->getResult(),
                'data_pembayaran_cod'   => $qry5->getSingleResult()
            ];
        } else {
            $data = [
                'data_pemesanan'         => $qry2->getSingleResult(),
                'data_pemesanan_detail'  => $qry3->getResult(),
                'data_pembayaran_detail' => $qry4->getSingleResult()
            ];
        }

        // untuk membuat pdf
        $dompdf = new Dompdf();
        $html = $this->render('home/cetak.html.twig', $data)->getContent();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('nota.pdf', ['Attachment' => true]);
        exit(0);
    }

    /**
     * @Route("/user/transfer/{kd}", name="transfer")
     */
    // untuk prose transfer
    public function transfer(string $kd)
    {
        // untuk pembayaran detail
        $sql = "SELECT pe.nama_penyetor, pe.atas_nama, pe.jumlah_transfer, pe.tanggal_transfer, pe.bukti, b.nama, b.rekening, pe.ins FROM App\Entity\TbPembayaran pe LEFT JOIN App\Entity\TbBank b WITH pe.id_bank = b.id_bank WHERE pe.kd_pemesanan = '$kd'";
        $qry = $this->mng->createQuery($sql);

        // untuk pemesanan detail
        $sql2 = "SELECT pd.sub_total FROM App\Entity\TbPemesananDetail pd WHERE pd.kd_pemesanan = '$kd'";
        $qry2 = $this->mng->createQuery($sql2);
        $get2 = $qry2->getResult();

        // untuk total
        foreach ($get2 as $key => $value) {
            $total[] = $value['sub_total'];
        }

        $data = [
            'kd_order'               => $kd,
            'total'                  => array_sum($total),
            'data_pembayaran_detail' => $qry->getSingleResult()
        ];

        return $this->render('home/transfer.html.twig', $data);
    }

    /**
     * @Route("/user/pembayaran", name="pembayaran_transfer")
     */
    // untuk prose transfer
    public function pembayaran(Request $post)
    {
        $kd    = $post->request->get('inpkkorder');
        try {
            // untuk update pembayaran
            $gambar = $post->files->get('inpbukti');
            $namaFile = uniqid() . '.' . $gambar->guessExtension();

            // untuk proses simpan gambar dalam lokasi
            $gambar->move(
                $this->getParameter('folder_bukti'),
                $namaFile
            );

            $pembayaran = $this->mng->getRepository(TbPembayaran::class)->findOneBy(['kd_pemesanan' => $kd]);
            $pembayaran->setNamaPenyetor($post->request->get('inpnamapenyetor'));
            $pembayaran->setAtasNama($post->request->get('inpatasnama'));
            $pembayaran->setTanggalTransfer(date_create());
            $pembayaran->setBukti($namaFile);

            // untuk update pemesanan
            $pemesanan = $this->mng->getRepository(TbPemesanan::class)->findOneBy(['kd_pemesanan' => $kd]);
            $pemesanan->setStatusPembayaran('1');
            $pemesanan->setUpd(date_create());

            $this->mng->persist($pembayaran);
            $this->mng->persist($pemesanan);
            $this->mng->flush();

            $response = ['msg' => 'Transaksi berhasil diproses!'];
        } catch (Exception $e) {
            $response = ['msg' => 'Transaksi gagal diproses!'];
        }

        return new JsonResponse($response);
    }
}
