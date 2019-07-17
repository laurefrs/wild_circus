<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class ImageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $image = new Image();
            $image->setTitle($faker->realText($maxNbChars = 5a0, $indexSize = 2)
        );
            $image->setShortContent($faker->text);
            $image->setAdress($faker->imageUrl($width = 640, $height = 480, 'nightlife'));

            $manager->persist($image);
        }

        $manager->flush();
    }
}
