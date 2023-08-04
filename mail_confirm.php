<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>問合わせフォーム</title>
  <link rel="stylesheet" href="style2.css" />
</head>
<body>
    <h1>お問合せ内容確認</h1>
    <div class="container">
      <p>
        お問い合わせ内容はこちらで宜しいでしょうか？<br>
        よろしければ「返信する」ボタンを押して下さい。</p>
      <p>
        名前<br>
        <?php echo $_POST['name']; ?>
      </p>
      <p>
        メールアドレス<br>
        <?php echo $_POST['email']; ?>
      </p>
      <p>
        年齢<br>
        <?php echo $_POST['age']."歳"; ?>
      </p>
      <p>
        コメント<br>
        <?php echo $_POST['comments']; ?>
      </p>
      <form action="index.html">
        <input type="submit" class="button-return" value="戻って修正する">
      </form>
      <form method="post" action="insert.php">
        <input type="submit" class="button-submit" value="登録する">
        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
        <input type="hidden" value="<?php echo $_POST['email']; ?>" name="email">
        <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
      </form>
    </div>
</body>
</html>