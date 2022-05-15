<?php
    session_start();
    $user = $_SESSION['user'];
    $pass = $_SESSION['pass'];
    if(strcmp($user, 'user') != 0 || strcmp($pass, 'pass') != 0) {
        header('Location: failed_session.html');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
      <meta charset="utf-8">
    </head>
    <body>
      <h1>セッションによるログイン認証</h1>
      <h1>ログインに成功しました</h1>
      <form action="do_logout.php">
        <input type="submit" value="ログアウト" />
      </form>
    </body>
</html>