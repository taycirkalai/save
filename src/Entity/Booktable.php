<?php

namespace App\Entity;

use App\Repository\BooktableRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BooktableRepository::class)]
class Booktable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_heure_reservation = null;

    #[ORM\Column(nullable: true)]
    private ?int $nb_personne = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $etat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateHeureReservation(): ?\DateTimeInterface
    {
        return $this->date_heure_reservation;
    }

    public function setDateHeureReservation(?\DateTimeInterface $date_heure_reservation): self
    {
        $this->date_heure_reservation = $date_heure_reservation;

        return $this;
    }

    public function getNbPersonne(): ?int
    {
        return $this->nb_personne;
    }

    public function setNbPersonne(?int $nb_personne): self
    {
        $this->nb_personne = $nb_personne;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
