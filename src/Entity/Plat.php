<?php

namespace App\Entity;

use App\Repository\PlatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatRepository::class)]
class Plat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $descripition = null;

    #[ORM\Column(nullable: true)]
    private ?int $prix = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $ingrediant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripition(): ?string
    {
        return $this->descripition;
    }

    public function setDescripition(?string $descripition): self
    {
        $this->descripition = $descripition;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIngrediant(): ?string
    {
        return $this->ingrediant;
    }

    public function setIngrediant(?string $ingrediant): self
    {
        $this->ingrediant = $ingrediant;

        return $this;
    }
}
