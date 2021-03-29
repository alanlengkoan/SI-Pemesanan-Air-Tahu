<?php

namespace App\Controller\Admin;

use App\Entity\TbChat;
use App\Entity\TbCod;
use App\Entity\TbKurir;
use App\Entity\TbPembayaran;
use App\Entity\TbPemesanan;
use App\Entity\TbPengantaran;
use App\Entity\TbPengantaranDetail;
use App\Service\MyfunctionHelper;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PemesananController extends AbstractController
{
    private $mng;

    public function __construct(EntityManagerInterface $mng)
    {
        $this->mng = $mng;
    }

    /**
     * @Route("/admin/pemesanan", name="pemesanan")
     */
    public function index()
    {
        $data = [
            'halaman'   => "Pemesanan",
            'pemesanan' => $this->mng->getRepository(TbPemesanan::class)->getAll(),
            'kurir'     => $this->mng->getRepository(TbKurir::class)->getAll(),
        ];

        return $this->render('admin/pemesanan/view.html.twig', $data);
    }

    /**
     * @Route("/admin/pemesanan/detail/{kd}", name="pemesanan_detail")
     */
    public function detail(string $kd)
    {
        // data pemesanan
        $sql2 = "SELECT p.id_users, p.kd_pemesanan, p.metode_pembayaran, u.nama, u.email, c.telepon, p.tgl_pemesanan, p.status_pembayaran, c.kelamin, c.alamat FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\TbPelanggan c WITH p.id_users = c.id_users LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users WHERE p.kd_pemesanan = '$kd'";
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
                'halaman'               => "Detail Pemesanan",
                'data_pemesanan'        => $data_pemesanan,
                'data_pemesanan_detail' => $qry3->getResult(),
                'data_pembayaran_cod'   => $qry5->getSingleResult()
            ];
        } else {
            $data = [
                'halaman'                => "Detail Pemesanan",
                'data_pemesanan'         => $data_pemesanan,
                'data_pemesanan_detail'  => $qry3->getResult(),
                'data_pembayaran_detail' => $qry4->getSingleResult()
            ];
        }

        return $this->render('admin/pemesanan/detail.html.twig', $data);
    }

    /**
     * @Route("/admin/pemesanan/tracking/{kd}", name="admin_tracking")
     */
    public function tracking(string $kd)
    {
        $data = [
            'kd_pemesanan' => $kd,
            'tracking'     => $this->mng->getRepository(TbPengantaranDetail::class)->getRiwayat($kd),
        ];

        return $this->render('admin/pemesanan/tracking.html.twig', $data);
    }

    /**
     * @Route("/admin/pemesanan/load_chat/{kd}", name="admin_load_chat")
     */
    public function load_chat(string $kd)
    {
        $data = [
            'id_users' => $this->getUser()->id_users,
            'chat'     => $this->mng->getRepository(TbChat::class)->getDetail($kd)
        ];

        return $this->render('admin/pemesanan/chat.html.twig', $data);
    }

    /**
     * @Route("/admin/pemesanan/send_chat", name="admin_send_chat")
     */
    public function send_chat(Request $post)
    {
        $chat = new TbChat();
        $chat->setKdPemesanan($post->request->get('kd_pemesanan'));
        $chat->setIdUsers($this->getUser()->id_users);
        $chat->setPesan($post->request->get('pesan'));
        $chat->setLevel('admin');
        $chat->setDateSend(date_create());

        $this->mng->persist($chat);
        $this->mng->flush();

        return $this->load_chat($post->request->get('kd_pemesanan'));
    }

    /**
     * @Route("/admin/pemesanan/pilih_kurir", name="pemesanan_pilih_kurir")
     */
    public function pilih_kurir(Request $post)
    {
        try {
            $id_users = $post->request->get('id_users');
            $kd_pemesanan = $post->request->get('kd_pemesanan');

            // untuk update tabel pemesanan
            $pemesanan = $this->mng->getRepository(TbPemesanan::class)->findOneBy(['kd_pemesanan' => $kd_pemesanan]);
            $pemesanan->setStatusPengantaran('1');
            $pemesanan->setPilihKurir('y');

            // untuk insert tabel pengantaran
            $pengantaran = new TbPengantaran();
            $pengantaran->setKdPemesanan($kd_pemesanan);
            $pengantaran->setIdUsers($id_users);
            $pengantaran->setStatusLihat('belum-lihat');
            $pengantaran->setIns(date_create());
            $pengantaran->setUpd(date_create());

            // untuk simpan data detail pengantaran
            $detail_pengantaran = new TbPengantaranDetail();
            $detail_pengantaran->setKdPemesanan($kd_pemesanan);
            $detail_pengantaran->setStatus('1');
            $detail_pengantaran->setIns(date_create());

            $this->mng->persist($pengantaran);
            $this->mng->persist($pemesanan);
            $this->mng->persist($detail_pengantaran);
            $this->mng->flush();

            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil dihapus!', 'type' => 'success', 'button' => 'Ok!'];
        } catch (Exception $e) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal dihapus!', 'type' => 'error', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/admin/pembayaran_transfer", name="pembayaran_cod")
     */
    public function pembayaran_transfer(Request $post, MyfunctionHelper $myfun)
    {
        try {
            $kd = $post->request->get('inpkdorder');

            $pembayaran = $this->mng->getRepository(TbPembayaran::class)->findOneBy(['kd_pemesanan' => $kd]);
            $pembayaran->setJumlahTransfer($myfun->removeSeparatorHarga($post->request->get('inpjumlahtransfer')));
            $pembayaran->setUpd(date_create());

            $this->mng->persist($pembayaran);
            $this->mng->flush();

            $response = ['msg' => 'Transaksi berhasil dibayar!'];
        } catch (Exception $e) {
            $response = ['msg' => 'Transaksi gagal dibayar!'];
        }

        return new JsonResponse($response);
    }
}
