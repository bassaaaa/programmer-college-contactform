<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson16; host=localhost;", "root", "root");

$pdo -> exec("insert into contactform(name, mail, age, comments)
  values('".$_POST['name']."', '".$_POST['email']."', '".$_POST['age']."', '".$_POST['comments']."');
");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>問合わせフォーム</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <h1>お問合せフォーム</h1>
  <div class="container">
    <p>
      お問い合わせありがとうございました。<br>
      3営業日以内に担当者よりご連絡差し上げます。
    </p>
  </div>
</body>
</html>