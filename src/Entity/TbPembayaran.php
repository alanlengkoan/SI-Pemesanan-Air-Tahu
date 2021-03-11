<?php

namespace App\Entity;

use App\Repository\TbPembayaranRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbPembayaranRepository::class)
 */
class TbPembayaran
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_pembayaran;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $kd_pemesanan;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_bank;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nama_penyetor;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $atas_nama;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jumlah_transfer;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $tanggal_transfer;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $bukti;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ins;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $upd;

    public function getIdPembayaran(): ?int
    {
        return $this->id_pembayaran;
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

    public function getIdBank(): ?int
    {
        return $this->id_bank;
    }

    public function setIdBank(?int $id_bank): self
    {
        $this->id_bank = $id_bank;

        return $this;
    }

    public function getNamaPenyetor(): ?string
    {
        return $this->nama_penyetor;
    }

    public function setNamaPenyetor(?string $nama_penyetor): self
    {
        $this->nama_penyetor = $nama_penyetor;

        return $this;
    }

    public function getAtasNama(): ?string
    {
        return $this->atas_nama;
    }

    public function setAtasNama(?string $atas_nama): self
    {
        $this->atas_nama = $atas_nama;

        return $this;
    }

    public function getJumlahTransfer(): ?int
    {
        return $this->jumlah_transfer;
    }

    public function setJumlahTransfer(?int $jumlah_transfer): self
    {
        $this->jumlah_transfer = $jumlah_transfer;

        return $this;
    }

    public function getTanggalTransfer(): ?\DateTimeInterface
    {
        return $this->tanggal_transfer;
    }

    public function setTanggalTransfer(?\DateTimeInterface $tanggal_transfer): self
    {
        $this->tanggal_transfer = $tanggal_transfer;

        return $this;
    }

    public function getBukti(): ?string
    {
        return $this->bukti;
    }

    public function setBukti(?string $bukti): self
    {
        $this->bukti = $bukti;

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
