<?php
if (!empty($_SESSION)) {
  $admin = getValue('user', 'id', $_SESSION['id']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TeaHouse Admin</title>
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- <link rel="shortcut icon" href="../assets/images/favicon.ico" /> -->

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <!-- <a class="navbar-brand brand-logo" href="index.php"><img src="../assets/images/logo.svg" alt="logo" /></a> -->
        <a class="navbar-brand brand-logo" href="index.php"><img src="../../site/assets/img/logo.webp" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <!-- profile -->
        <ul class="navbar-nav navbar-nav-right">
          <?php
          if (empty($_SESSION['username']) && empty($_SESSION['id'])) :
            // print_r($_SESSION);
          ?>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Tài khoản</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  Đăng nhập </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  Đăng ký </a>
              </div>
            </li>

          <?php
          else :
          ?>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../image/image__user/<?php echo $admin['avatar'] ?>" alt="">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $_SESSION['username'] ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./logout.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
          <?php endif; ?>
          <!-- profile end -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <?php
          if (empty($_SESSION['username']) && empty($_SESSION['id'])) :
          ?>
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <!-- profile -->
                <div class="nav-profile-image">
                  <img src="../../image/image__user/free-user-icon-3296-thumb.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">None</span>
                  <span class="text-secondary text-small">none</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                <!-- profile end -->
              </a>
            </li>
          <?php
          else :
          ?>
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <!-- profile -->
                <div class="nav-profile-image">
                  <img src="../../image/image__user/<?php echo $admin['avatar'] ?>">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $_SESSION['username'] ?></span>
                  <span class="text-secondary text-small">Role: Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                <!-- profile end -->
              </a>
            </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=main">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Sản phẩm</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-dns"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?action=add_pro">Thêm sản
                    phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?action=admin_pro">Danh sách sản
                    phẩm</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Danh mục sản phẩm</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-certificate"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?action=add_cate">Thêm danh
                    mục</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?action=admin_cate">Danh sách
                    danh mục</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages2" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Thành viên</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-account"></i>
            </a>
            <div class="collapse" id="general-pages2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?action=add_user">Thêm thành
                    viên</a></li>
                <li class="nav-item"> <a class="nav-link" href="index.php?action=admin_user">Danh sách thành
                    viên</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->