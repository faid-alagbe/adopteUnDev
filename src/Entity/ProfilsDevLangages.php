<?php

namespace App\Entity;

use App\Repository\ProfilsDevLangagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfilsDevLangagesRepository::class)]
class ProfilsDevLangages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $langagesId = null;

    #[ORM\Column]
    private ?int $profilId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangagesId(): ?int
    {
        return $this->langagesId;
    }

    public function setLangagesId(int $langagesId): static
    {
        $this->langagesId = $langagesId;

        return $this;
    }

    public function getProfilId(): ?int
    {
        return $this->profilId;
    }

    public function setProfilId(int $profilId): static
    {
        $this->profilId = $profilId;

        return $this;
    }
}
