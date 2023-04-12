<?php
require '../view/main/header.php';
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Thêm thành viên </h3>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Tên thành viên</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="username">
                <?php
                if (isset($_POST['addUser'])) {
                  if (isset($error['username'])) {
                    echo '<p class="error">Phải nhập tên thành viên</p>';
                  }
                  if (isset($error['checkacc'])) {
                    echo '<p class="error">Tên thành viên đã tồn tại</p>';
                  }
                }
                ?>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Địa chỉ email</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" required>
                <?php
                if (isset($_POST['addUser'])) {
                  if (isset($error['email'])) {
                    echo '<p class="error">Phải nhập địa chỉ email</p>';
                  }
                }
                ?>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
                <?php
                if (isset($_POST['addUser'])) {
                  if (isset($error['password'])) {
                    echo '<p class="error">Phải nhập mật khẩu</p>';
                  }
                }
                ?>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Re-Password" name="re-password">
                <?php
                if (isset($_POST['addUser'])) {
                  if (isset($error['re-password'])) {
                    echo '<p class="error">Phải xác nhận mật khẩu</p>';
                  }
                  if (isset($error['checkpass'])) {
                    echo '<p class="error">Xác nhận mật khẩu chưa chính xác</p>';
                  }
                }
                ?>
              </div>
              <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" class="form-control" name="avatar">
              </div>
              <?php
              if (isset($_POST['addUser'])) {
                if (empty($fileName)) {
                  echo "<p class='error'>Bạn phải chọn avatar</p>";
                } else if (isset($error['notImg'])) {
                  echo "<p class='error'>Bạn phải chọn hình ảnh</p>";
                } else if (isset($error['filesize'])) {
                  echo "<p class='error'>File có dung lượng quá lớn</p>";
                }
              }
              ?>
              <div class="form-group">
                <label for="exampleInputAction">Vai trò</label>
                <select name="roles" id="" class="form-control">
                  <?php
                  foreach ($allRole as $key => $role) {
                    echo '<option value="' . $role['id_position'] . '">' . $role['position_name'] . '</option>';
                  }
                  ?>
                </select>
                <!-- <input type="text" class="form-control" id="exampleInputAction" placeholder="Vai trò"> -->
              </div>
              <button class="btn btn-gradient-primary me-2" name="addUser">Add</button>
              <!-- <button class="btn btn-light">Cancel</button> -->
              <?php
              if (isset($_POST['addUser'])) {
                if (empty($error)) {
                  echo ("<script>location.href = 'index.php?action=admin_user';</script>");
                }
              }
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:././partials/_footer.php -->
  <footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Dương | Dự án</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
<?php
require '../view/main/footer.php';
?>