<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sokormuni.id</title>
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

    <!--login forms-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-9 col-lg-9 b-1 bg-register">
                <h3 class="mb-3 text-center f-bold">Create Account</h3>
                <form action="./../../controller/users/proses_add.php" method="post"> 
                <input type="hidden" name="lavel" value="User">
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap" value="" name="name" required>
                    <div class="invalid-feedback">
                        Harus diisi.
                    </div>
                </div>
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" value="" name="username" required>
                    <div class="invalid-feedback">
                        Harus diisi.
                    </div>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" value="" name="password" required>
                    <div class="invalid-feedback">
                        Harus diisi.
                    </div>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" value="" name="email" required>
                    <div class="invalid-feedback">
                        Harus diisi.
                    </div>
                </div>

                <div class="mb-3">
                    <label>No HP</label>
                    <input type="number" class="form-control" placeholder="Nomor HP" value="" name="nohp" required>
                    <div class="invalid-feedback">
                        Harus diisi.
                    </div>
                </div>

                <div class="row mb-2 align-items-center">
                    <label class="col-sm-2 col-form-label ">Jenis Kelamin</label>
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1"
                            value="Pria">
                        <label class="form-check-label" for="exampleRadios1">
                            Pria 
                        </label>
                    </div>
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2"
                            value="Wanita">
                        <label class="form-check-label" for="exampleRadios2">
                            Wanita
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat Lengkap" value="" name="address" required>
                    <div class="invalid-feedback">
                        Harus diisi.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="zip">Kode Pos</label>
                    <input type="text" class="form-control" id="zip" placeholder="" name="kode_pos" required>
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" name="simpan" class="btn btn-color">Create Account</button>
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