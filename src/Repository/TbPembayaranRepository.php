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

    // /**
    //  * @return TbPembayaran[] Returns an array of TbPembayaran objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TbPembayaran
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
