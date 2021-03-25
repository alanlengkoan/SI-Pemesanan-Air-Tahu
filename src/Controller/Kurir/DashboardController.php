<?php

namespace App\Controller\Kurir;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/kurir", name="kurir")
     */
    public function index()
    {
        return $this->render('kurir/dashboard/view.html.twig');
    }
}
