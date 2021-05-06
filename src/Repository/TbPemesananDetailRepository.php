<?php

namespace App\Repository;

use App\Entity\TbPemesananDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbPemesananDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPemesananDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPemesananDetail[]    findAll()
 * @method TbPemesananDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPemesananDetailRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbPemesananDetail::class);
        $this->mng = $mng;
    }

    // untuk mengambil detail pemesanan
    public function getDetailPemesanan($kdproduk)
    {
        $sql = "SELECT tbd.kd_produk, p.nama, tbd.jumlah, tbd.harga, tbd.sub_total FROM App\Entity\TbPemesananDetail tbd LEFT JOIN App\Entity\TbProduk p WITH tbd.kd_produk = p.kd_produk WHERE tbd.kd_pemesanan = '$kdproduk'";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
}
