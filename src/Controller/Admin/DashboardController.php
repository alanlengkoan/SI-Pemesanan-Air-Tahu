<?php

namespace App\Controller\Admin;

use App\Entity\TbPemesanan;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    private $mng;

    public function __construct(EntityManagerInterface $mng)
    {
        $this->mng   = $mng;
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/dashboard/view.html.twig');
    }

    /**
     * @Route("/admin/load_notification", name="admin_load_notification")
     */
    public function load_notification()
    {
        $data = $this->mng->getRepository(TbPemesanan::class)->getLihatNotifikasi();

        $response = [
            'count'  => count($data),
            'result' => $data
        ];

        return new JsonResponse($response);
    }
    
    /**
     * @Route("/admin/read_notification", name="admin_read_notification")
     */
    public function read_notification(Request $post)
    {
        $pemesanan = $this->mng->getRepository(TbPemesanan::class)->findOneBy(['kd_pemesanan' => $post->request->get('kd_pemesanan')]);
        $pemesanan->setStatusLihat('lihat');
        $pemesanan->setUpd(date_create());

        $this->mng->persist($pemesanan);
        $this->mng->flush();

        return new JsonResponse(['status' => true]);
    }
}
