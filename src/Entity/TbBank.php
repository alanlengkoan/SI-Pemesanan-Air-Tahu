<?php

namespace App\Entity;

use App\Repository\TbBankRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbBankRepository::class)
 */
class TbBank
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_bank;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $nama;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $rekening;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ins;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $upd;

    public function getIdBank(): ?int
    {
        return $this->id_bank;
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

    public function getRekening(): ?string
    {
        return $this->rekening;
    }

    public function setRekening(?string $rekening): self
    {
        $this->rekening = $rekening;

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
