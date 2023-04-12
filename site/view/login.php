<?php
require '../view/header.php';
?>

<head>
  <link rel="stylesheet" href="../assets/css/style__login-regis.css">
</head>
<main>
  <div class="main__wrap--login">
    <div class="title">
      <a href="index.php?action=sign_in" class="title__login">Đăng nhập</a>
      <a href="index.php?action=sign_up" class="title__register">Đăng ký</a>
    </div>
    <div class="slogan__login">Nhập Username và Mật khẩu để đăng nhập TeaHouse</div>
    <form action="" class="form" method="POST">
      <div class="username">
        <label for="">Username</label>
        <input type="text" class="username__input" placeholder="Nhập Username" name="username">
        <?php
        if (isset($error['username'])) {
          echo $error['username'] = '<p class="error">Phải nhập username</p>';
        }
        if (isset($error['checkacc'])) {
          echo $error['checkacc'] = '<p class="error">Thông tin username hoặc password không chính xác</p>';
        }
        ?>
      </div>
      <div class="password">
        <label for="">Password</label>
        <input type="password" class="password__input" placeholder="Nhập Password" name="password">
        <?php
        if (isset($error['password'])) {
          echo $error['password'] = '<p class="error">Phải nhập password</p>';
        }
        ?>
      </div>
      <p><a class="forgot__pasword" href="#">Quên mật khẩu?</a></p>
      <button class="button__login" name="button__login">Đăng nhập</button>
      <p class="commit">TeaHouse cam kết bảo mật và sẽ không bao giờ đăng
        hay chia sẻ thông tin mà chưa có được sự đồng ý của bạn.</p>
    </form>
  </div>
</main>
<?php
require '../view/footer.php';
?>