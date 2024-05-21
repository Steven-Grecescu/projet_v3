<?php

namespace App\Entity;

use App\Repository\AdapterContentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdapterContentRepository::class)]
class AdapterContent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\JoinTable(name: 'adapterContent_webContent')]
    #[ORM\JoinColumn(name: 'adapterContent_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'webContent_id', referencedColumnName: 'id', unique: true)]
    #[ORM\ManyToMany(targetEntity: 'WebContent')]
    private Collection $webContents;

    public function __construct()
    {
        $this->webContents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, WebContent>
     */
    public function getWebContents(): Collection
    {
        return $this->webContents;
    }

    public function addWebContent(WebContent $webContent): static
    {
        if (!$this->webContents->contains($webContent)) {
            $this->webContents->add($webContent);
        }

        return $this;
    }

    public function removeWebContent(WebContent $webContent): static
    {
        $this->webContents->removeElement($webContent);

        return $this;
    }
}
