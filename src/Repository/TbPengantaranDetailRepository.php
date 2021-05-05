<?php

namespace App\Repository;

use App\Entity\TbPengantaranDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbPengantaranDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPengantaranDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPengantaranDetail[]    findAll()
 * @method TbPengantaranDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPengantaranDetailRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbPengantaranDetail::class);
        $this->mng = $mng;
    }

    // untuk mengambil tracking barang
    public function getRiwayat($kd)
    {
        $sql = "SELECT tpd.kd_pemesanan, tpd.status, tpd.ins FROM App\Entity\TbPengantaranDetail tpd WHERE tpd.kd_pemesanan = '$kd'";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
}
