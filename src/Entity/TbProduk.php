<?php

namespace App\Entity;

use App\Repository\TbProdukRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbProdukRepository::class)
 */
class TbProduk
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_produk;

    /**
     * @ORM\Column(type="string", length=10, nullable=true, unique=true)
     */
    private $kd_produk;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nama;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $satuan;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $harga;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $gambar;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $tentang;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ins;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $upd;

    public function getIdProduk(): ?int
    {
        return $this->id_produk;
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

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(?string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getSatuan(): ?string
    {
        return $this->satuan;
    }

    public function setSatuan(?string $satuan): self
    {
        $this->satuan = $satuan;

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

    public function getGambar(): ?string
    {
        return $this->gambar;
    }

    public function setGambar(?string $gambar): self
    {
        $this->gambar = $gambar;

        return $this;
    }

    public function getTentang(): ?string
    {
        return $this->tentang;
    }

    public function setTentang(?string $tentang): self
    {
        $this->tentang = $tentang;

        return $this;
    }

    public function getIns(): ?\DateTimeInterface
    {
        return $this->ins;
    }

    public function setIns(?\DateTimeInterface $ins): self
    {
        $this->ins = $ins;

        return $this;
    }

    public function getUpd(): ?\DateTimeInterface
    {
        return $this->upd;
    }

    public function setUpd(?\DateTimeInterface $upd): self
    {
        $this->upd = $upd;

        return $this;
    }
}
