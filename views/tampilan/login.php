<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sokormuni.id</title>
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

    <!--kolom login-->
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-9 col-md-8 col-lg-6 b-1 bg-register">
                <form action="./../../controller/users/proses_login.php" method="post">
                    <div class="form-group column-login">
                        <h3 class="mb-3 f-bold text-center">Customer Login</h3>
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email" name="username">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group column-login">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="form-check mt-1">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                    </div>
                    <div class="mt-3 ">
                        <button type="submit" class="btn btn-color mr-2">Sign in</button>
                        <button type="submit" class="btn btn-color">Create Account</button>
                    </div>
                </form>
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