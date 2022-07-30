<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $mainuser = NEW User();
        $mainuser->setName('Nathuz');
        $mainuser->setRoles(['ROLE_ADMIN']);
        $mainuser->setPassword($this->encoder->hashPassword($mainuser, 'Noepupdu50!!'));
        $mainuser->setEmail('nathuznoepupin@gmail.com');
        $mainuser->setAdress('96 rue Carnot, 50120');
        $mainuser->setTel('+33 6 72 68 87 53');
        $manager->persist($mainuser);

        $manager->flush();
    }
}
