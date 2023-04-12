<?php
$idC = $_GET['idC'];
$valueCate = getValue('categories', 'id_categories', $idC);
if (isset($_POST['Update'])) {
  if (isset($_POST['cate_name'])) {
    $cateName = $_POST['cate_name'];
    updateCate($cateName, $idC);
  } else {
    $error['cate_name'] = '';
  }
}
require '../view/categories/update_cate.php';
