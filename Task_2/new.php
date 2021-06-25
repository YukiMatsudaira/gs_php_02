<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>新規登録</title>
</head>

<body>
  <!-- ここからinsert.phpにデータを送る -->
  <form method="post" action="insert.php">
    <div class="jumbotron">
    <fieldset>
      <legend>新規登録</legend>
      <label>ユーザー名：<input type="text" name="name"></label><br>
      <label>Email：<input type="text" name="email"></label><br>
      <label>パスワード：<input type="text" name="pass"></label><br>
      <input type="submit" value="登録">
      </fieldset>
    </div>
  </form>
</body>

</html>
