<?php

namespace App\Entity;

use App\Repository\RestaurateursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurateursRepository::class)]
class Restaurateurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_restaurateur = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $email_restaurateur = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $pwd_restaurateur = null;

    #[ORM\Column(nullable: true)]
    private ?int $numero_tlfn_restaurateur = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $adresse_restaurateur = null;

    #[ORM\Column]
    private ?int $code_tva = null;

    #[ORM\Column(nullable: true)]
    private ?int $cin = null;

    #[ORM\OneToMany(mappedBy: 'restaurant', targetEntity: Restau::class)]
    private Collection $restaus;

    public function __construct()
    {
        $this->restaus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRestaurateur(): ?string
    {
        return $this->nom_restaurateur;
    }

    public function setNomRestaurateur(string $nom_restaurateur): self
    {
        $this->nom_restaurateur = $nom_restaurateur;

        return $this;
    }

    public function getEmailRestaurateur(): ?string
    {
        return $this->email_restaurateur;
    }

    public function setEmailRestaurateur(?string $email_restaurateur): self
    {
        $this->email_restaurateur = $email_restaurateur;

        return $this;
    }

    public function getPwdRestaurateur(): ?string
    {
        return $this->pwd_restaurateur;
    }

    public function setPwdRestaurateur(?string $pwd_restaurateur): self
    {
        $this->pwd_restaurateur = $pwd_restaurateur;

        return $this;
    }

    public function getNumeroTlfnRestaurateur(): ?int
    {
        return $this->numero_tlfn_restaurateur;
    }

    public function setNumeroTlfnRestaurateur(?int $numero_tlfn_restaurateur): self
    {
        $this->numero_tlfn_restaurateur = $numero_tlfn_restaurateur;

        return $this;
    }

    public function getAdresseRestaurateur(): ?string
    {
        return $this->adresse_restaurateur;
    }

    public function setAdresseRestaurateur(?string $adresse_restaurateur): self
    {
        $this->adresse_restaurateur = $adresse_restaurateur;

        return $this;
    }

    public function getCodeTva(): ?int
    {
        return $this->code_tva;
    }

    public function setCodeTva(int $code_tva): self
    {
        $this->code_tva = $code_tva;

        return $this;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(?int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * @return Collection<int, Restau>
     */
    public function getRestaus(): Collection
    {
        return $this->restaus;
    }

    public function addRestau(Restau $restau): self
    {
        if (!$this->restaus->contains($restau)) {
            $this->restaus->add($restau);
            $restau->setRestaurant($this);
        }

        return $this;
    }

    public function removeRestau(Restau $restau): self
    {
        if ($this->restaus->removeElement($restau)) {
            // set the owning side to null (unless already changed)
            if ($restau->getRestaurant() === $this) {
                $restau->setRestaurant(null);
            }
        }

        return $this;
    }
}
