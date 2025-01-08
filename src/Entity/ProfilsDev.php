<?php

namespace App\Entity;

use App\Repository\ProfilsDevRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfilsDevRepository::class)]
class ProfilsDev
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $experience = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $salaire_min = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $biographie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    /**
     * @var Collection<int, ProfilsDevLangages>
     */
    #[ORM\OneToMany(targetEntity: ProfilsDevLangages::class, mappedBy: 'profil', cascade: ['persist', 'remove'])]
    private Collection $langages;

    /**
     * @var Collection<int, Evaluations>
     */
    #[ORM\OneToMany(targetEntity: Evaluations::class, mappedBy: 'developpeur', cascade: ['persist', 'remove'])]
    private Collection $evaluations;

    /**
     * @var Collection<int, Statistiques>
     */
    #[ORM\OneToMany(targetEntity: Statistiques::class, mappedBy: 'profilDev')]
    private Collection $statistiques;

    public function __construct()
    {
        $this->langages = new ArrayCollection();
        $this->evaluations = new ArrayCollection();
        $this->statistiques = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $experience): static
    {
        $this->experience = $experience;

        return $this;
    }

    public function getSalaireMin(): ?string
    {
        return $this->salaire_min;
    }

    public function setSalaireMin(?string $salaire_min): static
    {
        $this->salaire_min = $salaire_min;

        return $this;
    }

    public function getBiographie(): ?string
    {
        return $this->biographie;
    }

    public function setBiographie(?string $biographie): static
    {
        $this->biographie = $biographie;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): static
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        // set the owning side of the relation if necessary
        if ($user->getProfilsDev() !== $this) {
            $user->setProfilsDev($this);
        }

        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, ProfilsDevLangages>
     */
    public function getLangages(): Collection
    {
        return $this->langages;
    }

    public function addLangage(ProfilsDevLangages $langage): self
    {
        if (!$this->langages->contains($langage)) {
            $this->langages->add($langage);
            $langage->setProfil($this);
        }

        return $this;
    }

    public function removeLangage(ProfilsDevLangages $langage): self
    {
        if ($this->langages->removeElement($langage)) {
            // set the owning side to null (unless already changed)
            if ($langage->getProfil() === $this) {
                $langage->setProfil(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Evaluations>
     */
    public function getEvaluations(): Collection
    {
        return $this->evaluations;
    }

    public function addEvaluation(Evaluations $evaluation): self
    {
        if (!$this->evaluations->contains($evaluation)) {
            $this->evaluations->add($evaluation);
            $evaluation->setDeveloppeur($this);
        }

        return $this;
    }

    public function removeEvaluation(Evaluations $evaluation): self
    {
        if ($this->evaluations->removeElement($evaluation)) {
            // set the owning side to null (unless already changed)
            if ($evaluation->getDeveloppeur() === $this) {
                $evaluation->setDeveloppeur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Statistiques>
     */
    public function getStatistiques(): Collection
    {
        return $this->statistiques;
    }

    public function addStatistique(Statistiques $statistique): self
    {
        if (!$this->statistiques->contains($statistique)) {
            $this->statistiques->add($statistique);
            $statistique->setProfilDev($this);
        }

        return $this;
    }

    public function removeStatistique(Statistiques $statistique): self
    {
        if ($this->statistiques->removeElement($statistique)) {
            // set the owning side to null (unless already changed)
            if ($statistique->getProfilDev() === $this) {
                $statistique->setProfilDev(null);
            }
        }

        return $this;
    }
}
