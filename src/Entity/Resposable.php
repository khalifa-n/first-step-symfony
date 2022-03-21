<?php

namespace App\Entity;

use App\Entity\Personne;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ResposableRepository;

#[ORM\Entity(repositoryClass: ResposableRepository::class)]
class Resposable extends Personne
{
    public function __construct()
    {
        parent::__construct();
    }

    #[ORM\Column(type: 'string', length: 255)]
    private $password;


    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
