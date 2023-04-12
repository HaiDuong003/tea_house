<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

require '../../model/databse.php';
require '../../model/validate.php';


if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case 'sign_in':
      require './login.php';
      break;
    case 'sign_up':
      require './register.php';
      break;
    case 'contact':
      require './contact.php';
      break;
    case 'main_index':
      require './main_index.php';
      break;
    case 'logout':
      require './logout.php';
      break;
    case 'profile':
      require './profile.php';
      break;
    case 'detail':
      require './detail.php';
      break;
    case 'list_products':
      require './list_products.php';
  }
} else {
  require './main_index.php';
}
