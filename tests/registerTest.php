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
}