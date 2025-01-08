<?php

namespace App\Entity;

use App\Repository\PostesTechnologiesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostesTechnologiesRepository::class)]
class PostesTechnologies
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $posteId = null;

    #[ORM\Column]
    private ?int $langagesId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosteId(): ?int
    {
        return $this->posteId;
    }

    public function setPosteId(int $posteId): static
    {
        $this->posteId = $posteId;

        return $this;
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
}
