<?php
    include("layout/_header.php");
    require("./store/functions.php");
    console_log($_POST["user"]);

    if(!isset($_POST["enter"])){
      console_log(isset($_POST["enter"]));
      exit("Error");
    }else{
      if($_POST["user"] == "aw" && $_POST["password"] == "771"){
        session_start(); 
        $_SESSION["user"] = $_POST["user"];
      }else{
        header("Location: shop01.php");
        exit("Error");
      }
    }
  $_SESSION['orange_money'] = 400; 
  $_SESSION['apple_money'] = 200; 
  $_SESSION['grape_money'] = 800; 
?>
  <p>
    <?= h($_SESSION["user"]);?>さんこんにちは
  </p>
  <h2>
    商品選択
  </h2> 
  <form action="./shop03.php" method="post">
    <p>オレンジ :<?= h($_SESSION['orange_money']);?>円<br>
    <select name="orange">
      <option value= "0" selected>何個？</option>
      <option value="1">1個</option>
      <option value="2">2個</option>
      <option value="3">3個</option>
      <option value="4">4個</option>
      <option value="5">5個</option>
    </select></p>
    <p>りんご:<?= h($_SESSION['apple_money']);?>円<br>
    <select name="apple">
      <option value= "0" selected>何個？</option>
      <option value="1">1個</option>
      <option value="2">2個</option>
      <option value="3">3個</option>
      <option value="4">4個</option>
      <option value="5">5個</option>
    </select></p>
    <p>ぶどう:<?= h($_SESSION['grape_money']);?>円<br>
    <select name="grape">
      <option value= "0" selected>何個？</option>
      <option value="1">1個</option>
      <option value="2">2個</option>
      <option value="3">3個</option>
      <option value="4">4個</option>
      <option value="5">5個</option>
    </select></p>
    <input type="submit" name="submit" value="購入">
    <input type="reset" value="リセット">
  </form>

<?php
  include("./layout/_footer.php");