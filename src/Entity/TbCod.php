<?php

namespace App\Entity;

use App\Repository\TbCodRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbCodRepository::class)
 */
class TbCod
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_cod;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $kd_pemesanan;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nama_bayar;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jumlah_bayar;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $tanggal_bayar;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ins;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $upd;

    public function getIdCod(): ?int
    {
        return $this->id_cod;
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

    public function getNamaBayar(): ?string
    {
        return $this->nama_bayar;
    }

    public function setNamaBayar(?string $nama_bayar): self
    {
        $this->nama_bayar = $nama_bayar;

        return $this;
    }

    public function getJumlahBayar(): ?int
    {
        return $this->jumlah_bayar;
    }

    public function setJumlahBayar(?int $jumlah_bayar): self
    {
        $this->jumlah_bayar = $jumlah_bayar;

        return $this;
    }

    public function getTanggalBayar(): ?\DateTimeInterface
    {
        return $this->tanggal_bayar;
    }

    public function setTanggalBayar(?\DateTimeInterface $tanggal_bayar): self
    {
        $this->tanggal_bayar = $tanggal_bayar;

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
