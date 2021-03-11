<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login/user", name="login_user")
     */
    public function login_user(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        $data = [
            'halaman' => 'Login User',
            'error'   => $error,
        ];

        return $this->render('home/login.html.twig', $data);
    }

    /**
     * @Route("/login/admin", name="login_admin")
     */
    public function login_admin(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        $data = [
            'halaman' => 'Login Admin',
            'error'   => $error,
        ];

        return $this->render('admin/login.html.twig', $data);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
