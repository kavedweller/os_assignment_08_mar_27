<?php

session_start();
//$_SESSION['msgType'] = '';
//$_SESSION['message'] = '';
session_unset();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'login')
    {
        $_SESSION['msgType'] = 'Info';
        $_SESSION['message'] = 'Enter your credentials.';
        header('Location: loginform.php');
    }
    elseif ($_GET['page'] == 'registration')
    {
        header('Location: registrationform.php');
    }
    elseif ($_GET['page'] == 'logout')
    {
        session_destroy();
        header('Location: loginform.php');
    }
}
elseif (file_exists('users.csv'))
{
    $_SESSION['msgType'] = 'Info';
    $_SESSION['message'] = 'Enter your credentials.';
    header('Location: loginform.php');
}
else
{
    header('Location: registrationform.php');
}
