<?php
require '../view/main/header.php';
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Danh sách thành viên </h3>
      <nav aria-label="breadcrumb">
        <button type="button" class="btn btn-gradient-danger btn-icon-text">
          <a href="index.php?action=add_user" style="text-decoration: none;"><i class="mdi mdi-upload btn-icon-prepend"></i>Thêm thành viên</button></a>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> # </th>
                  <th> Tên thành viên </th>
                  <th style="width: 200px;"> Hình ảnh </th>
                  <th> Mật khẩu </th>
                  <th> Vai trò </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($allAccount as $key => $account) {
                  echo '               
                    <tr>
                      <td> ' . $account['id'] . ' </td>
                      <td>' . $account['username'] . '</td>
                      <td>
                        <img src="../../image/image__user/' . $account['avatar'] . '" class="mb-2 mw-75 w-75 mh-100 rounded" alt="image" style="height: 100px !important;">
                      </td>
                      <td> ' . $account['password'] . '</td>
                      <td> ' . $account['position_name'] . ' </td>
                      <td>
                        <div class="template-demo" style="text-align: center;">
                          <a href="index.php?action=update_user&idU=' . $account['id'] . '">
                            <button type="button" class="btn btn-outline-primary btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Update</button>
                          </a>
                          <a href="index.php?action=delete_user&idU=' . $account['id'] . '">
                            <button type="button" class="btn btn-outline-warning btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Delete</button>
                          </a>
                        </div>
                      </td>
                    </tr>';
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:././partials/_footer.php -->
  <footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © nhóm 2 | Quản trị
        website</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
<?php
require '../view/main/footer.php';
?>