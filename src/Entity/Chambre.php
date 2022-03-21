<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChambreRepository::class)]
class Chambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $numero_chambre;

    #[ORM\Column(type: 'integer')]
    private $numero_etage;

    #[ORM\Column(type: 'string', length: 255)]
    private $type_chambre;

    #[ORM\ManyToOne(targetEntity: Pavillon::class, inversedBy: 'chambres')]
    private $Pavillons;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroChambre(): ?string
    {
        return $this->numero_chambre;
    }

    public function setNumeroChambre(string $numero_chambre): self
    {
        $this->numero_chambre = $numero_chambre;

        return $this;
    }

    public function getNumeroEtage(): ?int
    {
        return $this->numero_etage;
    }

    public function setNumeroEtage(int $numero_etage): self
    {
        $this->numero_etage = $numero_etage;

        return $this;
    }

    public function getTypeChambre(): ?string
    {
        return $this->type_chambre;
    }

    public function setTypeChambre(string $type_chambre): self
    {
        $this->type_chambre = $type_chambre;

        return $this;
    }

    public function getPavillons(): ?Pavillon
    {
        return $this->Pavillons;
    }

    public function setPavillons(?Pavillon $Pavillons): self
    {
        $this->Pavillons = $Pavillons;

        return $this;
    }
}
