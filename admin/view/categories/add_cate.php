<?php
require '../view/main/header.php';

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Thêm danh mục </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên danh mục</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nhập tên danh mục" name="cate_name">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    if (isset($error["cate_name"])) {
                                        echo '<p class="error">Chưa nhập tên danh mục</p>';
                                    } else if (isset($error['check_cate'])) {
                                        echo '<p class="error">Đã có danh mục ' . $_POST['cate_name'] . '</p>';
                                    } else {
                                        echo '<p class="succeed">Thêm danh mục thành công!</p>';
                                    }
                                }
                                ?>
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleTextarea1">Mô tả</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div> -->
                            <button type="submit" class="btn btn-gradient-primary me-2" name="add_cate">Add</button>
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