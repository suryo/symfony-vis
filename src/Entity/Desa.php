<?php

namespace App\Entity;

use App\Repository\DesaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DesaRepository::class)
 */
class Desa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama_desa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alamat_desa;

    /**
     * @ORM\Column(type="text")
     */
    private $deskripsi;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $latitude;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamaDesa(): ?string
    {
        return $this->nama_desa;
    }

    public function setNamaDesa(string $nama_desa): self
    {
        $this->nama_desa = $nama_desa;

        return $this;
    }

    public function getAlamatDesa(): ?string
    {
        return $this->alamat_desa;
    }

    public function setAlamatDesa(string $alamat_desa): self
    {
        $this->alamat_desa = $alamat_desa;

        return $this;
    }

    public function getDeskripsi(): ?string
    {
        return $this->deskripsi;
    }

    public function setDeskripsi(string $deskripsi): self
    {
        $this->deskripsi = $deskripsi;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }
}
