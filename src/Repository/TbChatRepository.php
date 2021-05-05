<?php

namespace App\Repository;

use App\Entity\TbChat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbChat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbChat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbChat[]    findAll()
 * @method TbChat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbChatRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbChat::class);
        $this->mng = $mng;
    }

    // untuk mengambil riwayat pemesanan user
    public function getDetail($kd)
    {
        $sql = "SELECT tc.id_chat, tc.kd_pemesanan, tc.id_users, tc.level, tc.pesan, tc.date_send FROM App\Entity\TbChat tc WHERE tc.kd_pemesanan = '$kd' ORDER BY tc.date_send ASC";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
}
