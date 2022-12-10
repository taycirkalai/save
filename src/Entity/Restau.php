<?php

namespace App\Entity;

use App\Repository\RestauRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestauRepository::class)]
class Restau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_restau = null;

    #[ORM\Column(nullable: true)]
    private ?int $numero_telfn_restau = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $adresse_restau = null;

    #[ORM\Column(nullable: true)]
    private ?int $fax_restau = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $ville = null;

    #[ORM\ManyToOne(inversedBy: 'restaus')]
    private ?restaurateurs $restaurant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRestau(): ?string
    {
        return $this->nom_restau;
    }

    public function setNomRestau(string $nom_restau): self
    {
        $this->nom_restau = $nom_restau;

        return $this;
    }

    public function getNumeroTelfnRestau(): ?int
    {
        return $this->numero_telfn_restau;
    }

    public function setNumeroTelfnRestau(?int $numero_telfn_restau): self
    {
        $this->numero_telfn_restau = $numero_telfn_restau;

        return $this;
    }

    public function getAdresseRestau(): ?string
    {
        return $this->adresse_restau;
    }

    public function setAdresseRestau(?string $adresse_restau): self
    {
        $this->adresse_restau = $adresse_restau;

        return $this;
    }

    public function getFaxRestau(): ?int
    {
        return $this->fax_restau;
    }

    public function setFaxRestau(?int $fax_restau): self
    {
        $this->fax_restau = $fax_restau;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getRestaurant(): ?restaurateurs
    {
        return $this->restaurant;
    }

    public function setRestaurant(?restaurateurs $restaurant): self
    {
        $this->restaurant = $restaurant;

        return $this;
    }
}
