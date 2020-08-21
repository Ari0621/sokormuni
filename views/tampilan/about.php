<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Sokormuni.id</title>
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
                        <?php if (isset($_SESSION["pelanggan"])){?>
                        <li class="nav-item">
                            <a class="nav-link ml-1" href="logout.php">Logout</a>
                        </li>
                        <?php }else{?>
                        <li class="nav-item">
                            <a class="nav-link ml-1" href="login.php">Login</a>
                        </li>
                        <?php }?>
                        <li class="nav-item">
                            <a class="nav-link ml-1" href="about.php">About Us</a>
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

    <!--about us-->
    <div class="container">
        <div class="row ">
            <div class="col-12 p-top-140 text-center tes-bg b-1">
                <h2>About Us</h2>
                <hr>
                <img src="images/sokormuni logo ( about us ).png" class="width-200" alt="">
                <div class="fs-17 text-center mb-4">
                    <p>Sudah tau kan apa itu Kain KATUN BAMBU?<br /><a class="notranslate" tabindex="0"
                            href="https://www.instagram.com/sokormuni.id/">@sokormuni.id</a>&nbsp;kasih info ne
                        😀<br />Jadi, Kain KATUN BAMBU itu jenis kain yang terbuat dari campuran KATUN dan SERAT
                        BAMBU.<br /><br />Akhir-akhir ini permintaan baju bayi atau anak kususnya KATUN BAMBU lumayan
                        meningkat. Tapi sayangnya, produksi kain katun bambu tidak banyak.<br /><br />Apa si keunggulannya
                        ko sampai spesial??<br />Nah, keunggulan SERAT BAMBU kususnya untuk bayi atau anak itu
                        karena:<br />- Anti Bakteri<br />- Anti Bau<br />- Mudah menyerap keringat<br />- Sejuk Nyaman
                        Ringan Lembut<br />- Hanya menyerap sinar UV 20%, sehingga tidak panas meski di bawah sinar
                        matahari.<br /><br />Kami&nbsp;<a class="notranslate" tabindex="0"
                            href="https://www.instagram.com/sokormuni.id/">@sokormuni.id</a>&nbsp;menjual kusus kaos anak
                        KATUN BAMBU yang unik 😁. Kami kusus menjual bahan kain yang premium. Jadi Parents, selalu
                        ikuti&nbsp;<a class="notranslate" tabindex="0"
                            href="https://www.instagram.com/sokormuni.id/">@sokormuni.id</a>&nbsp;yaaa..untuk dapatkan
                        update produk-produk kami.
                    </p>
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