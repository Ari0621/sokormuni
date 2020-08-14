<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product | Sokormuni.id</title>
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
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

    <!-- judul catalog -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center fs-30 f-bold mb-4 p-top-140">
                <h2>SOKORMUNI CATALOG</h2>
            </div>
            
    <!-- catalog baju --> 
    <?php
    require "./../../controller/products/Product.php";

$products = new Product();

$result = $products->view();
$no = 1;

if (!empty($result)) {
    foreach ($result as $row) {
        ?> 
<!-- catalog baju -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-3 b-1">
                <div class="card-body p-0 ">
                    <div class="card-img">
                        <img class="w-100 img-fluid card-img-top card-img-reveal" src=<?php echo "./../../Image/".$row['products_image'];?> alt="">
                        <img class="w-100 img-fluid card-img-top" src=<?php echo "./../../Image/".$row['products_image1'];?> alt="">
                    </div>
                    <div class="px-3 py-2 mx-auto">
                        <p class="mt-1 mb-0 f-bold"><?php echo $row['product_name'];?></p>
                        <p class="mb-4">Size : S M L XL</p>
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-0">Rp.<?php echo $row['products_harga'];?></p>
                                </div>
                                <div>
                                    <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <?php 
        }
}else{
    echo "data 0";
}
?>
            <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/2.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/2 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "Misty"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/3.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/3 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "Navy"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/4.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/4 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "White"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/5.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/5 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "SK-27"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/6.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/6 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "SK-25"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/7.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/7 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "SK-1"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/8.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/8 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "SK-7"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/9.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/9 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "SK-18"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/10.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/10 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "SK-19"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/11.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/11 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "SK-21"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 b-1">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img class="w-100 img-fluid card-img-top card-img-reveal" src="images/12.jpg" alt="">
                            <img class="w-100 img-fluid card-img-top" src="images/12 no bg.jpg" alt="">
                        </div>
                        <div class="px-3 py-2">
                            <p class="mt-1 mb-0 f-bold">Sokormuni "SK-30"</p>
                            <p class="mb-4">Size : S M L XL</p>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0">Rp.45.000</p>
                                    </div>
                                    <div>
                                        <a href="#"  class="btn btn-color"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    footer-->
        <div class="footer">
            <div class="container f-grey ">
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
     


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    
    
</body>
</html>