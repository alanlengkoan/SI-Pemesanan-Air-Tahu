<?php

namespace App\Repository;

use App\Entity\TbKurir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbKurir|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbKurir|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbKurir[]    findAll()
 * @method TbKurir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbKurirRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbKurir::class);
        $this->mng = $mng;
    }

    // untuk mengambil semua data pemesanan
    public function getAll()
    {
        $sql = "SELECT tk.id_kurir, tk.id_users, u.nama, tk.kelamin, tk.telepon, tk.alamat FROM App\Entity\TbKurir AS tk LEFT JOIN App\Entity\User AS u WITH tk.id_users = u.id_users ORDER BY u.nama ASC";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
}
