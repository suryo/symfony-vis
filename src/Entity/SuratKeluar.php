<?php

namespace App\Entity;

use App\Repository\SuratKeluarRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SuratKeluarRepository::class)
 */
class SuratKeluar
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $No_surat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_surat_keluar;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $tgl_keluar;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $perihal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoSurat(): ?int
    {
        return $this->No_surat;
    }

    public function setNoSurat(int $No_surat): self
    {
        $this->No_surat = $No_surat;

        return $this;
    }

    public function getIdSuratKeluar(): ?string
    {
        return $this->id_surat_keluar;
    }

    public function setIdSuratKeluar(string $id_surat_keluar): self
    {
        $this->id_surat_keluar = $id_surat_keluar;

        return $this;
    }

    public function getTglKeluar(): ?\DateTimeInterface
    {
        return $this->tgl_keluar;
    }

    public function setTglKeluar(?\DateTimeInterface $tgl_keluar): self
    {
        $this->tgl_keluar = $tgl_keluar;

        return $this;
    }

    public function getPerihal(): ?string
    {
        return $this->perihal;
    }

    public function setPerihal(?string $perihal): self
    {
        $this->perihal = $perihal;

        return $this;
    }
}
