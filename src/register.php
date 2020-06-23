<?php


class User
{
    public $email;
    public $firstname;
    public $lastname;
    public $age;

    public function emailFormatChecker($email)
    {
        //$email = $_POST["email"];
        $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
        if(preg_match($pattern,$email))
        {
            echo "valid email \n";
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
            echo "valid name \n";
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
            echo "valid lastname \n";
        }
        else
        {
            echo "invalid lastname \n";
        }
    }

    public function ageFormatChecker($age)
    {
        //$age = $_POST["age"];
        if (is_numeric($age))
        {
            echo "Valid age \n";
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
    $new_user->ageFormatChecker($_POST["age"]);
    $new_user->emailFormatChecker($_POST["email"]);
    $new_user->firstNameChecker($_POST["fname"]);
    $new_user->lastNameChecker($_POST["fname"]);

}

is_valid()

?>