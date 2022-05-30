<?php
  date_default_timezone_set('Asia/Tokyo');
  $timestamp = time();
  ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-test</title>
</head>
<body>
  <header>
    <h1>SSP_実技試験１</h1>
    <p><?= htmlspecialchars(date('Y年m月d日 H時i分s秒', $timestamp)); ?></p>
    <hr />
  </header>