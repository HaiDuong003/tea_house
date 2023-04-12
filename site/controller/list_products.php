<?php
if (isset($_GET['idC'])) {
  $idC = $_GET['idC'];
  $listProduct = getValues('products', 'id_categories', $idC);
} else {
  $listProduct = allValues('products');
}
$listCate = allValues('categories');
require '../view/list_products.php';
