<?php
$allProduct = allValuesConnect('products', 'categories', 'id_categories');
require '../view/products/admin_pro.php';
