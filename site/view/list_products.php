<?php
require '../view/header.php';
// print_r($listProduct);
?>
<main>
  <div class="grid wide">
    <ul class=" body__menu-nav">
      <li class="body__menu-nav-item ">
        <a href="index.php?action=list_products" class="body__menu-nav-link <?php if (!isset($idC)) {
                                                                              echo "body__menu-nav-link--active";
                                                                            } ?>">Tất cả</a>
      </li>
      <?php
      foreach ($listCate as $key => $category) {
        echo '
          <li class="body__menu-nav-item">
            <a id="cate' . $category['id_categories'] . '" href="index.php?action=list_products&idC=' . $category['id_categories'] . '" class="body__menu-nav-link">' . $category['category_name'] . '</a>
          </li>';
      }
      ?>
    </ul>
    <ul class=" row body__menu-list">
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
                  ' . number_format($product['price'], 0, '', '.') . '
                </span></p>
    
            </a>
          </li>
          ';
      }
      ?>
    </ul>
  </div>
  <!-- active -->
  <script>
    let idC = new URLSearchParams(window.location.search).get('idC');
    // console.log(idC);
    const listIDC = ['1', '2', '3', '4'];
    if (idC) {
      listIDC.forEach((item) => {
        if (idC === item) {
          let active = document.querySelector('#cate' + item);
          // let active = cate + item;
          console.log(active);
          active.className += ' body__menu-nav-link--active';
          console.log(active);
        }
      })
    }
  </script>
</main>
<?php
require '../view/footer.php';
?>