<?php

namespace App\Entity;

use App\Repository\CompanyCrtersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyCrtersRepository::class)]
class CompanyCrters
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $langages = null;

    #[ORM\Column(nullable: true)]
    private ?int $salaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(nullable: true)]
    private ?int $experienceYear = null;

    #[ORM\OneToOne(inversedBy: 'companyCrters', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Company $company = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangages(): ?string
    {
        return $this->langages;
    }

    public function setLangages(?string $langages): static
    {
        $this->langages = $langages;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(?int $salaire): static
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getExperienceYear(): ?int
    {
        return $this->experienceYear;
    }

    public function setExperienceYear(?int $experienceYear): static
    {
        $this->experienceYear = $experienceYear;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(Company $company): static
    {
        $this->company = $company;

        return $this;
    }
}
