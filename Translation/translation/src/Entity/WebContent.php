<?php

namespace App\Entity;

use App\Repository\WebContentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WebContentRepository::class)]
class WebContent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Langue $langue = null;

    #[ORM\Column]
    private ?int $idTraduction = null;

    #[ORM\Column(length: 20)]
    private ?string $classNameTraduction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangue(): ?Langue
    {
        return $this->langue;
    }

    public function setLangue(?Langue $langue): static
    {
        $this->langue = $langue;

        return $this;
    }

    public function getIdTraduction(): ?int
    {
        return $this->idTraduction;
    }

    public function setIdTraduction(int $idTraduction): static
    {
        $this->idTraduction = $idTraduction;

        return $this;
    }

    public function getClassNameTraduction(): ?string
    {
        return $this->classNameTraduction;
    }

    public function setClassNameTraduction(string $classNameTraduction): static
    {
        $this->classNameTraduction = $classNameTraduction;

        return $this;
    }
}
