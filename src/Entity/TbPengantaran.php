<?php

namespace App\Entity;

use App\Repository\TbPengantaranRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbPengantaranRepository::class)
 */
class TbPengantaran
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_pengantaran;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $kd_pemesanan;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_users;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('belum-lihat', 'lihat')")
     */
    private $status_lihat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ins;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $upd;

    public function getIdPengantaran(): ?int
    {
        return $this->id_pengantaran;
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

    public function getIdUsers(): ?int
    {
        return $this->id_users;
    }

    public function setIdUsers(?int $id_users): self
    {
        $this->id_users = $id_users;

        return $this;
    }

    public function getStatusLihat(): ?string
    {
        return $this->status_lihat;
    }

    public function setStatusLihat(?string $status_lihat): self
    {
        $this->status_lihat = $status_lihat;

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
