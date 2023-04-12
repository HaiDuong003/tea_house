<?php
require '../view/main/header.php';

?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Danh mục sản phẩm </h3>
      <nav aria-label="breadcrumb">
        <a href="index.php?action=add_cate">
          <button type="button" class="btn btn-gradient-danger btn-icon-text">
            <i class="mdi mdi-upload btn-icon-prepend"></i> Thêm danh mục </button>
        </a>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> ID </th>
                  <th> Tên danh mục </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($allCate as $key => $cate) {
                  echo '               
                  <tr>
                    <td> ' . $cate['id_categories'] . ' </td>
                    <td> ' . $cate['category_name'] . ' </td>
                    <td>
                      <div class="template-demo" style="text-align: center;">
                        <a href="index.php?action=update_cate&idC=' . $cate['id_categories'] . '">
                          <button type="button" class="btn btn-outline-primary btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Update</button>
                        </a>
                        <a href="index.php?action=delete_cate&idC=' . $cate['id_categories'] . '">
                          <button name="delete" type="button" class="btn btn-outline-warning btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Delete</button>
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
  <!-- partial:../../partials/_footer.php -->
  <footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Dương | Dự án </span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
<?php
require '../view/main/footer.php';
?>