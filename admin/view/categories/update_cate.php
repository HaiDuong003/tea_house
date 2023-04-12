<?php
require '../view/main/header.php';
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Cập nhật danh mục </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên danh mục</label>
                                <input type="text" name="cate_name" class="form-control" id="exampleInputName1" placeholder="Nhập tên danh mục" value="<?php echo $valueCate['category_name'] ?>">
                            </div>
                            <?php
                            if (isset($_POST['Update'])) {
                                if (isset($error['cate_name'])) {
                                    echo '<p class="error">Chưa nhập tên danh mục</p>';
                                } else {
                                    echo ("<script>location.href = 'index.php?action=admin_cate';</script>");
                                    // header("Location: teahouse/admin/controllers/index.php?action=admin_cate");
                                }
                            }
                            ?>
                            <button type="submit" class="btn btn-gradient-primary me-2" name="Update">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.php -->
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