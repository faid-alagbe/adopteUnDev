<?php

namespace App\Entity;

use App\Repository\StatistiquesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatistiquesRepository::class)]
class Statistiques
{
    public const TYPE_PROFIL = 'profil';
    public const TYPE_POSTE = 'poste';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $cibleId = null;

    #[ORM\Column]
    private ?string $type = null;

    #[ORM\Column]
    private int $vues = 0;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCibleId(): ?int
    {
        return $this->cibleId;
    }

    public function setCibleId(int $cibleId): self
    {
        $this->cibleId = $cibleId;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        if (!in_array($type, [self::TYPE_PROFIL, self::TYPE_POSTE])) {
            throw new \InvalidArgumentException('Type invalide');
        }
        $this->type = $type;
        return $this;
    }

    public function getVues(): int
    {
        return $this->vues;
    }

    public function setVues(int $vues): self
    {
        $this->vues = $vues;
        return $this;
    }

    public function incrementerVues(): self
    {
        $this->vues++;
        return $this;
    }
}
