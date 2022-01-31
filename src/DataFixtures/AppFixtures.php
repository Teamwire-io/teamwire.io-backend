<?php

namespace App\DataFixtures;

use App\Entity\Profile;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    // ...
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('johndoe@local.test');
        $password = $this->hasher->hashPassword($user, 'test');
        $user->setPassword($password);

        $profile = new Profile();
        $profile->setDisplayName('John Doe');

        $user->setProfile($profile);

        $manager->persist($user);
        $manager->flush();
    }
}