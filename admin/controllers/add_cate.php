<?php
$allCate = allValues('categories');

if (isset($_POST['add_cate'])) {
  // $error = checkEmty('cate_name');
  if (empty($_POST['cate_name'])) {
    $error['cate_name'] = '';
  } else {
    $cateName = $_POST['cate_name'];
    foreach ($allCate as $key => $cate) {
      if ($cateName == $cate["category_name"]) {
        $error['check_cate'] = '';
      }
    }
  }
  if (empty($error)) {
    addCate($cateName);
  }
}
require '../view/categories/add_cate.php';
