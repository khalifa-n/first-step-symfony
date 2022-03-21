<?php

namespace App\DataFixtures;

use App\Entity\Chambre;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ChambreFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $Chambre = new Chambre();
        $manager->persist($Chambre);

        $manager->flush();
    }
}
