<?php
  include("./layout/_header.php");
?>
  <h2>Login</h2> 
  <form method="post" action="./shop02.php">
  <input type="text" name="user" placeholder="ユーザー名" />
    <br />
    <input type="text" name="password" placeholder="パスワード" />
    <br />
    <input type="submit" name="enter" value="Enter" />
  </form>
<?php
  include("./layout/_footer.php");