<?php
session_start();
require '../../model/databse.php';
require '../../model/validate.php';

if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case 'add_pro':
      require './add_pro.php';
      break;
    case 'admin_pro':
      require './admin_pro.php';
      break;
    case 'update_pro':
      require './update_pro.php';
      break;
    case 'delete_pro':
      require './delete_pro.php';
      break;
      # end products

    case 'add_cate':
      require './add_cate.php';
      break;
    case 'admin_cate':
      require './admin_cate.php';
      break;
    case 'update_cate':
      require './update_cate.php';
      break;
    case 'delete_cate':
      require './delete_cate.php';
      break;
      # end categories

    case 'add_user':
      require './add_user.php';
      break;
    case 'admin_user':
      require './admin_user.php';
      break;
    case 'update_user':
      require './update_user.php';
      break;
    case 'delete_user':
      require './delete_user.php';
      break;
      # end user

    case 'main':
      require './dashboard.php';
      break;
  }
} else {
  require './dashboard.php';
}

// require './view/main/footer.php';
