<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Faker\Factory;
use App\Entity\User;
use Faker\Generator;
use App\Entity\Recipe;
use App\Entity\Ingredient;
use App\Entity\Mark;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        // Users
        $users = [];

        $admin = new User();
        $admin
            ->setTel('0658574558')
            ->setNom('damien')
            ->setPrenom('julie')
            ->SetEmail('Serveurs@symrecipe.fr')
            ->setRoles(['ROLE_ADMIN'])
            ->setPlainPassword('password')
            ->setAllergies('piment')
            ->setCouverts('2');


        $users[] = $admin;
        $manager->persist($admin);

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user
                ->setEmail($this->faker->email())
                ->setRoles(['ROLE_USER'])
                ->setPlainPassword('password');

            $users[] = $user;
            $manager->persist($user);
        }

        $manager->flush();
    }
}