<?php

namespace App\Controller\Kurir;

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
     * @Route("/kurir/pemesanan", name="kurir_pemesanan")
     */
    public function index()
    {
        $idu = $this->getUser()->id_users;

        $data = [
            'halaman'   => "Pemesanan",
            'pemesanan' => $this->mng->getRepository(TbPemesanan::class)->getPemesananKurir($idu),
        ];

        return $this->render('kurir/pemesanan/view.html.twig', $data);
    }

    /**
     * @Route("/kurir/pemesanan/detail/{kd}", name="kurir_pemesanan_detail")
     */
    public function detail(string $kd)
    {
        // data pemesanan
        $sql2 = "SELECT p.id_users, p.kd_pemesanan, p.metode_pembayaran, p.status_pengantaran, u.nama, u.email, c.telepon, p.tgl_pemesanan, p.status_pembayaran, c.kelamin, c.alamat FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\TbPelanggan c WITH p.id_users = c.id_users LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users WHERE p.kd_pemesanan = '$kd'";
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

        return $this->render('kurir/pemesanan/detail.html.twig', $data);
    }

    /**
     * @Route("/kurir/pemesanan/bayar/{kd}", name="kurir_pemesanan_bayar")
     */
    public function bayar(string $kd)
    {
        // untuk pemesanan detail
        $sql2 = "SELECT pd.sub_total FROM App\Entity\TbPemesananDetail pd WHERE pd.kd_pemesanan = '$kd'";
        $qry2 = $this->mng->createQuery($sql2);
        $get2 = $qry2->getResult();

        // untuk total
        foreach ($get2 as $key => $value) {
            $total[] = $value['sub_total'];
        }

        $data = [
            'halaman'  => "Bayar",
            'kd_order' => $kd,
            'total'    => array_sum($total),
        ];

        return $this->render('kurir/pemesanan/bayar.html.twig', $data);
    }

    /**
     * @Route("/kurir/pemesanan/setor", name="kurir_pembayaran_transfer")
     */
    public function setor(Request $post)
    {
        try {
            $kd = $post->request->get('id');

            // untuk update pemesanan
            $pemesanan = $this->mng->getRepository(TbPemesanan::class)->findOneBy(['kd_pemesanan' => $kd]);
            $pemesanan->setStatusPengantaran('2');
            $pemesanan->setUpd(date_create());

            // untuk simpan data detail pengantaran
            $detail_pengantaran = new TbPengantaranDetail();
            $detail_pengantaran->setKdPemesanan($kd);
            $detail_pengantaran->setStatus('2');
            $detail_pengantaran->setIns(date_create());

            $this->mng->persist($pemesanan);
            $this->mng->persist($detail_pengantaran);
            $this->mng->flush();

            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil tambah data!', 'type' => 'success', 'button' => 'Ok!'];
        } catch (Exception $e) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal tambah data!', 'type' => 'error', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/kurir/pembayaran", name="kurir_pembayaran_cod")
     */
    public function pembayaran(Request $post, MyfunctionHelper $myfun)
    {
        try {
            $kd = $post->request->get('inpkkorder');

            // untuk simpan data cod
            $cod = $this->mng->getRepository(TbCod::class)->findOneBy(['kd_pemesanan' => $kd]);
            $cod->setKdPemesanan($kd);
            $cod->setNamaBayar($post->request->get('inpnamabayar'));
            $cod->setJumlahBayar($myfun->removeSeparatorHarga($post->request->get('inpjumlahbayar')));
            $cod->setTanggalBayar(date_create());
            $cod->setUpd(date_create());

            // untuk update pemesanan
            $pemesanan = $this->mng->getRepository(TbPemesanan::class)->findOneBy(['kd_pemesanan' => $kd]);
            $pemesanan->setStatusPembayaran('1');
            $pemesanan->setStatusPengantaran('2');
            $pemesanan->setUpd(date_create());

            // untuk simpan data detail pengantaran
            $detail_pengantaran = new TbPengantaranDetail();
            $detail_pengantaran->setKdPemesanan($kd);
            $detail_pengantaran->setStatus('2');
            $detail_pengantaran->setIns(date_create());

            $this->mng->persist($cod);
            $this->mng->persist($pemesanan);
            $this->mng->persist($detail_pengantaran);
            $this->mng->flush();

            $response = ['msg' => 'Transaksi berhasil diproses!'];
        } catch (Exception $e) {
            $response = ['msg' => 'Transaksi gagal diproses!'];
        }

        return new JsonResponse($response);
    }
}
