<?php
    session_start();

    $login = $_POST['login'];
    $pass = $_POST['password'];
    if(($login == 'admin') && ($pass == '1111')){
        $_SESSION['auth'] = True;
    }
    else{
        $_SESSION['auth'] = False;
    }

    header('Location: restricted.php');
?>