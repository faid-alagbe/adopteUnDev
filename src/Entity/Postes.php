<?php

namespace App\Entity;

use App\Repository\PostesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: PostesRepository::class)]
class Postes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $localisation = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $experience_requise = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $salaire = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'postes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    /**
     * @var Collection<int, langages>
     */
    #[ORM\ManyToMany(targetEntity: Langages::class, inversedBy: 'postes')]
    private Collection $langages;

    public function __construct()
    {
        $this->langages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getExperienceRequise(): ?int
    {
        return $this->experience_requise;
    }

    public function setExperienceRequise(int $experience_requise): static
    {
        $this->experience_requise = $experience_requise;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->salaire;
    }

    public function setSalaire(?string $salaire): static
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function showCompany():Company{
        return $this->getUser()->getCompany();
    }

    /**
     * @return Collection<int, langages>
     */
    public function getLangages(): Collection
    {
        return $this->langages;
    }

    public function addLangage(langages $langage): static
    {
        if (!$this->langages->contains($langage)) {
            $this->langages->add($langage);
        }

        return $this;
    }

    public function removeLangage(langages $langage): static
    {
        $this->langages->removeElement($langage);

        return $this;
    }

   
}
