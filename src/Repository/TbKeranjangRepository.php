<?php

namespace App\Repository;

use App\Entity\TbKeranjang;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbKeranjang|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbKeranjang|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbKeranjang[]    findAll()
 * @method TbKeranjang[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbKeranjangRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbKeranjang::class);
    }
}
