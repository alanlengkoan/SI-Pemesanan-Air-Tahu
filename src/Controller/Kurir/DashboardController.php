<?php

namespace App\Controller\Kurir;

use App\Entity\TbPemesanan;
use App\Entity\TbPengantaran;
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
     * @Route("/kurir", name="kurir")
     */
    public function index()
    {
        return $this->render('kurir/dashboard/view.html.twig');
    }

    /**
     * @Route("/kurir/load_notification", name="kurir_load_notification")
     */
    public function load_notification()
    {
        $idu = $this->getUser()->id_users;
        $data = $this->mng->getRepository(TbPemesanan::class)->getLihatNotifikasiKurir($idu);

        $response = [
            'count'  => count($data),
            'result' => $data
        ];

        return new JsonResponse($response);
    }

    /**
     * @Route("/kurir/read_notification", name="kurir_read_notification")
     */
    public function read_notification(Request $post)
    {
        $pengantaran = $this->mng->getRepository(TbPengantaran::class)->findOneBy(['kd_pemesanan' => $post->request->get('kd_pemesanan')]);
        $pengantaran->setStatusLihat('lihat');
        $pengantaran->setUpd(date_create());

        $this->mng->persist($pengantaran);
        $this->mng->flush();

        return new JsonResponse(['status' => true]);
    }

}
