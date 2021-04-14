<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LembagaDesaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=LembagaDesaRepository::class)
 */
class LembagaDesa
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
    private $id_lembaga;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nama_lembaga;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLembaga(): ?int
    {
        return $this->id_lembaga;
    }

    public function setIdLembaga(int $id_lembaga): self
    {
        $this->id_lembaga = $id_lembaga;

        return $this;
    }

    public function getNamaLembaga(): ?string
    {
        return $this->nama_lembaga;
    }

    public function setNamaLembaga(?string $nama_lembaga): self
    {
        $this->nama_lembaga = $nama_lembaga;

        return $this;
    }
}
