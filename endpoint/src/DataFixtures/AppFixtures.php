<?php

namespace App\DataFixtures;

use App\Factory\PostFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne([
            'username' => 'johnFrusciante',
            'password' => '$2a$12$gk3c0OQ9F0I3m.QeFxwS7um2XCMdb/Xrpe9IVb07HmV/Bbbc/xtGq',
        ]);

        UserFactory::createMany(10);
        PostFactory::createMany(50,['author' => UserFactory::random()]);

        $manager->flush();
    }
}
