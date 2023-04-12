<?php
// update product
$listCate = allValues('categories');
$idP = $_GET['idP'];
$productUpdate = getValue('products', 'id_product', $idP);
if (isset($_POST['updatePro'])) {
  $error = checkEmty(array('namePro', 'price', 'description'));
  // validate img
  if (file_exists($_FILES['image_pro']['tmp_name']) || is_uploaded_file($_FILES['image_pro']['tmp_name'])) {
    $folder = "../../image/image_pro/";
    $fileName = $folder . basename($_FILES['image_pro']['name']);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg' && $fileType != 'webp') {
      $error['notImg'] = '';
      die();
    }
    if ($_FILES['image_pro']['size'] > 20000000) {
      $error['filesize'] = '';
      die();
    }
    if (move_uploaded_file($_FILES['image_pro']['tmp_name'], $fileName)) {
    } else {
      $error['image_pro'] = '';
      die();
    }
  } else {
    $image_pro = $productUpdate['image'];
  }
  if (empty($error)) {
    $namePro = $_POST['namePro'];
    $pricePro = $_POST['price'];

    if (empty($image_pro)) {
      $image_pro = $_FILES['image_pro']['name'];
    }

    $desc = $_POST['description'];
    if (empty($_POST['discount_product'])) {
      $discount = '0';
    } else {
      $discount = $_POST['discount_product'];
    }
    $cate = $_POST['categories'];
    updateProduct($namePro, $pricePro, $image_pro, $desc, $discount, $cate, $idP);
    $succeed = '';
  }
  if (isset($succeed)) {
    echo ("<script>location.href = 'index.php?action=admin_pro';</script>");
  }
}
require '../view/products/update_pro.php';
