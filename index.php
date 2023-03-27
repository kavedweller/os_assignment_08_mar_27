<?php


if (isset($_GET['page']))
{
    if ($_GET['page'] == 'login')
    {
        header('Location: loginform.php');
    }
    elseif ($_GET['page'] == 'registration')
    {
        header('Location: registrationform.php');
    }
    elseif ($_GET['page'] == 'logout')
    {
        header('Location: loginform.php');
    }
}
elseif (file_exists('users.csv'))
{
    header('Location: loginform.php');
}
else
{
    header('Location: registrationform.php');
}
