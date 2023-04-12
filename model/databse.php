<?php
global $conn;
function connect()
{

  try {
    $conn = new PDO("mysql:host=localhost;dbname=my_store;charset=UTF8", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Kết nối thành công';
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  return $conn;
}


connect();


// lấy tất cả giá trị của bảng
function allValues($table)
{
  $conn = connect();
  $sql = "
        SELECT * FROM $table";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $data;
}
// lấy tất cả giá trị của 2 bảng nối nhau
function allValuesConnect($table1, $table2, $subkey)
{
  $conn = connect();
  $sql = "
          SELECT * FROM $table1 JOIN $table2 ON $table1.$subkey = $table2.$subkey";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $data;
}
// lấy giá trị của 1 hàng bằng username và password
function rowValues($username, $password)
{
  $conn = connect();
  $sql = "
        SELECT * FROM user WHERE username = '$username' AND password = '$password'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);

  return $data;
}

// xóa trường dữ liệu trong bảng 
function deleteRow($table, $column, $id)
{
  $conn = connect();
  $sql = "
        DELETE FROM $table WHERE $column = $id";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}

// thêm user vào bảng user 
function addUser($username, $password, $email, $avatar)
{
  $conn = connect();
  $sql = "
        INSERT INTO `user`(`username`, `password`, `email`, `avatar`) 
        VALUES (?,?,?,?);
        ";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$username, $password, $email, $avatar]);
}

// add user bằng form admin 
function addUserByAdmin($username, $password, $email, $avatar, $role)
{
  $conn = connect();
  $sql = "
        INSERT INTO `user`(`username`, `password`, `email`, `avatar`, `id_position`) 
        VALUES (?,?,?,?,?);
        ";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$username, $password, $email, $avatar, $role]);
}

// update user 
function updateUser($username, $password, $email, $avatar, $idU)
{
  $conn = connect();
  $sql = "
  UPDATE `user` SET `username` = '$username', `password` = '$password', `email` = '$email', `avatar` = '$avatar' 
  WHERE `user`.`id` = $idU;";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}
// update user by admin
function updateUserByAdmin($username, $password, $email, $avatar, $role, $idU)
{
  $conn = connect();
  $sql = "
  UPDATE `user` SET `username` = '$username', `password` = '$password', `email` = '$email', `avatar` = '$avatar', `id_position` = '$role'
  WHERE `user`.`id` = $idU;";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}

// thêm categories
function addCate($cateName)
{
  $conn = connect();
  $sql = "
  INSERT INTO `categories`(`category_name`) 
  VALUES (?);
  ";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$cateName]);
}

// update categories
function updateCate($cateNameUpdate, $idC)
{
  $conn = connect();
  $sql = "
  UPDATE `categories` SET `category_name` = '$cateNameUpdate' 
  WHERE `categories`.`id_categories` = $idC;";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}
// thêm product
function addProduct($namePro, $pricePro, $image_pro, $desc, $time_input, $discount, $cate)
{
  $conn = connect();
  $sql = "
        INSERT INTO `products`(`product_name`, `price`, `image`, `description`, `input_time`, `discount`, `id_categories`) 
        VALUES (?,?,?,?,?,?,?);
        ";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$namePro, $pricePro, $image_pro, $desc, $time_input, $discount, $cate]);
}
// update product
function updateProduct($namePro, $pricePro, $image_pro, $desc, $discount, $cate, $idP)
{
  $conn = connect();
  $sql = "
  UPDATE `products` SET `product_name` = '$namePro', `price` = '$pricePro', `image` = '$image_pro', `description` = '$desc', `discount` = '$discount', `id_categories` = $cate
  WHERE `products`.`id_product` = $idP;";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}
// lấy dữ liệu 1 hàng trong bảng
function getValue($table, $column, $where)
{
  $conn = connect();
  $sql = "
  SELECT * FROM $table WHERE $column = $where";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);
  return $data;
}
// lấy các giữ liệu trong bảng(có điều kiện)
function getValues($table, $column, $where)
{
  $conn = connect();
  $sql = "
  SELECT * FROM $table WHERE $column = $where";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $data;
}
// add comment
function addCmt($content, $idUser, $idProduct, $time)
{
  $conn = connect();
  $sql = "
  INSERT INTO `comment`(`content`, `id_user`, `id_product`, `time_send`) 
  VALUES (?,?,?,?);
  ";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$content, $idUser, $idProduct, $time]);
}
// select cmt
function getCmt($where)
{
  $conn = connect();
  $sql = "
  SELECT * FROM `comment` JOIN `user` ON `comment`.`id_user` = `user`.`id` WHERE id_product = $where";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $data;
}
// đếm số lượng phần tử trong bảng
function countElement($table)
{
  $conn = connect();
  $sql = "
  SELECT COUNT(*) FROM $table;";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);
  return $data;
}
// lấy time comment
function time_elapsed_string($datetime, $full = false)
{
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);
  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;
  $string = array(
    'y' => 'year',
    'm' => 'month',
    'w' => 'week',
    'd' => 'day',
    'h' => 'hour',
    'i' => 'minute',
    's' => 'second',
  );
  foreach ($string as $k => &$v) {
    if ($diff->$k) {
      $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
    } else {
      unset($string[$k]);
    }
  }
  if (!$full) $string = array_slice($string, 0, 1);
  return $string ? implode(', ', $string) . ' ago' : 'just now';
}
