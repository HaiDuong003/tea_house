<?php
require '../view/header.php';
?>

<head>
    <link rel="stylesheet" href="../assets/css/detail.css">
</head>
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <?php
        echo '
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../../image/image_pro/' . $productDetail['image'] . '" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">SKU: ' . $productDetail['id_product'] . '</div>
                <h1 class="display-5 fw-bolder">' . $productDetail['product_name'] . '</h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through">' . number_format($productDetail['price'], 0, '', ',') . 'đ</span>
                    <span>' . number_format($productDetail['price'], 0, '', ',') . 'đ</span>
                </div>
                <p class="lead">' . $productDetail['description'] . '</p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
            '
        ?>
        <!--  -->
    </div>
</section>
<div class="comment">
    <div class="container mt-5 mb-5">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="p-3">
                        <h6>Comments</h6>
                    </div>
                    <form action="" method="POST">
                        <?php
                        if (empty($user)) {
                            echo '
                    <div class="mt-3 d-flex flex-row p-3 form-color" style="column-gap: 10px"> <img src="../../image//image__user/free-user-icon-3296-thumb.png" width="50" height="45" class="rounded-circle mr-2"> <input  type="text" class="form-control" placeholder="Bạn phải đăng nhập để comment" readonly> </div>';
                        } else {
                            echo '
                    <div class="mt-3 d-flex flex-row p-3 form-color" style="column-gap: 10px"> <img src="../../image/image__user/' . $user['avatar'] . '" width="50" height="45" class="rounded-circle mr-2"> <input name="comment" type="text" class="form-control" placeholder="Enter your comment..."> </div>';
                        }
                        ?>
                        <input type="submit" name="send_cmt" hidden>
                    </form>
                    <div class="mt-2">
                        <!--  -->
                        <?php
                        foreach ($listCmt as $key => $cmt) {
                            echo '
                                <div style="column-gap: 10px;" class="d-flex flex-row p-3">
                                    <img src="../../image/image__user/' . $cmt['avatar'] . '" width="40" height="40" class="rounded-circle mr-3">
                                    <div class="w-100 d-flex flex-column justify-content-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-row align-items-center"> <span class="mr-2" style="font-weight: 600;">' . $cmt['username'] . '</span> </div> <small>' . time_elapsed_string($cmt['time_send']) . '</small>
                                        </div>
                                        <p class="text-justify comment-text mb-0">' . $cmt['content'] . '</p>
                                    </div>
                                </div>
                                ';
                        }
                        ?>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end comment -->
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Related products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            $count = 0;
            foreach ($productRelated as $key => $product) {
                if ($product["id_product"] != $idP) {
                    echo '
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a class="detail_pro" href="index.php?action=detail&idP=' . $product['id_product'] . '">
                            <img class="card-img-top" src="../../image/image_pro/' . $product['image'] . '" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">' . $product['product_name'] . '</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                    </div>
                                    <!-- Product price-->
                                    ' . number_format($product['price'], 0, '', ',') . '
                                </div>
                            </div>
                            </a>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    $count++;
                }
                if ($count >= 4) {
                    break;
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- Footer-->
<!-- <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer> -->
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<?php
require '../view/footer.php';

?>