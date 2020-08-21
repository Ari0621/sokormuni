<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran | Sokormuni.id</title>
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
        <?php
        $id = $_GET['id'];
            require_once "./../../config/Database.php";
        
            $db = new Database();
        
            $mysqli = $db->connect();
        
            $sql = "SELECT * FROM invoice WHERE checkout_id='$id'";
        
            $result = $mysqli->query($sql);
            $data   = $result->fetch_assoc();
            // if (!empty($result)) {
            //     foreach ($data as $row) {
            // print_r ($id);
        
        ?>
        <!--form checkout-->
        <div class="container tes-bg b-1">
            <div class="col-12">
                <hr>
                <div class="row">
                    <div class="col-4">
                        <div class=" lh-5 mt-4">
                            <p>Code Invoice : <?php echo $data['no_invoice'];?> </p>
                            <p>Nama : <?php echo $data['name_user'];?></p>
                            <p>Alamat Kirim : <?php echo $data['address'];?></p>
                            <p>No HP : <?php echo $data['no_hp'];?></p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-left f-bold">Pembayaran</h3>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Size</th>
                                <th scope="col">Total Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Sokormuni "Maroon"</td>
                                <td>1</td>
                                <td>L</td>
                                <td>Rp.45.000</td>
                              </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="row">
                            <div class="col-12 text-right ">
                                <p><span class="f-bold">Total Belanja</span>  : Rp.<?php echo number_format ($data['sub_total']);?></p>
                                <p><span class="f-bold">Ongkos Kirim</span>  : Rp.<?php echo number_format ($data['ongkos_kirim']);?></p>
                                <p><span class="f-bold">Total Biaya</span>  : Rp.<?php echo number_format ($data['total_price']);?></p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

                <!--form checkout-->
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 b-1 p-3 text-center">
                            <p class="mt-2">SIlahkan melakukan pembayaran Rp.<?php echo number_format ($data['total_price']);?></p>
                            <p class="f-bold"><?php echo $data['bank'];?></p>
                        </div>
                    </div>
                </div>
                <div class="12 mt-4 text-center">
                    <button type="button" class="btn btn-color text-right mr-2">Bayar</button>
                    <button type="button" class="btn btn-color">Kembali</button>
                </div>


            </div>
        </div>
        <?php 
    //         }
    // }else{
    //     echo "data 0";
    // }
    ?>
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


        <script>
            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode != 46 && charCode > 31
                    && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
            function isNumericKey(evt) {
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode != 46 && charCode > 31
                    && (charCode < 48 || charCode > 57))
                    return true;
                return false;
            } 
        </script>

    </body>

</html>