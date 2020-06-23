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
}

?>