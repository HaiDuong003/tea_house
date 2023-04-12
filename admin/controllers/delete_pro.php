<?php
// delete product
$conn = connect();
$id = $_GET['idP'];
$sql = "DELETE FROM `products` WHERE `id_product` = {$id}";
$stmt = $conn->prepare($sql);
$stmt->execute();
if ($conn) {
  echo '<script>alert("Đã xóa sản phẩm thành công thành công");window.location.href="index.php?action=admin_pro";</script>';
}
