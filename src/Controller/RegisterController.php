<?php

namespace App\Controller;

use App\Entity\TbPelanggan;
use App\Entity\User;
use App\Service\MyfunctionHelper;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    private $mng;
    private $myfun;

    public function __construct(EntityManagerInterface $mng, MyfunctionHelper $myfun)
    {
        $this->mng   = $mng;
        $this->myfun = $myfun;
    }

    /**
     * @Route("/register", name="register")
     */
    public function index()
    {
        $data = [
            'halaman' => 'Registrasi',
        ];

        return $this->render('home/register.html.twig', $data);
    }

    /**
     * @Route("/register/add", name="register_add")
     */
    public function add(Request $post, UserPasswordEncoderInterface $pass_enkrip): RedirectResponse
    {
        $username = $post->request->get('inpusername');
        $getUser  = $this->mng->getRepository(User::class)->findOneBy(['username' => $username]);

        if (isset($getUser)) {
            $this->addFlash('error', 'Payment gate failed to respond');

            return $this->redirectToRoute('register');
        } else {
            // insert ke tabel user
            $user = new User();
            $user->setIdUsers($this->myfun->getIdOtomatis('user'));
            $user->setNama($post->request->get('inpnama'));
            $user->setEmail($post->request->get('inpemail'));
            $user->setUsername($username);
            $user->setPassword($pass_enkrip->encodePassword($user, $post->request->get('inppassword')));
            $user->setRoles(["ROLE_USER"]);
            $user->setIns(date_create());
            $user->setUpd(date_create());

            // insert ke tabel pelanggan
            $pelanggan = new TbPelanggan();
            $pelanggan->setIdUsers($user->id_users);
            $pelanggan->setIns(date_create());
            $pelanggan->setUpd(date_create());
            
            $this->mng->persist($pelanggan);
            $this->mng->persist($user);
            $this->mng->flush();

            // untuk redirect
            return $this->redirectToRoute('login_user');
        }
    }
}
