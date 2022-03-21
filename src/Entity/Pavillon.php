<?php

namespace App\Entity;

use App\Repository\PavillonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PavillonRepository::class)]
class Pavillon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numeroPavillon;

    #[ORM\Column(type: 'integer')]
    private $numeroEtage;

    #[ORM\Column(type: 'integer')]
    private $nombreEtage;

    #[ORM\OneToMany(mappedBy: 'Pavillons', targetEntity: Chambre::class)]
    private $chambres;

    public function __construct()
    {
        $this->chambres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroPavillon(): ?int
    {
        return $this->numeroPavillon;
    }

    public function setNumeroPavillon(int $numeroPavillon): self
    {
        $this->numeroPavillon = $numeroPavillon;

        return $this;
    }

    public function getNumeroEtage(): ?int
    {
        return $this->numeroEtage;
    }

    public function setNumeroEtage(int $numeroEtage): self
    {
        $this->numeroEtage = $numeroEtage;

        return $this;
    }

    public function getNombreEtage(): ?int
    {
        return $this->nombreEtage;
    }

    public function setNombreEtage(int $nombreEtage): self
    {
        $this->nombreEtage = $nombreEtage;

        return $this;
    }

    /**
     * @return Collection<int, Chambre>
     */
    public function getChambres(): Collection
    {
        return $this->chambres;
    }

    public function addChambre(Chambre $chambre): self
    {
        if (!$this->chambres->contains($chambre)) {
            $this->chambres[] = $chambre;
            $chambre->setPavillons($this);
        }

        return $this;
    }

    public function removeChambre(Chambre $chambre): self
    {
        if ($this->chambres->removeElement($chambre)) {
            // set the owning side to null (unless already changed)
            if ($chambre->getPavillons() === $this) {
                $chambre->setPavillons(null);
            }
        }

        return $this;
    }
}
