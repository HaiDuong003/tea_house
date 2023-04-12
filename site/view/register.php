<?php
require '../view/header.php';
?>

<head>
  <link rel="stylesheet" href="../assets/css/style__login-regis.css">
</head>
<main>
  <div class="main__wrap--register">
    <div class="title">
      <a href="index.php?action=sign_in" class="title__login--register">Đăng nhập</a>
      <a href="index.php?action=sign_up" class="title__register--register">Đăng ký</a>
    </div>
    <div class="slogan__login">Điền các thông tin để đăng ký tài khoản TeaHouse</div>
    <form action="" class="form" method="POST" enctype="multipart/form-data">
      <div class="username">
        <label for="">Username</label>
        <input type="text" class="username__input" placeholder="Nhập Username" name="username">
        <?php
        if (isset($error['username'])) {
          echo "<p class='error'>Phải nhập username</p>";
        }
        ?>
      </div>
      <div class="email">
        <label for="">Email</label>
        <input type="email" class="username__input" placeholder="Nhập Email" name="email">
        <?php
        if (isset($error['email'])) {
          echo "<p class='error'>Phải nhập email</p>";
        }
        ?>
      </div>
      <div class="password">
        <label for="">Password</label>
        <input type="password" class="password__input" placeholder="Nhập Password" name="password">
        <?php
        if (isset($error['password'])) {
          echo "<p class='error'>Phải nhập password</p>";
        }
        ?>
      </div>
      <div class="re-password">
        <label for="">Re-Password</label>
        <input type="password" class="re-password__input" placeholder="Xác nhận mật khẩu" name="re-password">
        <?php
        if (isset($error['re-password'])) {
          echo "<p class='error'>Phải nhập re-password</p>";
        }
        if (isset($error['checkpass'])) {
          echo "<p class='error'>Re-password không trùng với password</p>";
        }
        ?>
      </div>
      <div class="avatar">
        <label for="">Avatar</label>
        <input type="file" class="password__input" name="avatar">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          if (empty($fileName)) {
            echo "<p class='error'>Bạn phải chọn avatar</p>";
          } else if (isset($error['notImg'])) {
            echo "<p class='error'>Bạn phải chọn hình ảnh</p>";
          } else if (isset($error['filesize'])) {
            echo "<p class='error'>File có dung lượng quá lớn</p>";
          }
        }
        ?>
      </div>
      <button class="button__login" name="register">Đăng ký</button>
    </form>
  </div>
  <script>
  </script>
</main>
<?php
require '../view/footer.php';
?>