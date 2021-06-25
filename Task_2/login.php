<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
</head>

<body>

  <!-- ここからinsert.phpにデータを送る -->
  <form method="post" action="login_act.php">
    <div class="jumbotron">
    <fieldset>
      <legend>ログイン</legend>
      <label>Email：<input type="text" name="email"></label><br>
      <label>パスワード：<input type="text" name="pass"></label><br>
      <input type="submit" value="ログイン">
      </fieldset>
    </div>
  </form>

  <a class="navbar-brand" href="new.php">新規登録</a>

</body>

</html>
