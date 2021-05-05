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
}
