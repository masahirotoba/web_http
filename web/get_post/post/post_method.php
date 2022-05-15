<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>POSTメソッドによるパラメータ渡し</h1>
      <?php
        $arg1 = $_POST['arg1'];
        $arg2 = $_POST['arg2'];
        $result = $arg1 + $arg2;
        echo $result;
      ?>
    <p><a href = "../../../index.html">前に戻る</p>
  </body>
</html>