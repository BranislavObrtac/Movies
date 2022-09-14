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
        $movie->setTitle('Thor: Love and Thunder');
        $movie->setReleaseYear('2022');
        $movie->setDescription('This is the description for Thor: Love and Thunder.');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2021/04/20/03/42/thor-6192858_960_720.png');
        $movie->addActor($this->getReference('actor_3'));
        $movie->addActor($this->getReference('actor_4'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Top Gun: Maverick');
        $movie2->setReleaseYear('2022');
        $movie2->setDescription('This is the description for Top Gun: Maverick.');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2022/06/23/12/40/actor-7279707_960_720.png');
        $movie2->addActor($this->getReference('actor_1'));
        $movie2->addActor($this->getReference('actor_2'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
