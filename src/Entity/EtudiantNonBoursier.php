<?php

namespace App\Entity;

use App\Entity\Etudiant;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EtudiantNonBoursierRepository;

#[ORM\Entity(repositoryClass: EtudiantNonBoursierRepository::class)]
class EtudiantNonBoursier extends Etudiant
{
   public function __construct()
   {
      parent::__construct(); 
   }

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $adresse;

   

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }
}
