<?php

namespace App\Repository;

use App\Entity\TbPelanggan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbPelanggan|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPelanggan|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPelanggan[]    findAll()
 * @method TbPelanggan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPelangganRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbPelanggan::class);
    }

    // /**
    //  * @return TbPelanggan[] Returns an array of TbPelanggan objects
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
    public function findOneBySomeField($value): ?TbPelanggan
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
