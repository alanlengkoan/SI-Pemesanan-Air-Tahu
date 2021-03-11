<?php

namespace App\Repository;

use App\Entity\TbPemesanan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbPemesanan|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPemesanan|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPemesanan[]    findAll()
 * @method TbPemesanan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPemesananRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbPemesanan::class);
        $this->mng = $mng;
    }

    // untuk mengambil semua data pemesanan
    public function getAll()
    {
        $sql = "SELECT p.id_users, p.kd_pemesanan, u.nama, p.tgl_pemesanan, p.metode_pembayaran, p.status_pembayaran, ( SELECT SUM( pd.sub_total ) FROM App\Entity\TbPemesananDetail pd WHERE pd.kd_pemesanan = p.kd_pemesanan ) as total, ( SELECT SUM( pe.jumlah_transfer ) FROM App\Entity\TbPembayaran pe WHERE pe.kd_pemesanan = p.kd_pemesanan ) as transfer, ( SELECT SUM( c.jumlah_bayar ) FROM App\Entity\TbCod c WHERE c.kd_pemesanan = p.kd_pemesanan ) as bayar FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }

    // untuk mengambil riwayat pemesanan user
    public function getRiwayat($iduser)
    {
        $sql = "SELECT p.id_users, p.kd_pemesanan, u.nama, p.tgl_pemesanan, p.metode_pembayaran, p.status_pembayaran, ( SELECT SUM( pd.sub_total ) FROM App\Entity\TbPemesananDetail pd WHERE pd.kd_pemesanan = p.kd_pemesanan ) as total FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users WHERE p.id_users = '$iduser'";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
    
    // untuk mengambil pembelian
    public function getPembelian()
    {
        $sql = "SELECT p.kd_pemesanan, p.tgl_pemesanan, SUM(pd.sub_total) AS total, ( SELECT SUM( pe.jumlah_transfer ) FROM App\Entity\TbPembayaran pe WHERE pe.kd_pemesanan = p.kd_pemesanan ) as transfer, ( SELECT SUM( c.jumlah_bayar ) FROM App\Entity\TbCod c WHERE c.kd_pemesanan = p.kd_pemesanan ) as bayar FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\TbPemesananDetail pd WITH p.kd_pemesanan = pd.kd_pemesanan GROUP BY p.kd_pemesanan, p.tgl_pemesanan";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }

    // untuk mengambil pembelian laporan
    public function getReportPembelian($dateAwal, $dateAkhir)
    {
        $sql = "SELECT u.nama AS customer, p.kd_pemesanan, p.tgl_pemesanan, SUM(pd.sub_total) AS total, ( SELECT SUM( pe.jumlah_transfer ) FROM App\Entity\TbPembayaran pe WHERE pe.kd_pemesanan = p.kd_pemesanan ) as transfer, ( SELECT SUM( c.jumlah_bayar ) FROM App\Entity\TbCod c WHERE c.kd_pemesanan = p.kd_pemesanan ) as bayar FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\TbPemesananDetail pd WITH p.kd_pemesanan = pd.kd_pemesanan LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users WHERE (p.tgl_pemesanan BETWEEN '$dateAwal' AND '$dateAkhir') GROUP BY u.nama, p.kd_pemesanan, p.tgl_pemesanan";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }

    // untuk mengambil pembelian laporan bulanan
    public function getReportPembelianBulanan($bulan, $tahun)
    {
        $sql = "SELECT u.nama AS customer, p.kd_pemesanan, p.tgl_pemesanan, SUM(pd.sub_total) AS total, ( SELECT SUM( pe.jumlah_transfer ) FROM App\Entity\TbPembayaran pe WHERE pe.kd_pemesanan = p.kd_pemesanan ) as transfer, ( SELECT SUM( c.jumlah_bayar ) FROM App\Entity\TbCod c WHERE c.kd_pemesanan = p.kd_pemesanan ) as bayar FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\TbPemesananDetail pd WITH p.kd_pemesanan = pd.kd_pemesanan LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users WHERE MONTH(p.tgl_pemesanan) = '$bulan' AND YEAR(p.tgl_pemesanan) = '$tahun' GROUP BY u.nama, p.kd_pemesanan, p.tgl_pemesanan";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }

    // untuk mengambil pembelian laporan tahunan
    public function getReportPembelianTahunan($tahun)
    {
        $sql = "SELECT u.nama AS customer, p.kd_pemesanan, p.tgl_pemesanan, SUM(pd.sub_total) AS total, ( SELECT SUM( pe.jumlah_transfer ) FROM App\Entity\TbPembayaran pe WHERE pe.kd_pemesanan = p.kd_pemesanan ) as transfer, ( SELECT SUM( c.jumlah_bayar ) FROM App\Entity\TbCod c WHERE c.kd_pemesanan = p.kd_pemesanan ) as bayar FROM App\Entity\TbPemesanan p LEFT JOIN App\Entity\TbPemesananDetail pd WITH p.kd_pemesanan = pd.kd_pemesanan LEFT JOIN App\Entity\User u WITH p.id_users = u.id_users WHERE YEAR(p.tgl_pemesanan) = '$tahun' GROUP BY u.nama, p.kd_pemesanan, p.tgl_pemesanan";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
}
