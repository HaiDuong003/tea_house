<?php
require '../view/header.php';
$listProduct = allValues('products');

?>
<div id="slider">
  <img src="../assets/img/slider_1.webp" alt="">
</div>

<!-- body -->
<div id="app__container">
  <div class="body__product-warp">
    <div class="grid wide">
      <div class="content__header">
        <div class="content__header-logo">
          <img src="../assets/img/title_base.webp" alt="">
        </div>
        <div class="content__header-title">DANH MỤC SẢN PHẨM</div>
      </div>
      <ul class="row body__product-list">
        <li class="col l-3 m-4 c-6 body__product-item">
          <a href="" class="body__product-link">
            <img src="../assets/img/product-1.webp" alt="">
            <span class="body__product-link-desc">Cà phê</span>
          </a>
        </li>

        <li class="col l-3 m-4 c-6 body__product-item">
          <a href="" class="body__product-link">
            <img src="../assets/img/product-4.webp" alt="">
            <span class="body__product-link-desc">Bánh ngọt</span>
          </a>
        </li>
        <li class="col l-3 m-4 c-6 body__product-item">
          <a href="" class="body__product-link">
            <img src="../assets/img/product-3.webp" alt="">
            <span class="body__product-link-desc">Smoothies</span>
          </a>
        </li>
        <li class="col l-3 m-4 c-6 body__product-item">
          <a href="" class="body__product-link">
            <img src="../assets/img/product-2.webp" alt="">
            <span class="body__product-link-desc">Trà hoa quả</span>
          </a>
        </li>
        <li class="col l-3 m-4 c-6 body__product-item">
          <a href="" class="body__product-link">
            <img src="../assets/img/product-1.webp" alt="">
            <span class="body__product-link-desc">Trà sữa(chưa mở bán)</span>
          </a>
        </li>
        <li class="col l-3 m-4 c-6 body__product-item">
          <a href="" class="body__product-link">
            <img src="../assets/img/product-2.webp" alt="">
            <span class="body__product-link-desc">Danh mục 6</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="body__about-wrap">
    <div class="grid wide">
      <div class="row">
        <div class="col l-6 m-8 body__about">
          <div class="content__header align-left">
            <div class="content__header-logo">
              <img src="../assets/img/title_base.webp" alt="">
            </div>
            <div class="content__header-title">TẠI SAO CHỌN CHÚNG TÔI</div>
          </div>
          <div class="body__about-text">Với những nghệ nhân rang tâm huyết và đội ngũ tài năng cùng
            những câu chuyện trà đầy cảm hứng, ngôi nhà Tea House là không gian dành riêng cho những
            ai trót yêu say đắm hương vị của những lá trà tuyệt hảo.</div>
          <ul class="body__about-list">
            <li class="body__about-item">
              <div class="body__about-item-icon">
                <img src="../assets/img/about-icon-1.webp" alt="">
              </div>
              <div class="body__about-item-content">
                <div class="body__about-item-head">Giá cả phải chăng</div>
                <div class="body__about-item-desc">Cam kết chỉ cung cấp cà phê có nguồn gốc được
                  kiểm soát chất lượng</div>
              </div>
            </li>
            <li class="body__about-item">
              <div class="body__about-item-icon">
                <img src="../assets/img/about-icon-2.webp" alt="">
              </div>
              <div class="body__about-item-content">
                <div class="body__about-item-head">Hương vị tuyệt hảo</div>
                <div class="body__about-item-desc">Những giọt trà được lựa chọn cẩn thận ngay từ
                  lúc đang ngâm mình trong sương</div>
              </div>
            </li>
            <li class="body__about-item">
              <div class="body__about-item-icon">
                <img src="../assets/img/about-icon-3.webp" alt="">
              </div>
              <div class="body__about-item-content">
                <div class="body__about-item-head">Sản phẩm tự nhiên</div>
                <div class="body__about-item-desc">Cam kết chỉ cung cấp lá trà có nguồn gốc được
                  kiểm soát chất lượng chặt</div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="body__menu-wrap">
    <div class="grid wide">
      <div class="content__header">
        <div class="content__header-logo">
          <img src="../assets/img/title_base.webp" alt="">
        </div>
        <div class="content__header-title">MENU HÔM NAY</div>
      </div>
      <ul class=" body__menu-nav">
        <li class="body__menu-nav-item ">
          <a href="" class="body__menu-nav-link body__menu-nav-link--active">Trà nóng</a>
        </li>
        <li class="body__menu-nav-item">
          <a href="" class="body__menu-nav-link">Trà hoa quả</a>
        </li>
        <li class="body__menu-nav-item">
          <a href="" class="body__menu-nav-link">Smoothies</a>
        </li>
        <li class="body__menu-nav-item">
          <a href="" class="body__menu-nav-link">Bánh ngọt</a>
        </li>
      </ul>
      <ul class="row body__menu-list">
        <?php
        foreach ($listProduct as $key => $product) {
          echo '
            <li class="col l-3 m-4 c-6 body__menu-list-item">
            <a href="index.php?action=detail&idP=' . $product['id_product'] . '" class="body__menu-list-link">
              <div class="body__menu-list-link-img-btn">
                <img src="../../image/image_pro/' . $product['image'] . '" alt="">
                <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
              </div>
  
              <p class="body__menu-list-link-desc">' . $product['product_name'] . '</p>
              <p class="body__menu-list-link-price">Giá: <span>
                  ' .  number_format($product['price'], 0, '', '.')  . 'đ
                </span></p>
  
            </a>
          </li>';
          if ($key > 6) {
            break;
          }
        }
        ?>
      </ul>
    </div>
  </div>

  <div class="body__time-wrap">
    <div class="grid wide">
      <div class="row">
        <div class="col l-7 m-12 c-12 body__time-left">
          <div class="body__time-left-wrap">
            <div class="content__header align-left margin-small">
              <div class="content__header-logo ">
                <img src="../assets/img/title_base_2.webp" alt="" class="ccc-color">
              </div>
              <div class="content__header-title white-color">THỜI GIAN MỞ CỬA</div>
            </div>
            <p class="body__time-left-text">“Cà phê nhé" - Một lời hẹn rất riêng của người Việt. Một
              lời ngỏ mộc mạc để mình ngồi lại bên nhau và sẻ chia câu chuyện của riêng mình. Tea
              House hẹn gặp bạn chốn quen thuộc.</p>
            <ul class="body__time-left-list">
              <li class="body__time-left-item">T2 - T6: 8h30 - 21h30</li>
              <li class="body__time-left-item">T7 - CN: 8h00 - 22h00</li>
            </ul>
            <button class="body__time-left-btn">Đặt bàn ngay</button>
          </div>
        </div>
        <div class="col l-5 m-0 c-0 body__time-right">
        </div>
      </div>
    </div>
  </div>

  <div class="body__news-wrap">
    <div class="grid wide">
      <div class="content__header">
        <div class="content__header-logo">
          <img src="../assets/img/title_base.webp" alt="">
        </div>
        <div class="content__header-title">TIN TỨC NỔI BẬT</div>
      </div>
      <ul class="row body__news-list">
        <li class="col l-4 m-6 c-12 body__news-item">
          <a href="" class="body__news-link">
            <div class="body__news-link-img">
              <img src="../assets/img/news/new-1.webp" alt="">
            </div>
          </a>
          <a href="" class="body__news-link">
            <p class="body__news-link-title">NHÂM NHI CÀ PHÊ BAO LÂU NHƯNG BẠN
              TẬN MẮT NHÌN KỸ XEM HẠT CÀ PHÊ
              CHƯA ?</p>
          </a>
          <p class="body__news-desc">Cốc cafe vị đăng đắng, lẫn thêm chút ngọt bùi của sữa đặc sao mà
            gây nghiện đến thế. Không chỉ cuốn hút ở mùi vị, một cốc cafe sáng còn giúp ngày mới
            tràn đầy năng lượng với người trẻ, sẵn sàng ch...</p>
        </li>
        <li class="col l-4 m-6 c-12 body__news-item">
          <a href="" class="body__news-link">
            <div class="body__news-link-img">
              <img src="../assets/img/news/new-2.webp" alt="">
            </div>
          </a>
          <a href="" class="body__news-link">
            <p class="body__news-link-title">UỐNG 1-4 TÁCH CÀ PHÊ MỖI NGÀY GIÚP
              BỆNH NHÂN UNG THƯ KÉO DÀI SỰ SỐNG</p>
          </a>
          <p class="body__news-desc">Uống từ một đến bốn tách cà phê mỗi
            ngày có thể giúp bệnh nhân ung thư
            đại trực tràng giai đoạn cuối sống lâu
            hơn và làm chậm sự tiến triển của
            bệnh . Phát hiện này được các nhà
            khoa học rút ra từ ...</p>
        </li>
        <li class="col l-4 m-6 c-12 body__news-item">
          <a href="" class="body__news-link">
            <div class="body__news-link-img">
              <img src="../assets/img/news/new-3.webp" alt="">
            </div>
          </a>
          <a href="" class="body__news-link">
            <p class="body__news-link-title">DÙNG CỐC GIẤY ĐỰNG CÀ PHÊ NÓNG , THỨ
              BẠN UỐNG ĐẦY ẮP NHỮNG THỨ ĐÁNG SỢ
              NÀY</p>
          </a>
          <p class="body__news-desc">Đối với nhiều người , một ngày mới chỉ
            có thể khởi đầu tốt đẹp bằng một
            tách cà phê nóng . Nhờ cafein , bộ não
            dường như không thể nhận được tín
            hiệu " mệt mỏi " , từ đó tạo cho con
            người ta một nguồn n ...</p>
        </li>
        <li class="col l-4 m-6 c-12 body__news-item">
          <a href="" class="body__news-link">
            <div class="body__news-link-img">
              <img src="../assets/img/news/new-4.webp" alt="">
            </div>
          </a>
          <a href="" class="body__news-link">
            <p class="body__news-link-title">UỐNG TRÀ CÓ MẤT NGỦ KHÔNG?</p>
          </a>
          <p class="body__news-desc">Uống trà có mất ngủ không ? Đây có
            lẽ là câu hỏi kinh điển , nhất là với
            những người mới tập uống trà . Có
            những người chỉ nhấp một chén trà
            thôi cũng có thể khiến họ trằn trọc
            khó ngủ cả đêm . Nhưng ...</p>
        </li>
        <li class="col l-4 m-6 c-12 body__news-item">
          <a href="" class="body__news-link">
            <div class="body__news-link-img">
              <img src="../assets/img/news/new-5.webp" alt="">
            </div>
          </a>
          <a href="" class="body__news-link">
            <p class="body__news-link-title">CÀ PHÊ HAY THỂ DỤC : LỰA CHỌN NÀO
              GIÚP ĐÁNH BẠI CƠN BUỒN NGỦ TỐT HƠN ?</p>
          </a>
          <p class="body__news-desc">Có hai trường phải để đánh bại những
            cơn buồn ngủ vào sáng sớm và đầu
            giờ chiều , hai thời điểm trong ngày mà
            bạn cần lấy lại sự tỉnh táo của mình
            nhất . Một số người sẽ chọn giải pháp
            nhanh chóng v ...</p>
        </li>
      </ul>
    </div>
  </div>
  <div class="body__banner-wrap">
    <div class="grid ">
      <ul class="row body__banner-list">
        <li class="col l-2-4 m-4 c-6 body__banner-item">
          <a href=""><img src="../assets/img/banner/picture_1.webp" alt=""></a>
        </li>
        <li class="col l-2-4 m-4 c-6 body__banner-item">
          <a href=""><img src="../assets/img/banner/picture_2.webp" alt=""></a>
        </li>
        <li class="col l-2-4 m-4 c-6 body__banner-item">
          <a href=""><img src="../assets/img/banner/picture_3.webp" alt=""></a>
        </li>
        <li class="col l-2-4 m-4 c-6 body__banner-item">
          <a href=""><img src="../assets/img/banner/picture_4.webp" alt=""></a>
        </li>
        <li class="col l-2-4 m-4 c-6 body__banner-item">
          <a href=""><img src="../assets/img/banner/picture_5.webp" alt=""></a>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php
require '../view/footer.php';
?>