<?php
require '../view/main/header.php';
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Thêm sản phẩm </h3>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Tên sản phẩm</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nhập tên sản phẩm" name="name_product">
                <?php
                if (isset($_POST['addPro'])) {
                  if (isset($error['name_product'])) {
                    echo "<p class='error'>Phải nhập tên sản phẩm</p>";
                  }
                }
                ?>
              </div>
              <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="image_pro" class="form-control">
                <?php
                if (isset($_POST['addPro'])) {
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
              <div class="form-group">
                <label for="exampleInputName2">Giá sản phẩm</label>
                <input type="number" min="0" class="form-control" id="exampleInputName2" placeholder="Nhập giá sản phẩm" name="price_product">
                <?php
                if (isset($_POST['addPro'])) {
                  if (isset($error['price_product'])) {
                    echo "<p class='error'>Phải nhập giá sản phẩm</p>";
                  }
                }
                ?>
              </div>
              <div class="form-group">
                <label for="exampleInputName3">Phần trăm khuyến mại</label>
                <input type="number" min="0" class="form-control" id="exampleInputName3" placeholder="Nhập giá khuyến mại" min="0" max="100" name="discount_product">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Mô tả sản phẩm</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" name="description_product"></textarea>
                <!-- <input type="text" class="form-control" id="exampleTextarea1"> -->
                <?php
                if (isset($_POST['addPro'])) {
                  if (isset($error['description_product'])) {
                    echo "<p class='error'>Phải nhập mô tả sản phẩm</p>";
                  }
                }
                ?>
              </div>
              <!-- categories -->
              <div class="form-group">
                <label for="exampleSelectGender">Loại sản phẩm</label>
                <select class="form-control" id="exampleSelectGender" name="cate">
                  <?php
                  foreach ($listCate as $key => $cate) {
                    echo '<option value="' . $cate['id_categories'] . '">' . $cate['category_name'] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <!--  -->
              <button type="submit" class="btn btn-gradient-primary me-2" name="addPro">Add</button>
              <button class="btn btn-light">Cancel</button>
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