<?php

namespace App\Repository;

use App\Entity\TbProduk;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbProduk|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbProduk|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbProduk[]    findAll()
 * @method TbProduk[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbProdukRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbProduk::class);
        $this->mng = $mng;
    }

    // untuk mengambil semua data produk
    public function getAll()
    {
        $sql = "SELECT p.id_produk, p.kd_produk, p.nama, p.satuan, (SELECT SUM( s.stock ) FROM App\Entity\TbStock s WHERE s.kd_produk = p.kd_produk) AS stock, (SELECT SUM( pd.jumlah ) FROM App\Entity\TbPemesananDetail pd WHERE pd.kd_produk = p.kd_produk) AS jumlah, ( SELECT SUM( k.jumlah ) FROM App\Entity\TbKeranjang k WHERE k.kd_produk = p.kd_produk ) AS jumlah_keranjang, p.harga, p.gambar, p.tentang FROM App\Entity\TbProduk p";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }

    // untuk mengambil detail data produk
    public function getDetail($id)
    {
        $sql = "SELECT p.id_produk, p.kd_produk, p.nama, p.satuan, ( SELECT SUM( s.stock ) FROM App\Entity\TbStock s WHERE s.kd_produk = p.kd_produk ) AS stock, (SELECT SUM( pd.jumlah ) FROM App\Entity\TbPemesananDetail pd WHERE pd.kd_produk = p.kd_produk) AS jumlah, ( SELECT SUM( k.jumlah ) FROM App\Entity\TbKeranjang k WHERE k.kd_produk = p.kd_produk ) AS jumlah_keranjang, p.harga, p.gambar, p.tentang FROM App\Entity\TbProduk p WHERE p.kd_produk = '$id'";
        $qry = $this->mng->createQuery($sql)->getSingleResult();
        return $qry;
    }
}
