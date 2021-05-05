<?php

namespace App\Repository;

use App\Entity\TbPelanggan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbPelanggan|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPelanggan|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPelanggan[]    findAll()
 * @method TbPelanggan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPelangganRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbPelanggan::class);
        $this->mng = $mng;
    }

    // untuk mengambil semua data pemesanan
    public function getAll()
    {
        $sql = "SELECT tp.id_pelanggan, tp.id_users, u.nama, tp.kelamin, tp.telepon, tp.alamat FROM App\Entity\TbPelanggan AS tp LEFT JOIN App\Entity\User AS u WITH tp.id_users = u.id_users ORDER BY u.nama ASC";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
}
