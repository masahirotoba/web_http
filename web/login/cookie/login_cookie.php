<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if(strcmp($user,'user') == 0 && strcmp($pass, 'pass') == 0){
        setcookie("user", $user);
        setcookie("pass", $pass);
        header('Location: success_cookie.php');
    } else {
        header('Location: failed_cookie.html');
    }
?>