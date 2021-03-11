<?php
// src/Twig/AppRuntime.php
namespace App\Twig;

use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\RuntimeExtensionInterface;

class AppRuntime implements RuntimeExtensionInterface
{
    private $mng;

    public function __construct(EntityManagerInterface $mng)
    {
        $this->mng   = $mng;
    }

    // untuk separator harga
    public function separatorHarga($number, $decimals = 0, $decPoint = ',', $thousandsSep = '.')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = $price;

        return $price;
    }

    // untuk jumlah keranjang
    public function jumlahKeranjang($idu)
    {
        $sql = "SELECT k.id_keranjang, p.gambar, p.nama, k.jumlah AS jumlah_keranjang, k.harga, k.sub_total, ( SELECT SUM( s.stock ) FROM App\Entity\TbStock s WHERE s.kd_produk = p.kd_produk ) AS stock, ( SELECT SUM( pd.jumlah ) FROM App\Entity\TbPemesananDetail pd WHERE pd.kd_produk = p.kd_produk ) AS jumlah FROM App\Entity\TbKeranjang k LEFT JOIN App\Entity\TbProduk p WITH k.kd_produk = p.kd_produk WHERE k.id_user = '$idu'";
        $qry = $this->mng->createQuery($sql);
        return count($qry->getResult());
    }
}
