<?php

if (isset($_POST['button__login'])) {
  $account = array();
  $error = checkEmty(array('username', 'password'));
  if (empty($error)) {
    $account['username'] = $_POST['username'];
    $account['password'] = $_POST['password'];
    $acc_login = rowValues($account['username'], $account['password']);
    if (empty($acc_login)) {
      $error['checkacc'] = '';
    } else {
      $_SESSION['username'] = $acc_login['username'];
      $_SESSION['id'] = $acc_login['id'];
      // $_SESSION['avatar'] = $acc_login[]
      if ($acc_login['id_position'] == 1) {
        echo ("<script>location.href = '../../admin/controllers/index.php?action=main';</script>");
      } else {
        echo ("<script>location.href = './index.php?action=main_index';</script>");
      }
    }
  }
}

require '../view/login.php';
