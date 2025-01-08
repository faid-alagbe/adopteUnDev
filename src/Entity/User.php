<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'utilisateurs')]
#[UniqueEntity(fields: ['email'], message: 'Il existe déjà un compte avec cet email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    public const ROLE_DEV = 'ROLE_DEV';
    public const ROLE_COMPANY = 'ROLE_COMPANY';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 20)]
    private ?string $role = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\OneToOne(mappedBy: 'user', cascade: ['persist', 'remove'])]
    private ?ProfilsDev $profilsDev = null;

    #[ORM\OneToMany(targetEntity: Postes::class, mappedBy: 'user')]
    private Collection $postes;

    #[ORM\OneToMany(targetEntity: Messages::class, mappedBy: 'expediteur')]
    private Collection $messagesSent;

    #[ORM\OneToMany(targetEntity: Messages::class, mappedBy: 'destinataire')]
    private Collection $messagesReceived;

    #[ORM\OneToMany(targetEntity: Favoris::class, mappedBy: 'user')]
    private Collection $favoris;

    public function __construct()
    {
        $this->postes = new ArrayCollection();
        $this->messagesSent = new ArrayCollection();
        $this->messagesReceived = new ArrayCollection();
        $this->favoris = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        if (!in_array($role, [self::ROLE_DEV, self::ROLE_COMPANY])) {
            throw new \InvalidArgumentException('Role invalide');
        }
        $this->role = $role;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        return [$this->role];
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials(): void
    {
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getProfilsDev(): ?ProfilsDev
    {
        return $this->profilsDev;
    }

    public function setProfilsDev(?ProfilsDev $profilsDev): self
    {
        if ($profilsDev === null && $this->profilsDev !== null) {
            $this->profilsDev->setUser(null);
        }
        if ($profilsDev !== null && $profilsDev->getUser() !== $this) {
            $profilsDev->setUser($this);
        }
        $this->profilsDev = $profilsDev;
        return $this;
    }

    /**
     * @return Collection<int, Postes>
     */
    public function getPostes(): Collection
    {
        return $this->postes;
    }

    public function addPoste(Postes $poste): self
    {
        if (!$this->postes->contains($poste)) {
            $this->postes->add($poste);
            $poste->setUser($this);
        }
        return $this;
    }

    public function removePoste(Postes $poste): self
    {
        if ($this->postes->removeElement($poste)) {
            if ($poste->getUser() === $this) {
                $poste->setUser(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Messages>
     */
    public function getMessagesSent(): Collection
    {
        return $this->messagesSent;
    }

    public function addMessageSent(Messages $message): self
    {
        if (!$this->messagesSent->contains($message)) {
            $this->messagesSent->add($message);
            $message->setExpediteur($this);
        }
        return $this;
    }

    public function removeMessageSent(Messages $message): self
    {
        if ($this->messagesSent->removeElement($message)) {
            if ($message->getExpediteur() === $this) {
                $message->setExpediteur(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Messages>
     */
    public function getMessagesReceived(): Collection
    {
        return $this->messagesReceived;
    }

    public function addMessageReceived(Messages $message): self
    {
        if (!$this->messagesReceived->contains($message)) {
            $this->messagesReceived->add($message);
            $message->setDestinataire($this);
        }
        return $this;
    }

    public function removeMessageReceived(Messages $message): self
    {
        if ($this->messagesReceived->removeElement($message)) {
            if ($message->getDestinataire() === $this) {
                $message->setDestinataire(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Favoris>
     */
    public function getFavoris(): Collection
    {
        return $this->favoris;
    }

    public function addFavori(Favoris $favori): self
    {
        if (!$this->favoris->contains($favori)) {
            $this->favoris->add($favori);
            $favori->setUser($this);
        }
        return $this;
    }

    public function removeFavori(Favoris $favori): self
    {
        if ($this->favoris->removeElement($favori)) {
            if ($favori->getUser() === $this) {
                $favori->setUser(null);
            }
        }
        return $this;
    }
}
