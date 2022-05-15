<?php
    header('Cache-Control: no-cache');
    $user = $_COOKIE['user'];
    $pass = $_COOKIE['pass'];
    if(strcmp($user, 'user') != 0 || strcmp($pass, 'pass') != 0) {
        setcookie("user", "", time() - 3600);
        setcookie("pass", "", time() - 3600);
        header('Location: failed_cookie.html');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
      <meta charset="utf-8">
    </head>
    <body>
      <h1>Cookieによるログイン認証</h1>
      <h1>ログインに成功しました</h1>
      <form action="do_logout.php">
        <input type="submit" value="ログアウト" />
      </form>
    </body>
</html>