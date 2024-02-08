<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear('2008');
        $movie->setDescription('Emo movie');
        $movie->setImagePath('https://assetsio.reedpopcdn.com/2x1_NSwitchDS_BatmanArkhamTrilogy.jpg?width=1200&height=900&fit=crop&quality=100&format=png&enable=upscale&auto=webp');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('marvel');
        $movie2->setReleaseYear('2010');
        $movie2->setDescription('marvel movie 2');
        $movie2->setImagePath('https://assetsio.reedpopcdn.com/2x1_NSwitchDS_BatmanArkhamTrilogy.jpg?width=1200&height=900&fit=crop&quality=100&format=png&enable=upscale&auto=webp');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
