<?php

namespace App\Controller;

use App\Entity\TbProduk;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProdukController extends AbstractController
{
    private $mng;

    public function __construct(EntityManagerInterface $mng)
    {
        $this->mng = $mng;
    }

    /**
     * @Route("/produk", name="produk_sel")
     */
    // untuk menampilkan semua produk
    public function index()
    {
        $data = [
            'produk' => $this->mng->getRepository(TbProduk::class)->getAll(),
        ];

        return $this->render('home/produk.html.twig', $data);
    }

    /**
     * @Route("/produk/detail/{id}", name="produk_det")
     */
    // untuk menampilkan detail produk
    public function detail(string $id)
    {
        $data = [
            'produk' => $this->mng->getRepository(TbProduk::class)->getDetail($id),
        ];

        return $this->render('home/produk_det.html.twig', $data);
    }
}
