<?php

namespace App\Controller\Admin;

use App\Entity\TbProduk;
use App\Entity\TbStock;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TambahstockController extends AbstractController
{
    private $mng;

    public function __construct(EntityManagerInterface $mng)
    {
        $this->mng = $mng;
    }

    /**
     * @Route("/admin/stock", name="stock")
     */
    // untuk default
    public function index()
    {
        $sql = "SELECT s.id_stock, p.kd_produk, p.nama, s.stock, s.ins FROM App\Entity\TbStock s LEFT JOIN App\Entity\TbProduk p WITH s.kd_produk = p.kd_produk";
        $qry = $this->mng->createQuery($sql);

        $data = [
            'halaman' => "Stock",
            'produk'  => $this->getDoctrine()->getRepository(TbProduk::class)->findAll(),
            'stock'   => $qry->getResult(),
        ];

        return $this->render('admin/stock/view.html.twig', $data);
    }

    /**
     * @Route("/admin/stock/add", name="stock_add")
     */
    // untuk simpan data
    public function add(Request $post)
    {
        if ($post->request->count() > 0) {
            try {
                $stock = new TbStock();
                $stock->setKdProduk($post->request->get('inpkodeproduk'));
                $stock->setStock($post->request->get('inpstock'));
                $stock->setIns(date_create());
                $stock->setUpd(date_create());

                $this->mng->persist($stock);
                $this->mng->flush();

                $response = ['title' => 'Berhasil!', 'text' => 'Berhasil tambah data!', 'type' => 'success', 'button' => 'Ok!'];
            } catch (Exception $e) {
                $response = ['title' => 'Gagal!', 'text' => 'Gagal tambah data!', 'type' => 'error', 'button' => 'Ok!'];
            }
        }

        return new JsonResponse($response);
    }
}
