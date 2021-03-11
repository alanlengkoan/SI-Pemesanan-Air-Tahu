<?php

namespace App\Entity;

use App\Repository\TbKeranjangRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbKeranjangRepository::class)
 */
class TbKeranjang
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_keranjang;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_user;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $kd_produk;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jumlah;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $harga;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sub_total;

    public function getIdKeranjang(): ?int
    {
        return $this->id_keranjang;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(?int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getKdProduk(): ?string
    {
        return $this->kd_produk;
    }

    public function setKdProduk(?string $kd_produk): self
    {
        $this->kd_produk = $kd_produk;

        return $this;
    }

    public function getJumlah(): ?int
    {
        return $this->jumlah;
    }

    public function setJumlah(?int $jumlah): self
    {
        $this->jumlah = $jumlah;

        return $this;
    }

    public function getHarga(): ?int
    {
        return $this->harga;
    }

    public function setHarga(?int $harga): self
    {
        $this->harga = $harga;

        return $this;
    }

    public function getSubTotal(): ?int
    {
        return $this->sub_total;
    }

    public function setSubTotal(?int $sub_total): self
    {
        $this->sub_total = $sub_total;

        return $this;
    }
}
