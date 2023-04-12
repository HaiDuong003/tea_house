<?php
$id = $_GET['idC'];
$allProduct = getValue('products', 'id_categories', $id);
print_r($allProduct);
if (!empty($allProduct)) {
  echo '<script>alert("Không xóa được danh mục vì còn sản phẩm");window.location.href="index.php?action=admin_cate";</script>';
} else {
  $conn = connect();
  $sql = "DELETE FROM `categories` WHERE `id_categories` = {$id}";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  if ($conn) {
    echo '<script>alert("Đã xóa danh mục thành công thành công");window.location.href="index.php?action=admin_cate";</script>';
  }
}
