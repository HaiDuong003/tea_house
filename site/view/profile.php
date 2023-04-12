<?php
require '../view/header.php';
$allAccount = allValues('user');
$idU = $_GET['idU'];
$account = getValue('user', 'id', $idU);
if (isset($_POST['save'])) {
  $error = checkEmty(array('username', 'password', 'email'));
  foreach ($allAccount as $key => $acc) {
    if ($_POST['username'] === $acc['username'] && $_POST['username'] != $account['username']) {
      $error['checkacc'] = '';
    }
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
    $avatar = $account['avatar'];
  }
  if (empty($error)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if (empty($avatar)) {
      $avatar = $_FILES['avatar']['name'];
    }
    updateUser($username, $password, $email, $avatar, $idU);
    echo '<script>alert("Cập nhật thành công");window.location.href="index.php?action=profile&idU=' . $_SESSION['id'] . '";</script>';
    // echo '<script>alert("Đã xóa sản phẩm thành công thành công");window.location.href="index.php?action=admin_pro";</script>';
  }
}
?>

<head>
  <link rel="stylesheet" href="../assets/css/profile.css">
</head>
<main class="main_prf">
  <div class="profile__wrap">
    <div class="card_profile--left">
      <div class="card_product--item"><img class="card__profile--img" src="../../image/image__user/<?php echo $account['avatar'] ?>" alt=""></div>
      <div class="card_profile--content">
        <p class="name"><?php echo $account['username'] ?></p>
        <a href="index.php?action=logout"><button class="logout__button">Đăng xuất</button></a>
      </div>
    </div>
    <div class="card_profile--right">
      <form action="" method="POST" enctype="multipart/form-data">
        <?php
        if (isset($_POST['edit'])) :
        ?>
          <div class="form__input">
            <div class="username">
              <label for="">Username:</label>
              <input type="text" name="username" value="<?php echo $account['username'] ?>" placeholder="Username">
              <?php
              if (isset($_POST['save'])) {
                if (isset($error['checkacc'])) {
                  echo '<p class="error">Tên tài khoản đã có người đăng ký</p>';
                }
                if (isset($error['username'])) {
                  echo '<p class="error">Phải nhập tên tài khoản</p>';
                }
              }
              ?>
            </div>
            <div class="username">
              <label for="">Mật khẩu:</label>
              <input type="password" name="password" value="<?php echo $account['password'] ?>" placeholder="Password">
            </div>
            <div class="username">
              <label for="">Email:</label>
              <input type="text" name="email" value="<?php echo $account['email'] ?> " placeholder="Email">
            </div>
            <div class="username">
              <label for="">Avatar:</label>
              <input type="file" name="avatar" placeholder="Email">
            </div>
          </div>
        <?php
        else :
        ?>
          <div class="form__input">
            <div class="username">
              <label for="">Username:</label>
              <input type="text" name="username" value="<?php echo $account['username'] ?>" placeholder="Username" readonly>
            </div>
            <div class="username">
              <label for="">Mật khẩu:</label>
              <input type="password" name="password" value="<?php echo $account['password'] ?>" placeholder="Password" readonly>
            </div>
            <div class="username">
              <label for="">Email:</label>
              <input type="text" name="email" value="<?php echo $account['email'] ?> " placeholder="Email" readonly>
            </div>
          <?php endif; ?>
          <div class="form__button">
            <?php
            if (isset($_POST['edit'])) {
              echo '<button onclick="savebutton()" class="edit__button" name="save">Save</button>';
            } else {
              echo '<div class="form__edit"><button class="edit__button" name="edit">Edit</button></div>';
            }
            ?>
            <div class="form__cancel"><a href=""><button class="cancel__button" name="cancel">Cancel</button></a></div>
          </div>
      </form>
    </div>
  </div>
</main>

<?php
require '../view/footer.php';
?>