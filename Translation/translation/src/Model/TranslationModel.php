<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\AdapterContent;

abstract class TranslationModel
{
    #[ORM\Column]
    protected ?int $unicity = null;//1 for french and other language are 0

    #[ORM\OneToOne(targetEntity: AdapterContent::class)]
    #[ORM\JoinColumn(name: 'adaptercontent_id', referencedColumnName: 'id')]
    protected ?AdapterContent $adapterContent = null;

    public function getAdapterContent(): ?AdapterContent
    {
        return $this->adapterContent;
    }

    public function setAdapterContent(?AdapterContent $adapterContent): static
    {
        $this->adapterContent = $adapterContent;

        return $this;
    }

    public function getUnicity(): ?int
    {
        return $this->unicity;
    }

    public function setUnicity(int $unicity): static
    {
        $this->unicity = $unicity;

        return $this;
    }
}