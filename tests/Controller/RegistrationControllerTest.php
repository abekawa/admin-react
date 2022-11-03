<?php

namespace App\Tests\Controller;

use App\Controller\RegistrationController;
use PHPUnit\Framework\TestCase;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class RegistrationControllerTest extends TestCase
{
    public function testRegisterExists()
    {
        $registrationController = new RegistrationController();
        $registerExists = method_exists($registrationController,'register');

        $this->assertEquals(true, $registerExists);
    }
}