<?php

namespace App\Entity;

use App\Repository\FormRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Contracts\Service\Attribute\Required;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Date;

#[ORM\Entity(repositoryClass: FormRepository::class)]
#[UniqueEntity('email')]

class Form
{

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('Couverts', new Assert\LessThanOrEqual(50));
    }


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 2,
        max: 10,
        minMessage: 'Your first name must be at least {{ limit }} characters long',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 2,
        max: 10,
        minMessage: 'Your first name must be at least {{ limit }} characters long',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 2,
        max: 20,
        minMessage: 'Your first name must be at least {{ limit }} characters long',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    #[Assert\NotBlank]

    private ?string $email = null;

    #[ORM\Column]
    #[Assert\LessThanOrEqual(
        value: 6,
    )]
    private ?int $Couverts = null;

    #[ORM\Column]
    private ?string $Heure = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Your first name must be at least {{ limit }} characters long',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    private ?string $Allergies = null;

    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
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

    public function getCouverts(): ?int
    {
        return $this->Couverts;
    }

    public function setCouverts(int $Couverts): self
    {
        $this->Couverts = $Couverts;

        return $this;
    }

    public function getHeure(): ?string
    {
        return $this->Heure;
    }


    public function setHeure(string $Heure): self
    {
        $this->Heure = $Heure;

        return $this;
    }

    public function getAllergies(): ?string
    {
        return $this->Allergies;
    }

    public function setAllergies(string $Allergies): self
    {
        $this->Allergies = $Allergies;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
