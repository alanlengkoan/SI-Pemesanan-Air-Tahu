<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\MyfunctionHelper;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfilController extends AbstractController
{
    private $mng;
    private $myfun;

    public function __construct(EntityManagerInterface $mng, MyfunctionHelper $myfun)
    {
        $this->mng   = $mng;
        $this->myfun = $myfun;
    }
    
    /**
     * @Route("/profil", name="profil")
     */
    public function index()
    {
        $idu = $this->getUser()->id_users;

        $data = [
            'halaman' => "Profil",
            'data'    => $this->mng->getRepository(User::class)->getDetail($idu),
        ];

        return $this->render('home/profil.html.twig', $data);
    }

    /**
     * @Route("/profil/upd_foto", name="foto")
     */
    // untuk ubah foto profil
    public function upd_foto(Request $post)
    {
        if ($post->request->count() > 0) {
            $token = $post->request->get('_csrf_token');

            if ($this->isCsrfTokenValid('add', $token)) {
                $gambar = $post->files->get('inpfotoprofil');

                // untuk mengecek apa bila proses simpan berhasil
                try {
                    $idu    = $this->getUser()->id_users;
                    $user   = $this->mng->getRepository(User::class)->findOneBy(['id_users' => $idu]);

                    // untuk mengecek apa bila terdapat gambar
                    if ($gambar) {
                        $namaFile = uniqid() . '.' . $gambar->guessExtension();

                        if ($user->getFoto() != null) {
                            // untuk menghapus foto
                            unlink($this->getParameter('folder_profil') . "/" . $user->getFoto());
                        }

                        $gambar->move(
                            $this->getParameter('folder_profil'),
                            $namaFile
                        );

                        // untuk tabel user
                        $user->setFoto($namaFile);
                        $user->setUpd(date_create());
                    }

                    $this->mng->persist($user);
                    $this->mng->flush();

                    $response = ['msg' => 'Berhasil tambah data'];
                } catch (Exception $th) {
                    $response = ['msg' => 'Gagal tambah data'];
                }
            } else {
                $response = ['msg' => 'Jangan nakal ya!'];
            }
        } else {
            $response = ['msg' => 'Tidak ada request!'];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/profil/upd_akun", name="akun")
     */
    // untuk ubah akun profil
    public function upd_akun(Request $post)
    {
        if ($post->request->count() > 0) {
            $token = $post->request->get('_csrf_token');

            if ($this->isCsrfTokenValid('add', $token)) {
                // untuk mengecek apa bila proses simpan berhasil
                try {
                    $idu  = $this->getUser()->id_users;
                    $user = $this->mng->getRepository(User::class)->findOneBy(['id_users' => $idu]);
                    $user->setNama($post->request->get('inpnama'));
                    $user->setEmail($post->request->get('inpemail'));
                    $user->setUsername($post->request->get('inpusername'));
                    $user->setUpd(date_create());

                    $this->mng->persist($user);
                    $this->mng->flush();

                    $response = ['msg' => 'Berhasil tambah data'];
                } catch (Exception $th) {
                    $response = ['msg' => 'Gagal tambah data'];
                }
            } else {
                $response = ['msg' => 'Jangan nakal ya!'];
            }
        } else {
            $response = ['msg' => 'Tidak ada request!'];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/profil/upd_keamanan", name="keamanan")
     */
    // untuk ubah kemanan profil
    public function upd_keamanan(Request $post, UserPasswordEncoderInterface $pass_enkrip)
    {
        if ($post->request->count() > 0) {
            $token = $post->request->get('_csrf_token');

            if ($this->isCsrfTokenValid('add', $token)) {
                $pwd_lama = $post->request->get('inppasswordlama');
                $pwd_baru = $post->request->get('inppasswordbaru');
                $konfirmasi_pwd_baru = $post->request->get('inpkonfirmasipassword');

                $idu  = $this->getUser()->id_users;
                $user = $this->mng->getRepository(User::class)->findOneBy(['id_users' => $idu]);
                $check_pwd = $pass_enkrip->isPasswordValid($user, $pwd_lama);

                if ($check_pwd === true) {
                    if ($pwd_baru == $konfirmasi_pwd_baru) {
                        try {
                            $user->setPassword($pass_enkrip->encodePassword($user, $pwd_baru));
                            $this->mng->persist($user);
                            $this->mng->flush();

                            $response = ['msg' => 'Berhasil ubah password'];
                        } catch (Exception $e) {
                            $response = ['msg' => 'Gagal ubah password'];
                        }
                    } else {
                        $response = ['msg' => 'Password baru dan konfirmasi password baru tidak sama!'];
                    }
                } else {
                    $response = ['msg' => 'Password lama yang Anda masukkan tidak sama!'];
                }
            } else {
                $response = ['msg' => 'Jangan nakal ya!'];
            }
        } else {
            $response = ['msg' => 'Tidak ada request!'];
        }

        return new JsonResponse($response);
    }
}
