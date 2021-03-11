<?php

namespace App\Controller;

use App\Entity\TbPemesanan;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
