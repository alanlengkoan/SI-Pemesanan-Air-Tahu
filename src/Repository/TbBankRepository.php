<?php

namespace App\Repository;

use App\Entity\TbBank;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbBank|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbBank|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbBank[]    findAll()
 * @method TbBank[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbBankRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbBank::class);
        $this->mng = $mng;
    }

    // untuk mengambil semua data produk
    public function getAll()
    {
        $sql = "SELECT b.id_bank, b.nama, b.rekening FROM App\Entity\TbBank b";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
}
