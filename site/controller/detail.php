<?php

$idP = $_GET['idP'];
$productDetail = getValue('products', 'id_product', $idP);
$productRelated = getValues('products', 'id_categories', $productDetail['id_categories']);
if (!empty($_SESSION)) {
  $user = getValue('user', 'id', $_SESSION['id']);
}
// print_r($user);
if (isset($_POST['send_cmt'])) {
  if (empty($_POST['comment'])) {
    $error['cmt'] = '';
  }
  if (empty($error)) {
    $content = $_POST['comment'];
    $time = date('Y-m-d H:i:s');
    $idUser = $_SESSION['id'];
    addCmt($content, $idUser, $idP, $time);
    echo ("<script>location.href = './index.php?action=detail&idP=$idP';</script>");
  }
}
$listCmt = getCmt($idP);

require '../view/detail.php';
