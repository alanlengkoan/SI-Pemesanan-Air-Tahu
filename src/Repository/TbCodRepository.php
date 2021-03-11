<?php

namespace App\Repository;

use App\Entity\TbCod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbCod|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbCod|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbCod[]    findAll()
 * @method TbCod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbCodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbCod::class);
    }

    // /**
    //  * @return TbCod[] Returns an array of TbCod objects
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
    public function findOneBySomeField($value): ?TbCod
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
