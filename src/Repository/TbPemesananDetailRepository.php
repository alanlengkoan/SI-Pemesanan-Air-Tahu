<?php

namespace App\Repository;

use App\Entity\TbPemesananDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbPemesananDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPemesananDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPemesananDetail[]    findAll()
 * @method TbPemesananDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPemesananDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbPemesananDetail::class);
    }

    // /**
    //  * @return TbPemesananDetail[] Returns an array of TbPemesananDetail objects
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
    public function findOneBySomeField($value): ?TbPemesananDetail
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
