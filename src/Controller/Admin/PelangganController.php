<?php

namespace App\Controller\Admin;

use App\Entity\TbPelanggan;
use App\Entity\User;
use App\Service\MyfunctionHelper;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PelangganController extends AbstractController
{
    private $mng;
    private $myfun;

    public function __construct(EntityManagerInterface $mng, MyfunctionHelper $myfun)
    {
        $this->mng   = $mng;
        $this->myfun = $myfun;
    }

    /**
     * @Route("/admin/pelanggan", name="pelanggan")
     */
    // untuk default
    public function index()
    {
        $data = [
            'halaman'   => "Pelanggan",
            'pelanggan' => $this->mng->getRepository(TbPelanggan::class)->getAll(),
        ];

        return $this->render('admin/pelanggan/view.html.twig', $data);
    }

    /**
     * @Route("/admin/pelanggan/del", name="pelanggan_del")
     */
    // untuk hapus data
    public function del(Request $post)
    {
        try {
            $id = $post->request->get('id');

            $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['id_users' => $id]);
            $this->mng->remove($user);
            $this->mng->flush();

            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil dihapus!', 'type' => 'success', 'button' => 'Ok!'];
        } catch (Exception $e) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal dihapus!', 'type' => 'error', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/admin/pelanggan/res_pass", name="pelanggan_res_pass")
     */
    // untuk reset password
    public function reset_password(Request $post, UserPasswordEncoderInterface $pass_enkrip)
    {
        try {
            $id   = $post->request->get('id');
            $user = $this->mng->getRepository(User::class)->findOneBy(['id_users' => $id]);

            $user->setPassword($pass_enkrip->encodePassword($user, '12345678'));

            $this->mng->persist($user);
            $this->mng->flush();

            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil dihapus!', 'type' => 'success', 'button' => 'Ok!'];
        } catch (Exception $e) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal dihapus!', 'type' => 'error', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }
}
