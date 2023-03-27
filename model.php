<?php
session_start();
echo '<pre>';
print_r($_POST);
//print_r($_FILES);
echo '</pre>';

if (isset($_POST['register']))
{
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        if ($_POST['password'] === $_POST['confirm'])
        {
            $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        }
        else
        {
            $_SESSION["msgType"] = 'Error';
            $_SESSION["message"] = "Passwords didn't match. Please try again.";
            header("Location: registrationform.php");
            die();
        }
        $email = $_POST['email'];

        $csvFile = 'users.csv';

        if (file_exists($csvFile))
        {
            $users = array_map('str_getcsv', file($csvFile));
        }
        else
        {
            $users = [];
        }

        foreach ($users as $user)
        {
            if ($user[2] === $email)
            {
                $_SESSION["msgType"] = 'Error';
                $_SESSION["message"] = 'Email exists!! please try again with another email.';
                header("Location: registrationform.php");
                die();
            }
        }

        $userData = array($firstName, $lastName, $email, $password_hash);
        $userDataFile = fopen($csvFile, 'a+');
        fputcsv($userDataFile, $userData);
        fclose($userDataFile);

        $_SESSION["msgType"] = 'Success';
        $_SESSION["message"] = 'Registration Successful! please login.';
        header("Location: loginform.php");
        die();


//        header("Location: loginform.php");
    }
    else
    {
        $_SESSION["msgType"] = 'Error';
        $_SESSION["message"] = 'Wrong email address!! please try again with a valid email.';
        header("Location: registrationform.php");
        die();
    }
}

if (isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (file_exists('users.csv'))
    {
        $users = array_map('str_getcsv', file('users.csv'));
    }
    else
    {
        $users = [];
    }

    foreach ($users as $user)
    {
        if ($user[2] === $email)
        {
            if (password_verify($_POST['password'], $user[3]))
            {
//                login_success();
                $_SESSION["userFirstName"] = $user[0];
                $_SESSION["userLastName"] = $user[1];
                header("Location: page.php");
            }
            else
            {
                $_SESSION["msgType"] = 'Error';
                $_SESSION["message"] = 'Wrong email or password! Please enter valid credentials';
                header("Location: loginform.php");
            }
        }
    }

}
