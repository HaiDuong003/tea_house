<?php
require '../view/header.php';
?>

<head>
  <link rel="stylesheet" href="../assets/css/style__login-regis.css">
</head>
<main>
  <div class="main__wrap--login">
    <div class="slogan__contact">Bạn Có Câu Hỏi Cần Giải Đáp?</div>
    <form action="" class="form" method="POST">
      <div class="username">
        <label for="">Username</label>
        <input type="text" class="username__input" placeholder="Nhập Username" name="username">
      </div>
      <div class="password">
        <label for="">Email</label>
        <input type="email" class="password__input" placeholder="Nhập Password" name="password">
      </div>
      <div class="content">
        <label for="">Nội dung</label>
        <textarea name="" id="" cols="30" rows="10" placeholder="Nhập tin nhắn" name="content"></textarea>
      </div>
      <button class="button__login">Gửi tin nhắn</button>
    </form>
  </div>
</main>
<?php
require '../view/footer.php';
?>