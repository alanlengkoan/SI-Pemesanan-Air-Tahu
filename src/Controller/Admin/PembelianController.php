<?php

namespace App\Controller\Admin;

use App\Entity\TbPemesanan;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PembelianController extends AbstractController
{
    private $mng;

    public function __construct(EntityManagerInterface $mng)
    {
        $this->mng = $mng;
    }
    
    /**
     * @Route("/admin/pembelian", name="pembelian")
     */
    public function index()
    {
        $data = [
            'halaman'   => "Pembelian",
            'pembelian' => $this->mng->getRepository(TbPemesanan::class)->getPembelian(),
        ];

        return $this->render('admin/pembelian/view.html.twig', $data);
    }
}
