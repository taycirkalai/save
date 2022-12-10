<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $name_user = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $First_name = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $last_name = null;

    #[ORM\Column(nullable: true)]
    private ?int $phone_user = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $Email_user = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $adresse_user = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $password_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameUser(): ?string
    {
        return $this->name_user;
    }

    public function setNameUser(?string $name_user): self
    {
        $this->name_user = $name_user;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->First_name;
    }

    public function setFirstName(?string $First_name): self
    {
        $this->First_name = $First_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(?string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getPhoneUser(): ?int
    {
        return $this->phone_user;
    }

    public function setPhoneUser(?int $phone_user): self
    {
        $this->phone_user = $phone_user;

        return $this;
    }

    public function getEmailUser(): ?string
    {
        return $this->Email_user;
    }

    public function setEmailUser(?string $Email_user): self
    {
        $this->Email_user = $Email_user;

        return $this;
    }

    public function getAdresseUser(): ?string
    {
        return $this->adresse_user;
    }

    public function setAdresseUser(?string $adresse_user): self
    {
        $this->adresse_user = $adresse_user;

        return $this;
    }

    public function getPasswordUser(): ?string
    {
        return $this->password_user;
    }

    public function setPasswordUser(?string $password_user): self
    {
        $this->password_user = $password_user;

        return $this;
    }
}
