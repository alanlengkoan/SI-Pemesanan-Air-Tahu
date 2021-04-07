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
}
