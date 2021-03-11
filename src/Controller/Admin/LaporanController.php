<?php

namespace App\Controller\Admin;

use App\Entity\TbPemesanan;
use App\Service\MyfunctionHelper;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\Cloner\Data;

class LaporanController extends AbstractController
{
    private $mng;
    private $myfun;

    public function __construct(EntityManagerInterface $mng, MyfunctionHelper $myfun)
    {
        $this->mng   = $mng;
        $this->myfun = $myfun;
    }

    /**
     * @Route("/admin/laporan", name="laporan")
     */
    public function index()
    {
        $data = [
            'halaman'   => "Laporan",
        ];

        return $this->render('admin/laporan/view.html.twig', $data);
    }

    /**
     * @Route("/admin/laporan/lihat", name="lihat_laporan")
     */
    public function show(Request $post)
    {
        if ($post->request->count() > 0) {
            $token = $post->request->get('_csrf_token');

            // untuk mengecek apa bila token sesuai
            if ($this->isCsrfTokenValid('submit', $token)) {
                $tanggal_awal  = $post->request->get('tanggal_awal');
                $tanggal_akhir = $post->request->get('tanggal_akhir');

                $result = $this->mng->getRepository(TbPemesanan::class)->getReportPembelian($tanggal_awal, $tanggal_akhir);

                if (count($result) != 0) {
                    foreach ($result as $value) {
                        $transfer = ($value['transfer'] == null) ? 0 : $value['transfer'];
                        $bayar    = ($value['bayar'] == null) ? 0 : $value['bayar'];
                        $total    = $transfer + $bayar;

                        $data[$value['customer']][] = [
                            'kode_order'        => $value['kd_pemesanan'],
                            'customer'          => $value['customer'],
                            'tanggal_pembelian' => $value['tgl_pemesanan']->format('m-d-Y'),
                            'jam_pembelian'     => $value['tgl_pemesanan']->format('H:i:s'),
                            'total_pembelian'   => $value['total'],
                            'total_bayar'       => ($total == 0) ? 0 : $total,
                        ];
                    }
                } else {
                    $data[] = [
                        'kode_order'        => 'Data Kosong!',
                        'customer'          => 'Data Kosong!',
                        'tanggal_pembelian' => 'Data Kosong!',
                        'jam_pembelian'     => 'Data Kosong!',
                        'total_pembelian'   => 'Data Kosong!',
                        'total_bayar'       => 'Data Kosong!',
                    ];
                }

                $response = ['data' => $data];
            } else {
                $response = ['title' => 'Gagal!', 'text' => 'Jangan nakal ya!', 'type' => 'warning', 'button' => 'Ok!'];
            }
        } else {
            $response = ['title' => 'Gagal!', 'text' => 'Tidak ada request!', 'type' => 'warning', 'button' => 'Ok!'];
        }

        return $this->render('admin/laporan/tabel.html.twig', $response);
    }

    /**
     * @Route("/admin/laporan/export", name="export_laporan")
     */
    public function export()
    {
        $tanggal_awal  = base64_decode($_GET['tanggal_awal']);
        $tanggal_akhir = base64_decode($_GET['tanggal_akhir']);

        $result = $this->mng->getRepository(TbPemesanan::class)->getReportPembelian($tanggal_awal, $tanggal_akhir);

        if (count($result) != 0) {
            foreach ($result as $value) {
                $transfer = ($value['transfer'] == null) ? 0 : $value['transfer'];
                $bayar    = ($value['bayar'] == null) ? 0 : $value['bayar'];
                $total    = $transfer + $bayar;

                $results[$value['customer']][] = [
                    'kode_order'        => $value['kd_pemesanan'],
                    'customer'          => $value['customer'],
                    'tanggal_pembelian' => $value['tgl_pemesanan']->format('m-d-Y'),
                    'jam_pembelian'     => $value['tgl_pemesanan']->format('H:i:s'),
                    'total_pembelian'   => $value['total'],
                    'total_bayar'       => ($total == 0) ? 0 : $total,
                ];
            }
        } else {
            $results[] = [
                'kode_order'        => 'Data Kosong!',
                'customer'          => 'Data Kosong!',
                'tanggal_pembelian' => 'Data Kosong!',
                'jam_pembelian'     => 'Data Kosong!',
                'total_pembelian'   => 0,
                'total_bayar'       => 0,
            ];
        }

        $data = [
            'pemesanan' => $results
        ];

        // untuk membuat pdf
        $dompdf = new Dompdf();
        $html = $this->render('admin/laporan/export.html.twig', $data)->getContent();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('laporan.pdf', ['Attachment' => true]);
        exit(0);
    }

    /**
     * @Route("/admin/l_bulanan", name="laporan_bulanan")
     */
    public function laporanBulanan()
    {
        // untuk bulan
        $bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $data = [
            'halaman' => "Laporan Bulanan",
            'bulan'   => $bulan
        ];

        return $this->render('admin/laporan_bulanan/view.html.twig', $data);
    }

    /**
     * @Route("/admin/l_bulanan/lihat", name="lihat_laporan_bulanan")
     */
    public function showMonth(Request $post)
    {
        if ($post->request->count() > 0) {
            $token = $post->request->get('_csrf_token');

            // untuk mengecek apa bila token sesuai
            if ($this->isCsrfTokenValid('submit', $token)) {
                // untuk mengambil request
                $bulan = $post->request->get('inpbulan');
                $tahun = date('Y');
                // untuk tarik data
                $result = $this->mng->getRepository(TbPemesanan::class)->getReportPembelianBulanan($bulan, $tahun);

                if (count($result) != 0) {
                    foreach ($result as $value) {
                        $transfer = ($value['transfer'] == null) ? 0 : $value['transfer'];
                        $bayar    = ($value['bayar'] == null) ? 0 : $value['bayar'];
                        $total    = $transfer + $bayar;

                        $data[$value['customer']][] = [
                            'kode_order'        => $value['kd_pemesanan'],
                            'customer'          => $value['customer'],
                            'tanggal_pembelian' => $value['tgl_pemesanan']->format('m-d-Y'),
                            'jam_pembelian'     => $value['tgl_pemesanan']->format('H:i:s'),
                            'total_pembelian'   => $value['total'],
                            'total_bayar'       => ($total == 0) ? 0 : $total,
                        ];
                    }
                } else {
                    $data[] = [
                        'kode_order'        => 'Data Kosong!',
                        'customer'          => 'Data Kosong!',
                        'tanggal_pembelian' => 'Data Kosong!',
                        'jam_pembelian'     => 'Data Kosong!',
                        'total_pembelian'   => 'Data Kosong!',
                        'total_bayar'       => 'Data Kosong!',
                    ];
                }

                $response = ['data' => $data];
            } else {
                $response = ['title' => 'Gagal!', 'text' => 'Jangan nakal ya!', 'type' => 'warning', 'button' => 'Ok!'];
            }
        } else {
            $response = ['title' => 'Gagal!', 'text' => 'Tidak ada request!', 'type' => 'warning', 'button' => 'Ok!'];
        }

        return $this->render('admin/laporan_bulanan/tabel.html.twig', $response);
    }

    /**
     * @Route("/admin/l_bulanan/export", name="export_laporan_bulanan")
     */
    public function exportMonth()
    {
        $bulan  = base64_decode($_GET['bulan']);
        $tahun = date('Y');

        $result = $this->mng->getRepository(TbPemesanan::class)->getReportPembelianBulanan($bulan, $tahun);

        if (count($result) != 0) {
            foreach ($result as $value) {
                $transfer = ($value['transfer'] == null) ? 0 : $value['transfer'];
                $bayar    = ($value['bayar'] == null) ? 0 : $value['bayar'];
                $total    = $transfer + $bayar;

                $results[$value['customer']][] = [
                    'kode_order'        => $value['kd_pemesanan'],
                    'customer'          => $value['customer'],
                    'tanggal_pembelian' => $value['tgl_pemesanan']->format('m-d-Y'),
                    'jam_pembelian'     => $value['tgl_pemesanan']->format('H:i:s'),
                    'total_pembelian'   => $value['total'],
                    'total_bayar'       => ($total == 0) ? 0 : $total,
                ];
            }
        } else {
            $results[] = [
                'kode_order'        => 'Data Kosong!',
                'customer'          => 'Data Kosong!',
                'tanggal_pembelian' => 'Data Kosong!',
                'jam_pembelian'     => 'Data Kosong!',
                'total_pembelian'   => 0,
                'total_bayar'       => 0,
            ];
        }

        $data = [
            'pemesanan' => $results
        ];

        // untuk membuat pdf
        $dompdf = new Dompdf();
        $html = $this->render('admin/laporan_bulanan/export.html.twig', $data)->getContent();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('laporan-bulanan.pdf', ['Attachment' => true]);
        exit(0);
    }

    /**
     * @Route("/admin/l_tahunan", name="laporan_tahunan")
     */
    public function laporanTahunan()
    {
        // untuk tahun
        $tahun = date('Y');
        for ($i = $tahun; $i >= 2019; $i--) {
            $rTahun[] = $i;
        }

        $data = [
            'halaman' => "Laporan Tahunan",
            'tahun'   => $rTahun
        ];

        return $this->render('admin/laporan_tahunan/view.html.twig', $data);
    }

    /**
     * @Route("/admin/l_tahunan/lihat", name="lihat_laporan_tahunan")
     */
    public function showYear(Request $post)
    {
        if ($post->request->count() > 0) {
            $token = $post->request->get('_csrf_token');

            // untuk mengecek apa bila token sesuai
            if ($this->isCsrfTokenValid('submit', $token)) {
                // untuk mengambil request
                $tahun = $post->request->get('inptahun');
                // untuk tarik data
                $result = $this->mng->getRepository(TbPemesanan::class)->getReportPembelianTahunan($tahun);

                if (count($result) != 0) {
                    foreach ($result as $value) {
                        $transfer = ($value['transfer'] == null) ? 0 : $value['transfer'];
                        $bayar    = ($value['bayar'] == null) ? 0 : $value['bayar'];
                        $total    = $transfer + $bayar;

                        $data[$value['customer']][] = [
                            'kode_order'        => $value['kd_pemesanan'],
                            'customer'          => $value['customer'],
                            'tanggal_pembelian' => $value['tgl_pemesanan']->format('m-d-Y'),
                            'jam_pembelian'     => $value['tgl_pemesanan']->format('H:i:s'),
                            'total_pembelian'   => $value['total'],
                            'total_bayar'       => ($total == 0) ? 0 : $total,
                        ];
                    }
                } else {
                    $data[] = [
                        'kode_order'        => 'Data Kosong!',
                        'customer'          => 'Data Kosong!',
                        'tanggal_pembelian' => 'Data Kosong!',
                        'jam_pembelian'     => 'Data Kosong!',
                        'total_pembelian'   => 'Data Kosong!',
                        'total_bayar'       => 'Data Kosong!',
                    ];
                }

                $response = ['data' => $data];
            } else {
                $response = ['title' => 'Gagal!', 'text' => 'Jangan nakal ya!', 'type' => 'warning', 'button' => 'Ok!'];
            }
        } else {
            $response = ['title' => 'Gagal!', 'text' => 'Tidak ada request!', 'type' => 'warning', 'button' => 'Ok!'];
        }

        return $this->render('admin/laporan_tahunan/tabel.html.twig', $response);
    }

    /**
     * @Route("/admin/l_tahunan/export", name="export_laporan_tahunan")
     */
    public function exportYear()
    {
        $tahun = base64_decode($_GET['tahun']);

        $result = $this->mng->getRepository(TbPemesanan::class)->getReportPembelianTahunan($tahun);

        if (count($result) != 0) {
            foreach ($result as $value) {
                $transfer = ($value['transfer'] == null) ? 0 : $value['transfer'];
                $bayar    = ($value['bayar'] == null) ? 0 : $value['bayar'];
                $total    = $transfer + $bayar;

                $results[$value['customer']][] = [
                    'kode_order'        => $value['kd_pemesanan'],
                    'customer'          => $value['customer'],
                    'tanggal_pembelian' => $value['tgl_pemesanan']->format('m-d-Y'),
                    'jam_pembelian'     => $value['tgl_pemesanan']->format('H:i:s'),
                    'total_pembelian'   => $value['total'],
                    'total_bayar'       => ($total == 0) ? 0 : $total,
                ];
            }
        } else {
            $results[] = [
                'kode_order'        => 'Data Kosong!',
                'customer'          => 'Data Kosong!',
                'tanggal_pembelian' => 'Data Kosong!',
                'jam_pembelian'     => 'Data Kosong!',
                'total_pembelian'   => 0,
                'total_bayar'       => 0,
            ];
        }

        $data = [
            'pemesanan' => $results
        ];

        // untuk membuat pdf
        $dompdf = new Dompdf();
        $html = $this->render('admin/laporan_tahunan/export.html.twig', $data)->getContent();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('laporan-bulanan.pdf', ['Attachment' => true]);
        exit(0);
    }
}
