<?php

namespace TDD\Test;

require "./src/register.php";

use PHPUnit\Framework\TestCase;
use TDD\User;

class UserTest extends TestCase
{
    public $new_user;
    public function setUp(): void
    {
        $this->new_user = new User();
    }
    public function tearDown(): void
    {
        unset($this->new_user);
    }
    public function testEmail()
    {
        $input = "ashok@gmail.com";
        $output = $this->new_user->emailFormatChecker($input);
        $this->assertEquals(
            "ashok@gmail.com",
            $output,
            'The user email are same as expected'
        );
    }
    public function testFirstNameChecker()
    {
        $input = "ashok";
        $output = $this->new_user->firstNameChecker($input);
        $this->assertEquals(
            "ashok",
            $output,
            'The firstname prints expected'
        );

    }
    public function testLastNameChecker()
    {
        $input = "kumar";
        $output = $this->new_user->lastNameChecker($input);
        $this->assertEquals(
            "kumar",
            $output,
            'The lastname prints expected'
        );
    }
    public function testPassword()
    {
        $input = "passwwordchecking";
        $output = $this->new_user->passwordChecker($input);
        $this->assertEquals(
            "passwwordchecking",
            $output,
            'The password are equal with test case'
        );

    }

    public function ageFormatChecker()
    {
        $this->assertEquals(
            "19",
            $new_user->emailFormatChecker("19",
            'The password are equal with test case')
        );

    }
    
}