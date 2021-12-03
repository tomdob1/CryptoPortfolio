<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        UserFactory::createOne(['email' => 'adminuser@hotmail.com',
                                'roles' => ['ROLE_ADMIN']
        ]);
        UserFactory::createOne([
            'email' => 'usernotadmin@hotmail.com'
        ]);
        UserFactory::createMany(10);

        $manager->flush();
    }
}
