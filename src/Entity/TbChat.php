<?php

namespace App\Entity;

use App\Repository\TbChatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbChatRepository::class)
 */
class TbChat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_chat;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $kd_pemesanan;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_users;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $level;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pesan;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_send;

    public function getIdChat(): ?int
    {
        return $this->id_chat;
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

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getPesan(): ?string
    {
        return $this->pesan;
    }

    public function setPesan(?string $pesan): self
    {
        $this->pesan = $pesan;

        return $this;
    }

    public function getDateSend(): ?\DateTimeInterface
    {
        return $this->date_send;
    }

    public function setDateSend(?\DateTimeInterface $date_send): self
    {
        $this->date_send = $date_send;

        return $this;
    }
}
