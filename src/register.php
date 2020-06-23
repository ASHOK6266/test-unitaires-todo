<?php


class User
{
    public $email;
    public $firstname;
    public $lastname;
    public $age;

    public function emailFormatChecker($email)
    {
        $email = $_POST["email"];
        $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
        if(preg_match($email,$pattern))
        {
            echo "valid email";
        }
        else
        {
            echo "Enter a valid email";
        }
    }

    public function firstNameChecker($firstname)
    {
        $firstname = $_POST["fname"];
    }

    public function lastNameChecker($lastname)
    {
        $lastname = $_POST["lname"];

    }

    public function ageFormatChecker($age)
    {
        $age = $_POST["age"];
        if (is_numeric($age))
        {
            echo "Valid age";
            return $age;
        }
        else
        {
            echo "Age is not valid";
        }
    }
}

function is_valid()
{
    $new_user = new User;
    $new_user->ageFormatChecker($_POST["age"]);
    $new_user->emailFormatChecker($_POST["email"]);
}

is_valid()

?>