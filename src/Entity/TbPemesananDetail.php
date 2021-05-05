<?php

namespace App\Entity;

use App\Repository\TbPemesananDetailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbPemesananDetailRepository::class)
 */
class TbPemesananDetail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_pemesanan_detail;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $kd_pemesanan;

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

    public function getIdPemesananDetail(): ?int
    {
        return $this->id_pemesanan_detail;
    }

    public function getKdPemesanan(): ?string
    {
        return $this->kd_pemesanan;
    }

    public function setKdPemesanan(?string $kd_pemesanan): self
    {
        $this->kd_pemesanan = $kd_pemesanan;

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
