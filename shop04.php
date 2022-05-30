<?php
  include("./layout/_header.php");
  require("./store/functions.php");
    session_start();
?>

  <p><?= h($_SESSION["user"]);?>さんこんにちは</p>
  <h2>お届け先入力</h2>
  <form action="./shop05.php" method="post">
    <p>届け先氏名（必須）：<input type="text" name="name" placeholder="電子 太郎" required></p>
    <p>電話番号（必須）：<input type="tel" name="tel" placeholder="090-1234-5678" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required></p>
    <p>住所（必須）：</p>
      <p>&nbsp;&nbsp;都道府県：<input type="text" name = 'p_1' placeholder="千葉県" required></p>
      <p>&nbsp;&nbsp;市区町村：<input type="text" name = 'p_2' placeholder="千葉市緑区" required></p>
      <p>&nbsp;&nbsp;何丁目　：<input type="text" name = 'p_3' placeholder="4丁目" required></p>
      <p>&nbsp;&nbsp;番地　　：<input type="text" name = 'p_4' placeholder="2-1" required></p>
    <p>お届け時間:
      <select name="time">
        <option value="指定なし" selected>指定なし</option>
        <option value="午前">午前</option>
        <option value="午後">午後</option>
      </select>
    </p>
    <input type="submit" name="decide" value="決定">
    <input type="reset" value="リセット">
  </form>
<?php
  include("./layout/_footer.php");