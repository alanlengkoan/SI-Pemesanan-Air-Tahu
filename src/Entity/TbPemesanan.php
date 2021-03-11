<?php

namespace App\Entity;

use App\Repository\TbPemesananRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbPemesananRepository::class)
 */
class TbPemesanan
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_pemesanan;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $kd_pemesanan;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_users;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $tgl_pemesanan;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('c', 't')")
     */
    private $metode_pembayaran;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('0', '1', '2')")
     */
    private $status_pembayaran;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ins;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $upd;

    public function getIdPemesanan(): ?int
    {
        return $this->id_pemesanan;
    }

    public function getKdPemesanan(): ?string
    {
        return $this->kd_pemesanan;
    }

    public function setKdPemesanan(string $kd_pemesanan): self
    {
        $this->kd_pemesanan = $kd_pemesanan;

        return $this;
    }

    public function getIdUsers(): ?int
    {
        return $this->id_users;
    }

    public function setIdUsers(?int $id_users): self
    {
        $this->id_users = $id_users;

        return $this;
    }

    public function getTglPemesanan(): ?\DateTimeInterface
    {
        return $this->tgl_pemesanan;
    }

    public function setTglPemesanan(?\DateTimeInterface $tgl_pemesanan): self
    {
        $this->tgl_pemesanan = $tgl_pemesanan;

        return $this;
    }

    public function getMetodePembayaran(): ?string
    {
        return $this->metode_pembayaran;
    }

    public function setMetodePembayaran(?string $metode_pembayaran): self
    {
        $this->metode_pembayaran = $metode_pembayaran;

        return $this;
    }

    public function getStatusPembayaran(): ?string
    {
        return $this->status_pembayaran;
    }

    public function setStatusPembayaran(?string $status_pembayaran): self
    {
        $this->status_pembayaran = $status_pembayaran;

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
