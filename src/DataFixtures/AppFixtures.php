<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use App\Entity\Comment;
use App\Entity\Conference;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;

class AppFixtures extends Fixture
{
    private $passwordHasherFactory;

    public function __construct(PasswordHasherFactoryInterface $encoderFactory)
    {
        $this->passwordHasherFactory = $encoderFactory;
    }

    public function load(ObjectManager $manager): void
    {
        $amsterdam = new Conference();
        $amsterdam->setCity('Amsterdam');
        $amsterdam->setYear('2022');
        $amsterdam->setIsInternational(true);
        $manager->persist($amsterdam);

        $paris = new Conference();
        $paris->setCity('Paris');
        $paris->setYear('2021');
        $paris->setIsInternational(false);
        $manager->persist($paris);

        $comment1 = new Comment();
        $comment1->setConference($amsterdam);
        $comment1->setAuthor('Fabien');
        $comment1->setEmail('fabien@test.com');
        $comment1->setText('This was a great conference');
        $comment1->setState('published');
        $manager->persist($comment1);

        $comment2 = new Comment();
        $comment2->setConference($paris);
        $comment2->setAuthor('Fabien');
        $comment2->setEmail('fabien@test.com');
        $comment2->setText('This was a great conference');
        $manager->persist($comment2);

        $comment3 = new Comment();
        $comment3->setConference($amsterdam);
        $comment3->setAuthor('Lucas');
        $comment3->setEmail('lucas@example.com');
        $comment3->setText('I think this one is going to be moderated.');
        $manager->persist($comment3);

        $admin = new Admin();
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setUsername('admin');
        $admin->setPassword($this->passwordHasherFactory->getPasswordHasher(Admin::class)->hash('admin', null));
        $manager->persist($admin);

        $manager->flush();
    }
}
