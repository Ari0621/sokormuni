<?php
        
/* class product */
class Stock {

    /* method untuk menampilkan data product */
    function view() {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil semua data product
        $sql = "SELECT * FROM add_stock ORDER BY created_at DESC";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        // menutup koneksi database
        $mysqli->close();

        // nilai kembalian dalam bentuk array
        return $hasil;
    }

    /*  Method untuk menyimpan data ke tabel product */
    function insert($id, $date, $stock) {
    // memanggil file Database.php
    require_once "./../../config/Database.php";

    // membuat objek db dengan nama $db
    $db = new Database();

    // membuka koneksi ke database
    $mysqli = $db->connect();

    $id   = $mysqli->real_escape_string($id);
    $date         = $mysqli->real_escape_string($date);
    $stock        = $mysqli->real_escape_string($stock);    

    // sql statement untuk insert data product
    $sql = "INSERT INTO add_stock (
                date,
                total,
                product_id
            ) VALUES (
                '$date',
                '$stock',
                '$id'

            )";

    $result = $mysqli->query($sql);

    // cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 2 */
        header("Location: ./../../views/products/stock.php");
    }
    else{
        /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
        header("Location: ./../../views/products/add_stock.php");
    }

    // menutup koneksi database
    $mysqli->close();
    }

    /* Method untuk menampilkan data product berdasarkan nis */
    function get_sizes($id) {
    // memanggil file Database.php
    require_once "./../../config/Database.php";

    // membuat objek db dengan nama $db
    $db = new Database();

    // membuka koneksi ke database
    $mysqli = $db->connect();

    // sql statement untuk mengambil data product berdasarkan nis
    $sql = "SELECT * FROM add_stock WHERE id='$id'";

    $result = $mysqli->query($sql);
    $data   = $result->fetch_assoc();

    // menutup koneksi database
    $mysqli->close();
    
    // nilai kembalian dalam bentuk array
    return $data;
    }

    /* Method untuk mengubah data pada tabel product */
    function update($id, $name, $description) {
    // memanggil file Database.php
    require_once "./../../config/Database.php";

    // membuat objek db dengan nama $db
    $db = new Database();

    // membuka koneksi ke database
    $mysqli = $db->connect();

    $name           = $mysqli->real_escape_string($name);
    $description    = $mysqli->real_escape_string($description);

    // sql statement untuk update data product
    $sql = "INSERT INTO add_stock (
                name,
                description
            ) VALUES (
                '$name',
                '$description'
            )";

    // sql statement untuk update data product
    $sql = "UPDATE add_stock SET  name           = '$name',
                                  description    = '$description'  
                                  WHERE id       = '$id'"; 

    $result = $mysqli->query($sql);

    // cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 3 */
        header("Location: ./../../views/sizes/?alert=3");
    }
    else{
        /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
        header("Location: ./../../views/sizes/?alert=1");
    }

    // menutup koneksi database
    $mysqli->close();
    }

    /* Method untuk menghapus data pada tabel product */
    function delete($id) {
    // memanggil file Database.php
    require_once "./../../config/Database.php";

    // membuat objek db dengan nama $db
    $db = new Database();

    // membuka koneksi ke database
    $mysqli = $db->connect();

    // sql statement untuk delete data product
    $sql = "DELETE FROM add_stock WHERE id = '$id'";

    $result = $mysqli->query($sql);

    // cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 4 */
        header("Location: ./../../views/sizes/?alert=4");
    }
    else{
        /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
        header("Location: ./../../views/sizes/?alert=1");
    }

    // menutup koneksi database
    $mysqli->close();
    }

}


?>