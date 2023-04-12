<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/css/grid.css">
  <link rel="stylesheet" href="../assets/css/base.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <link rel="stylesheet" href="../assets/css/responsive.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrapdiv-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="app">
    <!-- Start header -->
    <div id="header">
      <!-- Nav bar -->
      <div class="header__navbar-wrap">
        <div class="grid wide ">

          <div class="header__navbar hide-on-mobile-and-tablet">
            <ul class="header__navbar-list">
              <li class="header__navbar-item">
                <img src="../assets/img/header__navbar-logo.webp" alt="" class="header__navbar-img">
              </li>
              <li class="header__navbar-item">
                <a href="#" class="header__navbar-link-left">Hotline:</a>
              </li>
              <li class="header__navbar-item">
                <a href="#" class="header__navbar-link-left header__navbar-link-number">0826 805 458</a>
              </li>
            </ul>

            <ul class="header__navbar-list">
              <li class="header__navbar-item">

              </li>
              <li class="header__navbar-item navbar-item-display">
                <a href="#" class="header__navbar-link-right">
                  <i class="header__navbar-icon bx bx-search" style="font-weight:600 ;"></i>
                  Tìm kiếm
                </a>
                <div class="header__navbar-search">
                  <input class="header__navbar-search-input" type="text " placeholder="Tìm kiếm...">
                  <i class="header__navbar-search-icon bx bx-search" style="font-weight:600 ;"></i>
                </div>
              </li>
              <!-- login -->
              <?php
              if (empty($_SESSION['username']) && empty($_SESSION['id'])) :
              ?>
                <li class="header__navbar-item navbar-item-display">
                  <a href="#" class="header__navbar-link-right ">
                    <i class="header__navbar-icon bx bxs-user"></i>
                    Tài Khoản
                  </a>
                  <div class="user__notify">
                    <ul class="user__notify-list">
                      <li class="user__notify-item">
                        <a href="index.php?action=sign_up" class="user__notify-link">Đăng ký</a>
                      </li>
                      <li class="user__notify-item">
                        <a href="index.php?action=sign_in" class="user__notify-link">Đăng nhập</a>
                      </li>
                    </ul>
                  </div>
                </li>
              <?php
              else :
              ?>
                <li class="header__navbar-item navbar-item-display">
                  <a href="#" class="header__navbar-link-right ">
                    <i class="header__navbar-icon bx bxs-user"></i>
                    <?php echo $_SESSION['username'] ?>
                  </a>
                  <div class="user__notify">
                    <ul class="user__notify-list">
                      <li class="user__notify-item">
                        <a href="index.php?action=profile&idU=<?php echo $_SESSION['id']; ?>" class="user__notify-link" style="font-size: 13px">Profile</a>
                      </li>
                      <li class="user__notify-item">
                        <a href="index.php?action=logout" class="user__notify-link" style="font-size: 13px">Đăng xuất</a>
                      </li>
                    </ul>
                  </div>
                </li>
              <?php endif; ?>
              <!-- end login -->
              <li class="header__navbar-item navbar-item-display">
                <a href="#" class="header__navbar-link-right">
                  <i class='header__navbar-icon bx bx-shopping-bag'></i>
                  <span class="header__navbar-icon-quantity">0</span>
                  Giỏ hàng
                </a>
                <div class="header__cart-no-cart">
                  <div class="header__cart-no-cart-img">
                    <img src="../assets/img/empty-cart.webp" alt="">
                  </div>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- category -->
      <div class="grid wide">
        <div class="header__category hide-on-mobile-and-tablet">
          <ul class="header__category-list">
            <li class="header__category-item">
              <a href="index.php?action=main_index" class="header__category-link header__category-link--active">Trang chủ</a>
            </li>
            <li class="header__category-item">
              <a href="" class="header__category-link">Giới thiệu</a>
            </li>

            <li class="header__category-item">
              <a href="index.php?action=list_products" class="header__category-link">Sản phẩm
                <i class='header__category-icon bx bxs-down-arrow'></i>
              </a>

              <ul class="header__category-menu">
                <li class="header__category-menu-item">
                  <a href="index.php?action=list_products&idC=1" class="header__category-menu-link">Cà phê</a>
                </li>
                <li class="header__category-menu-item">
                  <a href="index.php?action=list_products&idC=2" class="header__category-menu-link">Bánh ngọt</a>
                </li>
                <li class="header__category-menu-item">
                  <a href="index.php?action=list_products&idC=3" class="header__category-menu-link">Smoothies</a>
                </li>
                <li class="header__category-menu-item">
                  <a href="index.php?action=list_products&idC=4" class="header__category-menu-link">Trà hoa quả</a>
                </li>
              </ul>
            </li>


          </ul>
          <div class="header_-category-img">
            <a href="index.php?action=main_index" class="header__category-link">
              <img src="../assets/img/logo.webp" alt="">
            </a>
          </div>
          <ul class="header__category-list">
            <li class="header__category-item">
              <a href="" class="header__category-link">Tin tức</a>
            </li>
            <li class="header__category-item">
              <a href="" class="header__category-link">Khuyến mãi</a>
            </li>
            <li class="header__category-item">
              <a href="" class="header__category-link">Thực đơn</a>
            </li>
            <li class="header__category-item">
              <a href="index.php?action=contact" class="header__category-link">Liên hệ</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- mobile-and-tablet-header -->

      <input type="radio" id="checkbox-hidden" name="display-on-mt" hidden>
      <input type="radio" id="checkbox-list-on-mt" name="display-on-mt" hidden>
      <label class="mt__header-overlay" for="checkbox-hidden"></label>
      <div class="mt__header-menu">
        <div class="mt__header-menu-heading">
          <a href="../view/login.php?action=sign_in" class="mt__header-menu-login">Đăng nhập</a>
          <!-- <a href="" class="mt__header-menu-special">/</a> -->
          <a href="../view/register.php?action=sign_up" class="mt__header-menu-register">Đăng ký</a>
        </div>
        <div class="mt__header-menu-list">
          <li class="mt__header-menu-item">
            <a href="" class="mt__header-menu-link">Trang chủ</a>
          </li>
          <li class="mt__header-menu-item">
            <a href="" class="mt__header-menu-link">Giới thiệu</a>
          </li>
          <li class="mt__header-menu-item">
            <a href="" class="mt__header-menu-link">Sản phẩm</a>
          </li>
          <li class="mt__header-menu-item">
            <a href="" class="mt__header-menu-link">Tin tức</a>
          </li>
          <li class="mt__header-menu-item">
            <a href="" class="mt__header-menu-link">Thực đơn</a>
          </li>
          <li class="mt__header-menu-item">
            <a href="" class="mt__header-menu-link">Liên hệ</a>
          </li>
        </div>
      </div>
      <label class="mt__header-icon" for="checkbox-list-on-mt"><i class='mt__header-icon bx bx-list-ul'></i></label>

      <div class="grid wide">
        <div class="mt__header">
          <div class="mt__header-item">
            <div class="mt__header-img">
              <a href=""><img src="../assets/img/logo_white.webp" alt=""></a>
            </div>
            <div class="header__navbar-item navbar-item-display">
              <a href="#" class="header__navbar-link-right">
                <i class='header__navbar-icon bx bx-shopping-bag'></i>
                <span class="header__navbar-icon-quantity">0</span>
                Giỏ hàng
              </a>
              <div class="header__cart-no-cart">
                <div class="header__cart-no-cart-img">
                  <img src="../assets/img/empty-cart.webp" alt="">
                </div>

              </div>
            </div>
          </div>

          <div class="mt__header-search">
            <input type="text" placeholder="Tìm sản phẩm bạn mong muốn...">
            <i class="header__navbar-icon bx bx-search" style="font-weight:600 ;"></i>
          </div>
        </div>
      </div>

    </div>