<?php
// update user
$idU = $_GET['idU'];
$allRole = allValues('position');
$accUpdate = getValue('user', 'id', $idU);
$allAccount = allValues('user');
if (isset($_POST['updateUser'])) {
  $error = checkEmty(array('username', 'email', 'password', 're-password'));
  // validate check pass
  if ($_POST['password'] != $_POST['re-password']) {
    $error['checkpass'] = '';
  }
  // validate account
  foreach ($allAccount as $key => $acc) {
    if ($_POST['username'] === $acc['username'] && $_POST['username'] != $accUpdate['username']) {
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
    $avatar = $accUpdate['avatar'];
  }

  if (empty($error)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['roles'];
    if (!isset($avatar)) {
      $avatar = $_FILES['avatar']['name'];
    }
    updateUserByAdmin($username, $password, $email, $avatar, $role, $idU);
  }
}
require '../view/users/update_user.php';
