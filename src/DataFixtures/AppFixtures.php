<?php

namespace App\DataFixtures;


use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    private $encode;
 
    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encode = $encoder;
    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setUsername('admin@admin.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword(
        //encode the password
            $this->encode->encodePassword($user, '123456')
        );
        $manager->persist($user);
        $manager->flush();

        $manager->flush();
    }
}
