<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if(strcmp($user, 'user') == 0 && strcmp($pass, 'pass') == 0){
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;        
        header('Location: success_session.php');
    } else {
        header('Location: failed_session.html');
    }
?>