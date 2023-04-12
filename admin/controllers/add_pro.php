<?php
// add product
$listCate = allValues('categories');

if (isset($_POST['addPro'])) {
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
    $error['image_pro'] = '';
  }


  $error = checkEmty(array('name_product', 'price_product', 'description_product'));
  if (empty($error)) {
    $namePro = $_POST['name_product'];
    $pricePro = $_POST['price_product'];
    $image_pro = $_FILES['image_pro']['name'];
    $desc = $_POST['description_product'];
    $time_input = date('Y-m-d H:i:s');
    if (empty($_POST['discount_product'])) {
      $discount = '0';
    } else {
      $discount = $_POST['discount_product'];
    }
    $cate = $_POST['cate'];
    addProduct($namePro, $pricePro, $image_pro, $desc, $time_input, $discount, $cate);
    // echo $time_input;
  }
}
require '../view/products/add_pro.php';
