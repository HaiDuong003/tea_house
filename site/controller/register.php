<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $account = array();

  $error = checkEmty(array('username', 'email', 'password', 're-password'));
  if ($_POST['re-password'] != $_POST['password']) {
    $error['checkpass'] = '';
  }
  if (file_exists($_FILES['avatar']['tmp_name']) || is_uploaded_file($_FILES['avatar']['tmp_name'])) {
    $folder = "../../image/image__user/";
    $fileName = $folder . basename($_FILES['avatar']['name']);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg' && $fileType != 'webp') {
      $error['notImg'] = '';
      die();
    }
    if ($_FILES['avatar']['size'] > 20000000) {
      $error['filesize'] = '';
      die();
    }
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $fileName)) {
    } else {
      $error['avatar'] = '';
      die();
    }
  } else {
    $error['avatar'] = '';
  }
  // =============================================================

  if (empty($error)) {
    $account['username'] = $_POST['username'];
    $account['email'] = $_POST['email'];
    $account['password'] = $_POST['password'];
    $account['avatar'] = $_FILES['avatar']['name'];
    addUser($account['username'], $account['password'], $account['email'], $account['avatar']);
    echo ("<script>location.href = './index.php?action=sign_in';</script>");
  }
}

require '../view/register.php';
