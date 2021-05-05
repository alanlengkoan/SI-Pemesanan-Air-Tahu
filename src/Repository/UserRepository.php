<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, User::class);
        $this->mng = $mng;
    }

    // Used to upgrade (rehash) the user's password automatically over time.
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    // untuk mengambil detail admin
    public function getDetailAdmin($id)
    {
        $sql = "SELECT u.id_users, u.nama, u.email, u.foto, u.username FROM App\Entity\User u WHERE u.id_users='$id'";
        $qry = $this->mng->createQuery($sql)->getOneOrNullResult();
        return $qry;
    }

    // untuk mengambil detail pelanggan
    public function getDetailPelanggan($id)
    {
        $sql = "SELECT u.id_users, u.nama, u.email, u.foto, u.username, tp.id_pelanggan, tp.kelamin, tp.telepon, tp.alamat FROM App\Entity\User AS u LEFT JOIN App\Entity\TbPelanggan AS tp WITH u.id_users = tp.id_users WHERE u.id_users='$id'";
        $qry = $this->mng->createQuery($sql)->getOneOrNullResult();
        return $qry;
    }
    
    // untuk mengambil detail kurir
    public function getDetailKurir($id)
    {
        $sql = "SELECT u.id_users, u.nama, u.email, u.foto, u.username, tk.id_kurir, tk.kelamin, tk.telepon, tk.alamat FROM App\Entity\User AS u LEFT JOIN App\Entity\TbKurir AS tk WITH u.id_users = tk.id_users WHERE u.id_users='$id'";
        $qry = $this->mng->createQuery($sql)->getOneOrNullResult();
        return $qry;
    }
}
