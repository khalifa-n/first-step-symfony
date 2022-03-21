<?php

namespace App\Entity;


use App\Entity\EtudiantBoursier;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EtudiantBoursierLogeRepository;

#[ORM\Entity(repositoryClass: EtudiantBoursierLogeRepository::class)]
class EtudiantBoursierLoge extends EtudiantBoursier
{
    public function __construct()
    {
        parent::__construct();
    }

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $typeChambre;

    

    public function getTypeChambre(): ?string
    {
        return $this->typeChambre;
    }

    public function setTypeChambre(?string $typeChambre): self
    {
        $this->typeChambre = $typeChambre;

        return $this;
    }
}
