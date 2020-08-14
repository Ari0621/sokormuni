<?php
session_start();
foreach ($_SESSION["keranjang"] as $id_produk => $jumlah);
$id = $id_produk ;
require "./../../controller/products/Product.php";
$products = new Product();
$product = $products->get_product($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart | Sokormuni.id</title>
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/carousels/jquery.exzoom.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body class="bg-pattern">

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top header ">
        <div></div><img src="images/sokormuni logo.png" alt=""></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-4 fs-17 f-bold">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ml-2" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Promo
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Give Away</a>
                        <a class="dropdown-item" href="#">Discount</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-1" href="#">Size</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-1" href="#">About Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <div class="fs-24 ml-3">
                    <a class="fa fa-search fs-24 btn-icon" href=""></a>
                    <a class="fa fa-user-circle ml-2 btn-icon" href=""></a>
                    <a class="fa fa-shopping-cart ml-2 btn-icon" href=""></a>
                </div>
            </form>
        </div>
    </nav>

    <div class="container">
            <!--Grid row-->
            <div class="row">

                <!--kolom cart-->
                <div class="col-12 tes-bg b-1">
                    <h2 class="text-center">Your Cart</h2>
                    <hr>

                <!--isi cart-->
                
                <?php  
                // print_r ($_SESSION);
                if (!empty($product)) {
                ?>
                <div class="col-12">
                    <div class="card wish-list mb-4">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-5 col-lg-3 col-xl-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img class="img-fluid w-100"
                                            src=<?php echo "./../../Image/".$product['products_image'];?>
                                            alt="Sample">
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5><?php echo $product['product_name'];?></h5>
                                                <p class="mb-3 text-muted text-uppercase small">Shirt - <?php echo $product['product_name'];?></p>
                                                <p class="mb-2 text-muted text-uppercase small">Color: maroon</p>
                                                <p class="mb-3 text-muted text-uppercase small">Size: L</p>
                                            </div>
                                            <div>
                                                <div class="def-number-input number-input safari_only mb-0 w-100 d-flex align-items-center">
                                                    <a href="#" class="fas fa-minus-square fs-30 btn-icon"  onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></a>
                                                    <input class="quantity" min="0" name="quantity" value="1"
                                                        type="number">
                                                    <a href="#" class="fas fa-plus-square fs-30 btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></a>
                                                </div>
                                                <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                                </small>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#!" type="button"class="card-link-secondary small  text-uppercase mr-3 title-cart"><i class="fas fa-trash-alt mr-1 "></i> Remove item
                                                </a>
                                            </div>
                                            <p class="mb-0 f-bold">Rp.45000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
    }else{
        echo "data 0";
    }
    ?>
                    <!-- tabel2 -->
                    <!-- <div class="card wish-list mb-4">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-5 col-lg-3 col-xl-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img class="img-fluid w-100"
                                            src="images/2 no bg.jpg"
                                            alt="Sample">
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>Sokormuni "Grey"</h5>
                                                <p class="mb-3 text-muted text-uppercase small">Shirt - maroon</p>
                                                <p class="mb-2 text-muted text-uppercase small">Color: maroon</p>
                                                <p class="mb-3 text-muted text-uppercase small">Size: L</p>
                                            </div>
                                            <div>
                                                <div class="def-number-input number-input safari_only mb-0 w-100 d-flex align-items-center">
                                                    <a href="#" class="fas fa-minus-square fs-30 btn-icon"  onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></a>
                                                    <input class="quantity" min="0" name="quantity" value="1"
                                                        type="number">
                                                    <a href="#" class="fas fa-plus-square fs-30 btn-icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></a>
                                                </div>
                                                <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                                </small>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#!" type="button"class="card-link-secondary small  text-uppercase mr-3 title-cart"><i class="fas fa-trash-alt mr-1 "></i> Remove item
                                                </a>
                                            </div>
                                            <p class="mb-0 f-bold">Rp.45000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-12 text-right f-bold">
                    <p>Subtotal: Rp.9000</p>
                </div>
 
                <!--tombol lanjutan-->
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-color text-left mr-2">Lanjut Belanja</button>
                    <button type="button" class="btn btn-color text-left mr-2">Proses ke Checkout</button>
                    <button type="button" class="btn btn-color">Kembali</button>
                </div>
            </div>
        </div>      
    </div>



    <!--footer-->
    <div class="footer m-top-125">
        <div class="container f-grey">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6 col-md-5 col-lg-5 mt-4 mb-3">
                    <p>Senin - Sabtu 09.00 - 16.00 WIB</p>
                    <p>Copyright ©2020 sokormuni.id. All rights reserved</p>
                </div>
                <div class="col-12 col-sm-6 col-md-5 col-lg-5 mt-3 mb-3">
                    <p class="f-grey">Find Us On</p>
                    <a class="fab fa-instagram fs-30 btn-icon" href=""></a>
                    <a class="fab fa-whatsapp fs-30 ml-3 btn-icon" href=""></a>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 mt-3 mb-3">
                    <img class="mx-auto" src="images/sokormuni logo.png" alt="">
                </div>
            </div>
        </div>
    </div>



                <script src="js/jquery-3.5.1.min.js"></script>
                <script src="js/jquery.exzoom.js"></script>
                <script src="js/popper.min.js"></script>
                <script src="vendor/bootstrap/bootstrap.min.js"></script>
                <script src="vendor/slick/slick.min.js"></script>
                <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>