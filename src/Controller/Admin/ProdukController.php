<?php

namespace App\Controller\Admin;

use App\Entity\TbProduk;
use App\Service\MyfunctionHelper;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProdukController extends AbstractController
{
    private $mng;
    private $myfun;

    public function __construct(EntityManagerInterface $mng, MyfunctionHelper $myfun)
    {
        $this->mng   = $mng;
        $this->myfun = $myfun;
    }

    /**
     * @Route("/admin/produk", name="produk")
     */
    // untuk default
    public function index()
    {
        $data = [
            'halaman'   => "Produk",
            'kd_produk' => $this->myfun->getKodeUrut("tb_produk", "KDP-"),
            'produk'    => $this->mng->getRepository(TbProduk::class)->getAll(),
        ];

        return $this->render('admin/produk/view.html.twig', $data);
    }

    /**
     * @Route("/admin/produk/add", name="produk_add")
     */
    // untuk simpan data
    public function add(Request $post)
    {
        // untuk mengecek apa bila terdapat request
        if ($post->request->count() > 0) {
            $token = $post->request->get('_csrf_token');

            // untuk mengecek apa bila token sesuai
            if ($this->isCsrfTokenValid('submit', $token)) {
                $gambar = $post->files->get('inpgambar');
                $name   = $_FILES['inpgambar']['name'];
                $tmp    = $_FILES['inpgambar']['tmp_name'];
                $size   = $_FILES['inpgambar']['size'];
                $error  = $_FILES['inpgambar']['error'];

                // untuk mengecek apa bila terdapat gambar
                if ($gambar) {
                    if ($error == 1) {
                        $response = ['title' => 'Gagal!', 'text' => 'terdapat kesalahan pada Gambar yang Anda upload!', 'type' => 'error', 'button' => 'Ok!'];
                    } else {
                        $namaFile = uniqid() . '.' . $gambar->guessExtension();

                        // untuk mengecek apa bila proses simpan berhasil
                        try {
                            $gambar->move(
                                $this->getParameter('folder_produk'),
                                $namaFile
                            );
                            $produk = new TbProduk();
                            $produk->setKdProduk($post->request->get('inpkodeproduk'));
                            $produk->setNama($post->request->get('inpnama'));
                            $produk->setSatuan($post->request->get('inpsatuan'));
                            $produk->setHarga($this->myfun->removeSeparatorHarga($post->request->get('inpharga')));
                            $produk->setGambar($namaFile);
                            $produk->setTentang($post->request->get('inptentang'));
                            $produk->setIns(date_create());
                            $produk->setUpd(date_create());

                            $this->mng->persist($produk);
                            $this->mng->flush();

                            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil tambah data!', 'type' => 'success', 'button' => 'Ok!'];
                        } catch (FileException $e) {
                            $response = ['title' => 'Gagal!', 'text' => 'Gagal upload!', 'type' => 'warning', 'button' => 'Ok!'];
                        }
                    }
                } else {
                    $response = ['title' => 'Gagal!', 'text' => 'Tidak ada!', 'type' => 'warning', 'button' => 'Ok!'];
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
     * @Route("/admin/produk/get", name="produk_get")
     */
    // untuk ambil data
    public function get_data(Request $post)
    {
        $id = $post->request->get('id');

        $produk = $this->mng->getRepository(TbProduk::class)->find($id);

        $data = [
            'kd_produk' => $produk->getKdProduk(),
            'nama'      => $produk->getNama(),
            'satuan'    => $produk->getSatuan(),
            'harga'     => $produk->getHarga(),
            'gambar'    => $produk->getGambar(),
            'tentang'   => $produk->getTentang(),
        ];

        return new JsonResponse($data);
    }

    /**
     * @Route("/admin/produk/upd", name="produk_upd")
     */
    // untuk ubah data
    public function upd(Request $post)
    {
        // untuk mengecek apa bila terdapat request
        if ($post->request->count() > 0) {
            $token = $post->request->get('_csrf_token');

            // untuk mengecek apa bila token sesuai
            if ($this->isCsrfTokenValid('submit', $token)) {
                $kd     = $post->request->get('inpkodeproduk');
                $produk = $this->mng->getRepository(TbProduk::class)->findOneBy(['kd_produk' => $kd]);

                $ubah_gambar = $post->request->get('ubah_gambar');

                // untuk mengecek apa bila terjadi perubahan data
                if ($ubah_gambar == 'on') {
                    $gambar   = $post->files->get('inpgambar');
                    $name   = $_FILES['inpgambar']['name'];
                    $tmp    = $_FILES['inpgambar']['tmp_name'];
                    $size   = $_FILES['inpgambar']['size'];
                    $error  = $_FILES['inpgambar']['error'];

                    if ($error == 1) {
                        $response = ['title' => 'Gagal!', 'text' => 'terdapat kesalahan pada Gambar yang Anda upload!', 'type' => 'error', 'button' => 'Ok!'];
                    } else {
                        $namaFile = uniqid() . '.' . $gambar->guessExtension();

                        if ($produk->getGambar() != null) {
                            // untuk menghapus foto
                            unlink($this->getParameter('folder_produk') . "/" . $produk->getGambar());
                        }

                        $gambar->move(
                            $this->getParameter('folder_produk'),
                            $namaFile
                        );
                        $produk->setKdProduk($post->request->get('inpkodeproduk'));
                        $produk->setNama($post->request->get('inpnama'));
                        $produk->setSatuan($post->request->get('inpsatuan'));
                        $produk->setHarga($this->myfun->removeSeparatorHarga($post->request->get('inpharga')));
                        $produk->setGambar($namaFile);
                        $produk->setTentang($post->request->get('inptentang'));
                        $produk->setUpd(date_create());

                        $this->mng->persist($produk);
                        $this->mng->flush();

                        $response = ['title' => 'Berhasil!', 'text' => 'Berhasil ubah data', 'type' => 'success', 'button' => 'Ok!'];
                    }
                } else {
                    $produk->setNama($post->request->get('inpnama'));
                    $produk->setSatuan($post->request->get('inpsatuan'));
                    $produk->setHarga($this->myfun->removeSeparatorHarga($post->request->get('inpharga')));
                    $produk->setTentang($post->request->get('inptentang'));
                    $produk->setUpd(date_create());

                    $this->mng->persist($produk);
                    $this->mng->flush();

                    $response = ['title' => 'Berhasil!', 'text' => 'Berhasil ubah data', 'type' => 'success', 'button' => 'Ok!'];
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
     * @Route("/admin/produk/del", name="produk_del")
     */
    // untuk hapus data
    public function del(Request $post)
    {
        try {
            $id = $post->request->get('id');

            $produk  = $this->getDoctrine()->getRepository(TbProduk::class)->find($id);
            if ($produk->getGambar() != null) {
                // untuk menghapus foto
                unlink($this->getParameter('folder_produk') . "/" . $produk->getGambar());
            }

            $this->mng->remove($produk);
            $this->mng->flush();

            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil dihapus!', 'type' => 'success', 'button' => 'Ok!'];
        } catch (Exception $e) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal dihapus!', 'type' => 'error', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }
}
