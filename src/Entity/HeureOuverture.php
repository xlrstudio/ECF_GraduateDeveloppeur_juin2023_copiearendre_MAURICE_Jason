<?php

namespace App\Entity;

use App\Repository\HeureOuvertureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HeureOuvertureRepository::class)]
class HeureOuverture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\LessThanOrEqual(
        value: 10,
    )]
    private ?string $jourDeLaSemaine = null;

    #[ORM\Column(length: 255)]
    #[Assert\LessThanOrEqual(
        value: 10,
    )]
    private ?string $heureOuverture = null;

    #[ORM\Column(length: 255)]
    #[Assert\LessThanOrEqual(
        value: 10,
    )]
    private ?string $heureFermeture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJourDeLaSemaine(): ?string
    {
        return $this->jourDeLaSemaine;
    }

    public function setJourDeLaSemaine(string $jourDeLaSemaine): self
    {
        $this->jourDeLaSemaine = $jourDeLaSemaine;

        return $this;
    }

    public function getHeureOuverture(): ?string
    {
        return $this->heureOuverture;
    }

    public function setHeureOuverture(string $heureOuverture): self
    {
        $this->heureOuverture = $heureOuverture;

        return $this;
    }

    public function getHeureFermeture(): ?string
    {
        return $this->heureFermeture;
    }

    public function setHeureFermeture(string $heureFermeture): self
    {
        $this->heureFermeture = $heureFermeture;

        return $this;
    }
}
