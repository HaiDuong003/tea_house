<?php
require '../view/main/header.php';
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Danh sách sản phẩm </h3>
      <nav aria-label="breadcrumb">
        <a href="index.php?action=add_pro"><button type="button" class="btn btn-gradient-danger btn-icon-text">
            <i class="mdi mdi-upload btn-icon-prepend"></i> Thêm sản phẩm </button></a>
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
                  <th> Tên sản phẩm </th>
                  <th style="width: 150px;"> Hình ảnh </th>
                  <th> Giá sản phẩm</th>
                  <th> Giảm giá </th>
                  <th> Mô tả </th>
                  <th> Danh mục </th>
                  <!-- <th> Ngày nhập</th> -->
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($allProduct as $key => $product) {
                  echo
                  '<tr>
                    <td> ' . $product['id_product'] . ' </td>
                    <td> ' . $product['product_name'] . ' </td>
                    <td>
                      <img src="../../image/image_pro/' . $product['image'] . '" class="mb-2 mw-100 w-100 mh-100 rounded" alt="image" style="height: 100px !important;">
                    </td>
                    <td> ' . number_format($product['price'], 0, '', ',') . 'đ </td>
                    <td> ' . $product['discount'] . '%</td>
                    <td style="max-width: 300px;"><span  class="desc">' . $product['description'] . '</span></td>
                    <td>' . $product['category_name'] . '</td>
                    <td>
                      <div class="template-demo" style="text-align: center;">
                        <a href="index.php?action=update_pro&idP=' . $product['id_product'] . '">
                          <button type="button" class="btn btn-outline-primary btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Update</button>
                        </a>
                        <a href="index.php?action=delete_pro&idP=' . $product['id_product'] . '">
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