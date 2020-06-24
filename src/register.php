<?php

namespace TDD;

class User
{
    public $email;
    public $firstname;
    public $lastname;
    public $password;
    public $age;

    public function emailFormatChecker($email)
    {
        //$email = $_POST["email"];
        $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
        if(preg_match($pattern,$email))
        {
            //echo "valid email \n";
            return $email;

        }
        else
        {
            echo "Enter a valid email \n";
        }
    }

    public function firstNameChecker($firstname)
    {
        //$firstname = $_POST["fname"];
        if(strlen($firstname)>3 && strlen($firstname) < 40)
        {
            return $firstname;
        }
        else
        {
            echo "Enter the valid name \n";
        }
    }
    public function lastNameChecker($lastname)
    {
        //$lastname = $_POST["lname"];
        $lastnamePattern = "/[a-zA-Z]/";
        if(preg_match($lastnamePattern,$lastname))
        {
            return $lastname;
        }
        else
        {
            echo "invalid lastname \n";
        }
    }
    public function passwordChecker($password)
    {
        if(strlen($password) > 8 && strlen($password) < 40)
        {
            return $password;
        }
        else
        {
            echo "invalid password \n";
        }
    }

    public function ageFormatChecker($age)
    {
        //$age = $_POST["age"];
        if (is_numeric($age))
        {
            return $age;
        }
        else
        {
            echo "Age is not valid \n";
        }
    }
}

function is_valid()
{
    $new_user = new User;
    $new_user->emailFormatChecker($_POST["email"]);
    $new_user->firstNameChecker($_POST["fname"]);
    $new_user->lastNameChecker($_POST["lname"]);
    $new_user->passwordChecker($_POST["password"]);
    $new_user->ageFormatChecker($_POST["age"]);

}

is_valid()

?>