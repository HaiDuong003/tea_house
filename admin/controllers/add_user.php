<?php
$allRole = allValues('position');
$allAccount = allValues('user');
// add user
if (isset($_POST['addUser'])) {
  $error = checkEmty(array('username', 'email', 'password', 're-password'));
  // validate check pass
  if ($_POST['password'] != $_POST['re-password']) {
    $error['checkpass'] = '';
  }
  // check xem có tài khoản hay chưa

  foreach ($allAccount as $key => $account) {
    if ($_POST['username'] === $account['username']) {
      $error['checkacc'] = '';
    }
  }
  // validate avatar
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

  if (empty($error)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['roles'];
    $avatar = $_FILES['avatar']['name'];
    addUserByAdmin($username, $password, $email, $avatar, $role);
  }
}
require '../view/users/add_user.php';
