<?php
$id = $_GET['id'];

require "./../../controller/products/Product.php";
$products = new Product();
$product = $products->get_product($id);

require "./../../controller/sizes/Sizes.php";
$sizes = new Sizes();
$list_sizes= $sizes->view();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details | Sokormuni.id</title>
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/carousels/jquery.exzoom.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body class="bg-pattern">

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top header">
        <div></div><img src="images/sokormuni logo.png" alt=""></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-4 fs-17 f-bold">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
        
    <!--kolom detail produk-->
    <div class="container p-top-140 tes-bg b-1">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Detail Product</h2>
                <hr>
            </div>

    <!--gambar produk-->
            <div class="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src=<?php echo "./../../Image/".$product['products_image'];?> alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src=<?php echo "./../../Image/".$product['products_image1'];?>  alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src=<?php echo "./../../Image/".$product['products_image2'];?>  alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

    <!--deskripsi produk-->
            <div class="col-md-7 mt-2">
                <h2><?php echo $product['product_name'];?></h2>
                <p class="fs-20 c-grey">Rp.<?php echo $product['products_harga'];?></p>
                <div class="form-group mt-5">
                    <label for="exampleFormControlSelect1">Size</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <?php foreach ($list_sizes as $value) {?>
                      <option><?php echo $value['name'] ?></option>
                      <?php } ?>
                    </select>
                    
                  </div>
                  <div class="mt-5">
                      <p class="f-bold">Details</p>
                      <p>- cotton bamboo 30s</p>
                      <p>- anti bakteri</p>
                      <p>- serap sinar uv 20%</p>
                  </div>
                  <a href='cart.php?id=<?php echo $product["product_id"]; ?>' class="btn btn-color mt-3"> <i class="fa fa-shopping-cart fs-15" aria-hidden="true"> Tambah ke Keranjang</i></a>

            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="container f-grey mt-5">
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
    <script src="js/jquery.exzoom.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    
</body>
</html>