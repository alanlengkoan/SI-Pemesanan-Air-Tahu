<?php

namespace App\Controller\Admin;

use App\Entity\TbBank;
use App\Service\MyfunctionHelper;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BankController extends AbstractController
{
    private $mng;
    private $myfun;

    public function __construct(EntityManagerInterface $mng, MyfunctionHelper $myfun)
    {
        $this->mng   = $mng;
        $this->myfun = $myfun;
    }
    
    /**
     * @Route("/admin/bank", name="bank")
     */
    public function index()
    {
        $data = [
            'halaman' => "Bank",
            'bank'    => $this->mng->getRepository(TbBank::class)->getAll()
        ];

        return $this->render('admin/bank/view.html.twig', $data);
    }

    /**
     * @Route("/admin/bank/add", name="bank_add")
     */
    public function add(Request $post)
    {
        try {
            $bank = new TbBank();
            $bank->setNama($post->request->get('inpnama'));
            $bank->setRekening($post->request->get('inprekening'));
            $bank->setIns(date_create());
            $bank->setUpd(date_create());

            $this->mng->persist($bank);
            $this->mng->flush();

            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil tambah data!', 'type' => 'success', 'button' => 'Ok!'];
        } catch (Exception $e) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal tambah data!', 'type' => 'error', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/admin/bank/get", name="bank_get")
     */
    public function get_data(Request $post)
    {
        $id = $post->request->get('id');

        $produk = $this->mng->getRepository(TbBank::class)->find($id);

        $data = [
            'id_bank'  => $produk->getIdBank(),
            'nama'     => $produk->getNama(),
            'rekening' => $produk->getRekening(),
        ];

        return new JsonResponse($data);
    }

    /**
     * @Route("/admin/bank/upd", name="bank_upd")
     */
    // untuk ubah data
    public function upd(Request $post)
    {
        try {
            $id = $post->request->get('inpidbank');
            $bank = $this->mng->getRepository(TbBank::class)->find($id);

            $bank->setNama($post->request->get('inpnama'));
            $bank->setRekening($post->request->get('inprekening'));
            $bank->setUpd(date_create());

            $this->mng->persist($bank);
            $this->mng->flush();

            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil ubah data!', 'type' => 'success', 'button' => 'Ok!'];
        } catch (Exception $e) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal tambah data!', 'type' => 'error', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/admin/bank/del", name="bank_del")
     */
    // untuk hapus data
    public function del(Request $post)
    {
        try {
            $id = $post->request->get('id');

            $bank = $this->getDoctrine()->getRepository(TbBank::class)->find($id);

            $this->mng->remove($bank);
            $this->mng->flush();

            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil dihapus!', 'type' => 'success', 'button' => 'Ok!'];
        } catch (Exception $e) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal dihapus!', 'type' => 'error', 'button' => 'Ok!'];
        }

        return new JsonResponse($response);
    }
}
