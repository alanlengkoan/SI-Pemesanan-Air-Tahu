<?php

namespace App\Repository;

use App\Entity\TbPembayaran;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbPembayaran|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPembayaran|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPembayaran[]    findAll()
 * @method TbPembayaran[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPembayaranRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbPembayaran::class);
    }
}
