<?php
$countCmt = countElement('comment');
$countProduct = countElement('products');
$countUser = countElement('user');

$conn = connect();

$sql = "
SELECT categories.category_name, COUNT(*) AS total,
COUNT(*) * 100 / (SELECT COUNT(products.id_categories) FROM products) AS 'percent'
FROM products JOIN categories ON products.id_categories = categories.id_categories GROUP BY products.id_categories
";
$stmt = $conn->prepare($sql);
$stmt->execute();
$percentTageProduct = $stmt->fetchAll(PDO::FETCH_ASSOC);
$customer = json_decode(json_encode($percentTageProduct), true);

require '../view/main/index.php';
