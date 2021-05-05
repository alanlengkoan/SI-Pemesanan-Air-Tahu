<?php

namespace App\Controller;

use App\Entity\TbProduk;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $mng;

    public function __construct(EntityManagerInterface $mng)
    {
        $this->mng = $mng;
    }

    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $data = [
            'active' => 'active',
            'produk' => $this->mng->getRepository(TbProduk::class)->getAll(),
        ];

        return $this->render('home/index.html.twig', $data);
    }

    /**
     * @Route("/tentang", name="tentang")
     */
    public function tentang()
    {
        $data = [
            'active' => 'active'
        ];

        return $this->render('home/tentang.html.twig', $data);
    }

    /**
     * @Route("/kontak", name="kontak")
     */
    public function kontak()
    {
        $data = [
            'active' => 'active'
        ];

        return $this->render('home/kontak.html.twig', $data);
    }
}
