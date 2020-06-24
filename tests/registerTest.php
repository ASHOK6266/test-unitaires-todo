<?php

namespace TDD\Test;

require "./src/register.php";

use PHPUnit\Framework\TestCase;
use TDD\User;

class UserTest extends TestCase
{
    public function testEmail()
    {
        $new_user = new User();
        $this->assertEquals(
            "ashok@gmail.com",
            $new_user->emailFormatChecker("ashok@gmail.com",
            'The user email are same as expected')
        );

    }
    public function testFirstNameChecker()
    {
        $new_user = new User();
        $this->assertEquals(
            "ashok",
            $new_user->firstNameChecker("ashok",
            'The firstname prints expected')
        );

    }
    public function testLastNameChecker()
    {
        $new_user = new User();
        $this->assertEquals(
            "kumar",
            $new_user->lastNameChecker("kumar",
            'The lastname prints expected')
        );

    }
    public function testPassword()
    {
        $new_user = new User();
        $this->assertEquals(
            "passwwordchecking",
            $new_user->passwordChecker("passwwordchecking",
            'The password are equal with test case')
        );

    }

    public function ageFormatChecker()
    {
        $new_user = new User();
        $this->assertEquals(
            "19",
            $new_user->emailFormatChecker("19",
            'The password are equal with test case')
        );

    }
    
}