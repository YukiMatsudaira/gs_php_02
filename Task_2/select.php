<?php
  session_start();
  include("funcs.php");
  loginCheck();

  // DB接続
  $pdo = db_connect();

  // データ登録SQL作成
  $name = $_SESSION["name"];
  $stmt = $pdo->prepare("SELECT * FROM t_table WHERE name IN('$name')");
  $stmt->bindValue(':name', $name, PDO::PARAM_STR);
  $status = $stmt->execute();

  // データ表示
  $view="";
  if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
  }else{
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $view .= $result["name"]."：おすすめレシピ";
  }
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>おすすめ動画</title>
</head>

<body>
  <div class="container jumbotron"><?=$view?></div>
  <video controls src="https://www9.nhk.or.jp/das/movie/D0002161/D0002161445_00000_V_000.mp4"></video>
</body>

</html>
