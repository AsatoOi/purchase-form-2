<?php
  include("./layout/_header.php");
  require("./store/functions.php");
  if(!isset($_POST["submit"])){
      exit("Error");
    }
  else{
    session_start();
    $total=0;
    if($_POST["orange"] !== "0"){
      $orange = $_POST['orange'];
      $total_orange = $_SESSION['orange_money'] * $orange;
      $total += $total_orange;
    }
    if($_POST["apple"] !== "0"){
      $apple= $_POST['apple'];
      $total_apple = $_SESSION['apple_money'] * $apple;
      $total += $total_apple;
    }
    if($_POST["grape"] !== "0"){
      $grape = $_POST['grape'];
      $total_grape = $_SESSION['grape_money'] * $grape;
      $total += $total_grape;
    }
  }
?>
  <p><?= h($_SESSION["user"]);?>さんこんにちは</p>
  <h2>注文内容</h2>
  <ul>
    <?php  
      if(h($_POST["orange"]) !== '0'){
        echo
          "<li>
            <p>みかん1個".$_SESSION["orange_money"]."円を".$orange."個購入</p>
            <p>合計は".$total_orange."円</p>
          </li>";
      }
      if(h($_POST["apple"]) !== '0'){
        echo
          "<li>
            <p>りんご1個".$_SESSION["apple_money"]."円を".$apple."個購入</p>
            <p>合計は".$total_apple."円</p>
          </li>";
      }
      if(h($_POST["grape"]) !== '0'){
        echo 
          "<li>
            <p>ぶどう1個".$_SESSION["grape_money"]."円を".$grape."個購入</p>
            <p>合計は".$total_grape."円</p>
          </li>";
      }
    ?>
  </ul>
  <p>合計金額は<?= h($total); ?>円です</p>
  <button onclick="location.href='shop04.php'">確定</button>
<?php
  include("./layout/_footer.php");