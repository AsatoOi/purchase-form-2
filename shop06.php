<?php
  include("./layout/_header.php");
  require("./store/functions.php");

  session_start();
?>

  <p><?= h($_SESSION["user"]);?>さんこんにちは</p>
  <h2>ご購入ありがとうございました</h2>
  <button onclick="location.href='shop01.php'">ログアウト</button>
<?php
  include("./layout/_footer.php");
