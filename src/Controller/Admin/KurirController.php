<?php

namespace App\Controller\Admin;

use App\Entity\TbKurir;
use App\Entity\User;
use App\Service\MyfunctionHelper;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class KurirController extends AbstractController
{
    private $mng;
    private $myfun;

    public function __construct(EntityManagerInterface $mng, MyfunctionHelper $myfun)
    {
        $this->mng   = $mng;
        $this->myfun = $myfun;
    }

    /**
     * @Route("/admin/kurir", name="admin_kurir")
     */
    // untuk default
    public function index()
    {
        $data = [
            'halaman' => "Kurir",
            'kurir'   => $this->mng->getRepository(TbKurir::class)->getAll(),
        ];

        return $this->render('admin/kurir/view.html.twig', $data);
    }

    /**
     * @Route("/admin/kurir/add", name="admin_kurir_add")
     */
    // untuk simpan data
    public function add(Request $post, UserPasswordEncoderInterface $pass_enkrip)
    {
        // untuk mengecek apa bila terdapat request
        if ($post->request->count() > 0) {
            $token = $post->request->get('_csrf_token');

            // untuk mengecek apa bila token sesuai
            if ($this->isCsrfTokenValid('submit', $token)) {
                try {
                    // insert ke tabel user
                    $user = new User();
                    $user->setIdUsers($this->myfun->getIdOtomatis('user'));
                    $user->setNama($post->request->get('inpnama'));
                    $user->setEmail($post->request->get('inpemail'));
                    $user->setUsername($post->request->get('inpusername'));
                    $user->setPassword($pass_enkrip->encodePassword($user, $post->request->get('inppassword')));
                    $user->setRoles(["ROLE_KURIR"]);
                    $user->setIns(date_create());
                    $user->setUpd(date_create());

                    // insert ke tabel pelanggan
                    $kurir = new TbKurir();
                    $kurir->setIdUsers($user->id_users);
                    $kurir->setIns(date_create());
                    $kurir->setUpd(date_create());

                    $this->mng->persist($kurir);
                    $this->mng->persist($user);
                    $this->mng->flush();

                    $response = ['title' => 'Berhasil!', 'text' => 'Berhasil tambah data!', 'type' => 'success', 'button' => 'Ok!'];
                } catch (FileException $e) {
                    $response = ['title' => 'Gagal!', 'text' => 'Gagal upload!', 'type' => 'warning', 'button' => 'Ok!'];
                }
            } else {
                $response = ['title' => 'Gagal!', 'text' => 'Jangan nakal ya!', 'type' => 'warning', 'button' => 'Ok!'];
            }
        } else {
            $response = ['title' => 'Gagal!', 'text' => 'Tidak ada request!', 'type' => 'warning', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/admin/kurir/del", name="admin_kurir_del")
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
     * @Route("/admin/kurir/res_pass", name="admin_kurir_res_pass")
     */
    // untuk reset password
    public function reset_password(Request $post, UserPasswordEncoderInterface $pass_enkrip)
    {
        try {
            $id = $post->request->get('id');
            
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
