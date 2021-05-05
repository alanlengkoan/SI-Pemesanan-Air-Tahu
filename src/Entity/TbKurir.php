<?php

namespace App\Entity;

use App\Repository\TbKurirRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbKurirRepository::class)
 */
class TbKurir
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_kurir;

    /**
     * @ORM\Column(type="integer", nullable=true, unique=true)
     */
    private $id_users;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('L', 'P')")
     */
    private $kelamin;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $telepon;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $alamat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ins;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $upd;

    public function getIdKurir(): ?int
    {
        return $this->id_kurir;
    }

    public function getIdUsers(): ?string
    {
        return $this->id_users;
    }

    public function setIdUsers(?string $id_users): self
    {
        $this->id_users = $id_users;

        return $this;
    }

    public function getKelamin(): ?string
    {
        return $this->kelamin;
    }

    public function setKelamin(?string $kelamin): self
    {
        $this->kelamin = $kelamin;

        return $this;
    }

    public function getTelepon(): ?string
    {
        return $this->telepon;
    }

    public function setTelepon(?string $telepon): self
    {
        $this->telepon = $telepon;

        return $this;
    }

    public function getAlamat(): ?string
    {
        return $this->alamat;
    }

    public function setAlamat(?string $alamat): self
    {
        $this->alamat = $alamat;

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
