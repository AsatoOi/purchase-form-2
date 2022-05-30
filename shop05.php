<?php
  include("./layout/_header.php");
  require("./store/functions.php");

  if(!isset($_POST["decide"])){
    exit("Error");
  }else{
    session_start();
    if(trim($_POST["name"]) == ""){
      $name = "届け先氏名が入力されていません!";
    }else{
      $name = $_POST["name"];
    }
    if(trim(($_POST["tel"])) == ""){
      $tel ="電話番号が設定されていません!" ;
    }else{
      $tel = $_POST["tel"];
    }
    if(trim($_POST["p_1"]) == "" 
    && trim($_POST["p_2"]) == ""
    && trim($_POST["p_3"]) == ""
    && trim($_POST["p_4"]) == ""){
      $p = "住所に不備があります!";
    }
    else{
      $p_1 = $_POST["p_1"];
      $p_2 = $_POST["p_2"];
      $p_3 = $_POST["p_3"];
      $p_4 = $_POST["p_4"];
    }
    $time = $_POST["time"];
  }
?>
  <p><?= h($_SESSION["user"]);?>さんこんにちは</p>
  <h2>注文内容</h2>
  <p>届け先氏名：<?= h($name);?></p>
  <p>電話番号:<?= h($tel);?></p>
  <p>住所:
    <?php 
      if(isset($p)){
        echo h($p);
      }else{
        echo h($p_1.$p_2.$p_3.$p_4);
      }
    ?>
  </p>
  <p>お届け時間:<?= h($time);?></p>
  <button onclick="location.href='shop06.php'">決定</button>
  <button onclick="location.href='shop04.php'">リセット</button>
<?php
  include("./layout/_footer.php");