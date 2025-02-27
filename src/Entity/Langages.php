<?php

namespace App\Entity;

use App\Repository\LangagesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LangagesRepository::class)]
class Langages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $nom = null;

    /**
     * @var Collection<int, Postes>
     */
    #[ORM\ManyToMany(targetEntity: Postes::class, mappedBy: 'langages')]
    private Collection $postes;

    /**
     * @var Collection<int, ProfilsDev>
     */
    #[ORM\ManyToMany(targetEntity: ProfilsDev::class, mappedBy: 'langages')]
    private Collection $profilsDevs;

    /**
     * @var Collection<int, CompanyCrters>
     */
    #[ORM\ManyToMany(targetEntity: CompanyCrters::class, mappedBy: 'technologies')]
    private Collection $companyCrters;

    public function __construct()
    {
        $this->postes = new ArrayCollection();
        $this->profilsDevs = new ArrayCollection();
        $this->companyCrters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPostes(): Collection
    {
        return $this->postes;
    }

    public function addPoste(Postes $poste): static
    {
        if (!$this->postes->contains($poste)) {
            $this->postes->add($poste);
            $poste->addLangage($this);
        }

        return $this;
    }

    public function removePoste(Postes $poste): static
    {
        if ($this->postes->removeElement($poste)) {
            $poste->removeLangage($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, ProfilsDev>
     */
    public function getProfilsDevs(): Collection
    {
        return $this->profilsDevs;
    }

    public function addProfilsDev(ProfilsDev $profilsDev): static
    {
        if (!$this->profilsDevs->contains($profilsDev)) {
            $this->profilsDevs->add($profilsDev);
            $profilsDev->addLangage($this);
        }

        return $this;
    }

    public function removeProfilsDev(ProfilsDev $profilsDev): static
    {
        if ($this->profilsDevs->removeElement($profilsDev)) {
            $profilsDev->removeLangage($this);
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->nom; // Remplacez "nom" par la propriété pertinente de l'entité Langages
    }

    /**
     * @return Collection<int, CompanyCrters>
     */
    public function getCompanyCrters(): Collection
    {
        return $this->companyCrters;
    }

    public function addCompanyCrter(CompanyCrters $companyCrter): static
    {
        if (!$this->companyCrters->contains($companyCrter)) {
            $this->companyCrters->add($companyCrter);
            $companyCrter->addTechnology($this);
        }

        return $this;
    }

    public function removeCompanyCrter(CompanyCrters $companyCrter): static
    {
        if ($this->companyCrters->removeElement($companyCrter)) {
            $companyCrter->removeTechnology($this);
        }

        return $this;
    }
}