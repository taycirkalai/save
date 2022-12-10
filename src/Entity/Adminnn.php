<?php

namespace App\Entity;

use App\Repository\AdminnnRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdminnnRepository::class)]
class Adminnn
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $adminname = null;

    #[ORM\Column(length: 255)]
    private ?string $passwordadmin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdminname(): ?string
    {
        return $this->adminname;
    }

    public function setAdminname(string $adminname): self
    {
        $this->adminname = $adminname;

        return $this;
    }

    public function getPasswordadmin(): ?string
    {
        return $this->passwordadmin;
    }

    public function setPasswordadmin(string $passwordadmin): self
    {
        $this->passwordadmin = $passwordadmin;

        return $this;
    }
}
