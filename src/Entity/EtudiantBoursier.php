<?php

namespace App\Entity;

use App\Entity\Etudiant;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EtudiantBoursierRepository;

#[ORM\Entity(repositoryClass: EtudiantBoursierRepository::class)]
class EtudiantBoursier extends Etudiant
{
    public function __construct()
    {
        parent::__construct();
    }

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $typeBourse;


    public function getTypeBourse(): ?string
    {
        return $this->typeBourse;
    }

    public function setTypeBourse(?string $typeBourse): self
    {
        $this->typeBourse = $typeBourse;

        return $this;
    }
}
