<?php
// delete user
$conn = connect();
$id = $_GET['idU'];
$sql = "DELETE FROM `user` WHERE `id` = {$id}";
$stmt = $conn->prepare($sql);
$stmt->execute();
if ($conn) {
  echo '<script>alert("Đã xóa tài khoản thành công thành công");window.location.href="index.php?action=admin_user";</script>';
}
