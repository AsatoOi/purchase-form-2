<?php
  function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data).')';
    echo '</script>';
  }

  function console_bool($data){
    echo '<script>';
    echo json_encode(isset($data)).'== true ? console.log("true") : console.log("false")';
    echo '</script>';
  }

  function h ($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }
?>