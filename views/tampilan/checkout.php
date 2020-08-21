<?php
session_start();
if (!isset($_SESSION["pelanggan"])){
    echo "<script>alert('silakan login');</script>";
    echo "<script>location='login.php';</script>";
     
}
?>
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


    <!--form checkout-->
    <form method="post">
        <div class="container tes-bg b-1">
            <div class="row">
            <div class="col-12 ">
                    <h3 class="f-bold text-left">Your Order</h3>
                    <hr>
                    
                    <div class="row d-flex align-items-center f-bold">
                        <div class="col-3">
                            <p>Product</p>
                        </div>
                        <div class="col-2">
                            <p>Name</p>
                        </div>
                        <div class="col-2">
                            <p class="text-center">Quantity</p>
                        </div>
                        <div class="col-2">
                            <p class="text-center">Size</p>
                        </div>
                        <div class="col-3">
                            <p class="text-center">Total Price</p>
                        </div>
                    </div>
                    <hr>
    <!--form order-->
    <?php
                    require "./../../controller/products/Product.php";
                    if (count($_SESSION["keranjang"]) > 0) {
                        $cobaini = 0;
                        foreach ($_SESSION["keranjang"] as $id_produk => $jumlah){
                        $id = $id_produk ;
                        $products = new Product();
                        $product = $products->get_product($id);
                        $supharga = $product['products_harga']*$jumlah;
                        $totalharga = $cobaini+=$supharga;
                        $coba = $_SESSION['pelanggan'];

                    // print_r ($coba);
                ?>

                    <div class="row d-flex align-items-center">
                        <div class="col-3">
                            <img class="width-90" src="<?php echo "./../../Image/".$product['products_image1'];?>" alt="">
                        </div>
                        <div class="col-2 fs-14">
                            <p><?php echo $product['product_name'];?></p>
                        </div>
                        <div class="col-2">
                            <p class="text-center"><?php echo $jumlah;?></p>
                        </div>
                        <div class="col-2">
                            <p class="text-center">L</p>
                        </div>
                        <div class="col-3">
                            <p class="text-center">Rp.<?php echo number_format ($supharga);?></p>
                        </div>
                    </div>
                    <hr>
                    <?php 
            }
    }else{
        echo "data 0";
    }
    ?>       
                    <div class="row">
                        <div class="col-12 text-right">
                            <p><span class="f-bold"> Subtotal:</span> Rp.<?php echo number_format ($totalharga);?></p>
                        </div>
                    </div>
                </div>


                <!--form checkout-->
                 
                <div class="col-12 ">
                    <div class="row">
                        <div class="col-12">
                            <h3 class=" text-left f-bold ">Checkout</h3>
                            

                            <!--nama dan nomor telepon-->
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Nama Penerima</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Nama Lengkap" name="nama"
                                        value="<?php echo $coba['name']; ?>" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Nomor Telepon</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" name="no_hp" value="<?php echo $coba['no_hp']; ?>"
                                        required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <!--alamat-->
                            <div class="mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" name="alamat" value="<?php echo $coba['address']; ?>"
                                    placeholder="Nama Jalan, No rumah, Rt, Rw" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>


                            <!--kota dan kodepos-->
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" name="kode_pos" value="<?php echo $coba['kode_pos']; ?>"
                                        required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-md-9 mb-3">
                                <label for="exampleFormControlSelect1">Pilih Ekspedisi</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="ongkir">
                                    <?php
                                    // require_once "./../../config/Database.php";
                                    $db = new Database();
                                    $mysqli = $db->connect();
                                    $sql = "SELECT * FROM ongkir";
                                    $result = $mysqli->query($sql);
                                    while($perongkir =$result->fetch_assoc()){
                                    ?>
                                    <option value="<?php echo $perongkir['id']?>">
                                    <?php echo $perongkir['nama_kota']?> 
                                    </option>
                                    <?php } ?>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-15 mb-3">
                            <label for="exampleFormControlSelect1">Pilih Metode Pembayaran</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="bank">
                                <option value="Bank Mandiri 132-144-155 AN.sokormuni">Transfer Bank Mandiri</option>
                                <option value="Bank BCA 123-666-879 AN.sokormuni">Transfer Bank BCA</option>
                                <option value="Bank BNI 982-244-235 AN.sokormuni">Transfer Bank BNI</option>
                                <option value="Bank BRI 467-356-267 AN.sokormuni">Transfer Bank BRI</option>
                            </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Nama Pemilik Rekening</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Nama Lengkap" name="nama_pemilik"
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Nomor Rekening</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" name="no_rekening" value=""
                                        required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            
                            <div>
                                <button type="submit" name="simpan" class="btn btn-color text-right mr-2">Lanjutkan ke
                                    Pembayaran</button>
                                <a href="cart.php"  class="btn btn-color">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['simpan'])){
            $id_pelanggan     = $_SESSION["pelanggan"]["id"];
            $id_ongkir        = $_POST["ongkir"];
            $db               = new Database();
            $mysqli           = $db->connect();
            $ong              = "SELECT * FROM ongkir WHERE id='$id_ongkir'";
            $result           = $mysqli->query($ong);
            $ambildata        = $result->fetch_assoc();
            $tarif            = $ambildata ['harga'];
            $kota             = $ambildata ['nama_kota'];
            $total_pembelian  = $totalharga + $tarif ;
            // print_r ($total_pembelian);
            
                $sql = "INSERT INTO checkout (
                    user_id,
                    id_ongkir,
                    total_pembelian
                ) VALUES (
                    '$id_pelanggan',
                    '$id_ongkir',
                    '$total_pembelian'
                )";
            $result = $mysqli->query($sql);
        
             $checkout_id= $mysqli->insert_id;
             $tanggal_pembelian = date("y-m-d");
             foreach ($_SESSION["keranjang"] as $id_produk => $jumlah){
                $sql = "INSERT INTO checkout_product (
                    product_id,
                    checkout_id,
                    jumlah,
                    price_item,
                    datetime
                ) VALUES (
                    '$id_produk',
                    '$checkout_id',
                    '$jumlah',
                    '$total_pembelian',
                    '$tanggal_pembelian'

                )";
            $result = $mysqli->query($sql);
             }
             $tanggal       = date("ymd");
             $no_invoice    = $tanggal . sprintf( $id_pelanggan);
             $nama_pembeli = $_POST["nama"];
             $alamat        =$_POST["alamat"];
             $kodepos       =$_POST["kode_pos"];
             $no_hp          =$_POST["no_hp"];
             $supharga       = $product['products_harga']*$jumlah;
             $bank          =$_POST["bank"];
             $nma          =$_POST["nama_pemilik"];
             $rka         =$_POST["no_rekening"];
        
             $sql = "INSERT INTO invoice (
                checkout_id,
                no_invoice,
                name_user,
                address,
                postal_code,
                total_price,
                date,
                no_hp,
                ongkos_kirim,
                ekspedisi,
                harga_item,
                sub_total,
                bank,
                nama_pemilik_rekening,
                nomor_rekening

             ) VALUES (
                '$checkout_id',
                '$no_invoice',
                '$nama_pembeli',
                '$alamat',
                '$kodepos',
                '$total_pembelian',
                '$tanggal_pembelian',
                '$no_hp',
                '$tarif',
                '$kota',
                '$supharga',
                '$totalharga',
                '$bank',
                '$nma',
                '$rka'

             )";
             $result = $mysqli->query($sql);
             // print_r ($no_invoice);
             unset($_SESSION["keranjang"]);
             echo "<script>alert('pembelian sukses');</script>";
             echo "<script>location='pembayaran.php?id=$checkout_id';</script>";
            }
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



    </body>

</html>