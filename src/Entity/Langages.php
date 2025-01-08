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

    #[ORM\Column(length: 255, unique:true)]
    private ?string $nom = null;

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

    /**
     * @return Collection<int, ProfilsDevLangages>
     */
    public function getProfilsDevLangages(): Collection
    {
        return $this->profilsDevLangages;
    }

    public function addProfilsDevLangage(ProfilsDevLangages $profilsDevLangage): self
    {
        if (!$this->profilsDevLangages->contains($profilsDevLangage)) {
            $this->profilsDevLangages->add($profilsDevLangage);
            $profilsDevLangage->setLangage($this);
        }
        return $this;
    }

    public function removeProfilsDevLangage(ProfilsDevLangages $profilsDevLangage): self
    {
        if ($this->profilsDevLangages->removeElement($profilsDevLangage)) {
            if ($profilsDevLangage->getLangage() === $this) {
                $profilsDevLangage->setLangage(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, PostesTechnologies>
     */
    public function getPostesTechnologies(): Collection
    {
        return $this->postesTechnologies;
    }

    public function addPostesTechnology(PostesTechnologies $postesTechnology): self
    {
        if (!$this->postesTechnologies->contains($postesTechnology)) {
            $this->postesTechnologies->add($postesTechnology);
            $postesTechnology->setLangage($this);
        }
        return $this;
    }

    public function removePostesTechnology(PostesTechnologies $postesTechnology): self
    {
        if ($this->postesTechnologies->removeElement($postesTechnology)) {
            if ($postesTechnology->getLangage() === $this) {
                $postesTechnology->setLangage(null);
            }
        }
        return $this;
    }

    public function getProfilsDev(): ?ProfilsDev
    {
        return $this->profilsDev;
    }

    public function setProfilsDev(?ProfilsDev $profilsDev): static
    {
        $this->profilsDev = $profilsDev;

        return $this;
    }

    public function getPostes(): ?Postes
    {
        return $this->postes;
    }

    public function setPostes(?Postes $postes): static
    {
        $this->postes = $postes;

        return $this;
    }
}
