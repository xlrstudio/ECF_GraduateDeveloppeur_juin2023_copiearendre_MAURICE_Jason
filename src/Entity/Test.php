<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $test = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTest(): ?\DateTimeInterface
    {
        return $this->test;
    }

    public function setTest(\DateTimeInterface $test): self
    {
        $this->test = $test;

        return $this;
    }
}
