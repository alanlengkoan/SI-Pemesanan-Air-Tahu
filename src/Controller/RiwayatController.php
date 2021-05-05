<?php

namespace App\Controller;

use App\Entity\TbPemesanan;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RiwayatController extends AbstractController
{
    private $mng;

    public function __construct(EntityManagerInterface $mng)
    {
        $this->mng = $mng;
    }

    /**
     * @Route("/user/riwayat", name="riwayat")
     */
    // untuk menampilkan halaman riwayat
    public function index()
    {
        $iduser = $this->getUser()->id_users;

        $data = [
            'halaman'   => "Riwayat",
            'pemesanan' => $this->mng->getRepository(TbPemesanan::class)->getRiwayat($iduser),
        ];

        return $this->render('home/riwayat.html.twig', $data);
    }

    /**
     * @Route("/user/load_rating", name="load_rating")
     */
    // untuk menampilkan halaman load_rating
    public function load_rating()
    {
        $iduser = $this->getUser()->id_users;

        $response = [
            'pemesanan' => $this->mng->getRepository(TbPemesanan::class)->getRating($iduser),
        ];

        return new JsonResponse($response);
    }

    /**
     * @Route("/user/submit_rating", name="submit_rating")
     */
    public function submit_rating(Request $post)
    {
        try {
            $id_users     = $post->request->get('id_users');
            $kd_pemesanan = $post->request->get('kd_pemesanan');
            $bintang      = $post->request->get('bintang');
            $komentar     = $post->request->get('komentar');

            $pemesanan = $this->mng->getRepository(TbPemesanan::class)->findOneBy([
                'id_users'     => $id_users,
                'kd_pemesanan' => $kd_pemesanan
            ]);

            $pemesanan->setBintang($bintang);
            $pemesanan->setKomentar($komentar);

            $this->mng->persist($pemesanan);
            $this->mng->flush();

            $response = ['title' => 'Terima Kasih!', 'text' => 'Ulasan Anda telah kami terima!', 'type' => 'success', 'button' => 'Sip!'];
        } catch (Exception $e) {
            $response = ['title' => 'Gagal!', 'text' => 'Terdapat kesalahan!', 'type' => 'error', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }
}
