<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Sokormuni.id</title>
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/carousels/jquery.exzoom.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>

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


    <!--form checkout-->
        <div class="container tes-bg b-1">
            <div class="row">
                
    <!--form order-->
                <div class="col-12 col-lg-6 ">
                    <h3 class="f-bold text-left">Your Order</h3>
                    <hr>
                    <div class="row d-flex align-items-center f-bold">
                        <div class="col-4">
                            <p>Product</p>
                        </div>
                        <div class="col-2">
                            <p class="text-center">Quantity</p>
                        </div>
                        <div class="col-3">
                            <p class="text-center">Size</p>
                        </div>
                        <div class="col-3">
                            <p class="text-center">Total Price</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row d-flex align-items-center">
                        <div class="col-4">
                            <img class="width-90" src="images/1 no bg.jpg" alt="">
                        </div>
                        <div class="col-2">
                            <p class="text-center">1</p>
                        </div>
                        <div class="col-3">
                            <p class="text-center">L</p>
                        </div>
                        <div class="col-3">
                            <p class="text-center">Rp.45.000</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row d-flex align-items-center">
                        <div class="col-4">
                            <img class="width-90" src="images/2 no bg.jpg" alt="">
                        </div>
                        <div class="col-2">
                            <p class="text-center">1</p>
                        </div>
                        <div class="col-3">
                            <p class="text-center">M</p>
                        </div>
                        <div class="col-3">
                            <p class="text-center">Rp.45.000</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 text-right">
                            <p><span class="f-bold"> Subtotal:</span> Rp.90.000</p>
                        </div>
                    </div>
                </div>

                <!--form checkout-->
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <h3 class=" text-left f-bold ">Checkout</h3>
                            <hr>
                            
                            <!--nama dan nomor telepon-->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Nama Penerima</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Nama Lengkap"
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Nomor Telepon</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                        required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <!--alamat-->
                            <div class="mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address"
                                    placeholder="Nama Jalan, No rumah, Rt, Rw" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>


                            <!--kota dan kodepos-->
                            <div class="row">
                                <div class="col-md-9 mb-3">
                                    <label>Kota atau Kecamatan</label>
                                    <input type="text" class="form-control" id="firstName"
                                        placeholder="kota atau kecamatan tujuan pengiriman" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                        required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <!--provinsi-->
                            <div class="mb-3">
                                <label for="address2">Provinsi<span class="text-muted"></span></label>
                                <input type="text" class="form-control" id="address2"
                                    placeholder="Provinsi tujuan pengiriman">
                            </div>
                            <div>
                                <button type="button" class="btn btn-color text-right mr-2">Lanjutkan ke
                                    Pembayaran</button>
                                <button type="button" class="btn btn-color">Batal</button>
                            </div>
                        </div>
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