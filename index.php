<?php
    $password = 'pw';

    // if form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST'  || isset($_COOKIE['password']))
    {
        if (isset($_COOKIE['password']) && $_COOKIE['password'] == $password) {
            setcookie('password', 'pw', 0, '/', 'www.yoloswagg.in');
            header('Location: https://yoloswagg.in/stream');
        }
        else if (empty($_POST['password']))
        {
            header('Location: https://yoloswagg.in/login');
        }
        else if ($_POST['password'] == $password)
        {
            //radio();
            setcookie('password', 'pw', 0, '/', 'www.yoloswagg.in');
            header('Location: https://yoloswagg.in/stream');
        }
        else
        {
            header('Location: https://yoloswagg.in/login');
        }
    }
    else
    {
        header('Location: https://yoloswagg.in/login');
    }
?>

<!DOCTYPE html>

<html>
</html>