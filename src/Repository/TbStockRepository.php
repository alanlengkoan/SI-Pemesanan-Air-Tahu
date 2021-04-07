<?php

namespace App\Repository;

use App\Entity\TbStock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbStock|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbStock|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbStock[]    findAll()
 * @method TbStock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbStockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbStock::class);
    }
}
