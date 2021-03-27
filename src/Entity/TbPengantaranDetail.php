<?php

namespace App\Entity;

use App\Repository\TbPengantaranDetailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbPengantaranDetailRepository::class)
 */
class TbPengantaranDetail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_pengantaran_detail;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $kd_pemesanan;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ins;

    public function getIdPengantaranDetail(): ?int
    {
        return $this->id_pengantaran_detail;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

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
}
