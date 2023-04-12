<?php
require '../view/main/header.php';
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Cập nhật sản phẩm </h3>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Tên sản phẩm</label>
                <input name="namePro" type="text" class="form-control" id="exampleInputName1" placeholder="Nhập tên sản phẩm" value="<?php echo $productUpdate['product_name'] ?>">
                <?php
                if (isset($_POST['updatePro'])) {
                  if (isset($error['namePro'])) {
                    echo "<p class='error'>Phải nhập tên sản phẩm</p>";
                  }
                }
                ?>
              </div>
              <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="image_pro" class="form-control">
                <?php
                if (isset($_POST['updatePro'])) {
                  if (isset($error['notImg'])) {
                    echo "<p class='error'>Bạn phải chọn hình ảnh</p>";
                  } else if (isset($error['filesize'])) {
                    echo "<p class='error'>File có dung lượng quá lớn</p>";
                  }
                }
                ?>
              </div>
              <div class="form-group">
                <label for="exampleInputName2">Giá sản phẩm</label>
                <input name="price" type="number" min="0" class="form-control" id="exampleInputName2" placeholder="Nhập giá sản phẩm" value="<?php echo $productUpdate['price'] ?>">
                <?php
                if (isset($_POST['updatePro'])) {
                  if (isset($error['price'])) {
                    echo "<p class='error'>Phải nhập giá sản phẩm</p>";
                  }
                }
                ?>
              </div>
              <div class="form-group">
                <label for="exampleInputName3">Phần trăm khuyến mại</label>
                <input name="discount" type="number" min="0" max="100" class="form-control" id="exampleInputName3" placeholder="Nhập giá khuyến mại" min="0" max="100" value="<?php echo $productUpdate['discount'] ?>">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Mô tả sản phẩm</label>
                <textarea name="description" class="form-control" id="exampleTextarea1" rows="4"><?php echo $productUpdate['description'] ?></textarea>
                <?php
                if (isset($_POST['updatePro'])) {
                  if (isset($error['description'])) {
                    echo "<p class='error'>Phải nhập mô tả sản phẩm</p>";
                  }
                }
                ?>
              </div>
              <!-- categories -->
              <div class="form-group">
                <label for="exampleSelectGender">Loại sản phẩm</label>
                <select name="categories" class="form-control" id="exampleSelectGender">
                  <?php
                  foreach ($listCate as $key => $cate) {
                    echo '<option value="' . $cate['id_categories'] . '">' . $cate['category_name'] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <!--  -->
              <button type="submit" class="btn btn-gradient-primary me-2" name="updatePro">Update</button>
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