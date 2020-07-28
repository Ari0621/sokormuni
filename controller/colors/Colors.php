<?php
        
/* class product */
class Colors {

    /* method untuk menampilkan data product */
    function view() {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil semua data product
        $sql = "SELECT * FROM colors ORDER BY created_at DESC";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        // menutup koneksi database
        $mysqli->close();

        // nilai kembalian dalam bentuk array
        return $hasil;
    }
    
    /* Method untuk menyimpan data ke tabel product */
    function insert($name) {
    // memanggil file Database.php
    require_once "./../../config/Database.php";

    // membuat objek db dengan nama $db
    $db = new Database();

    // membuka koneksi ke database
    $mysqli = $db->connect();

    $name           = $mysqli->real_escape_string($name);

    // sql statement untuk insert data product
    $sql = "INSERT INTO colors (
                name
            ) VALUES (
                '$name'
            )";

    $result = $mysqli->query($sql);

    // cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 2 */
        header("Location: ./../../views/colors/");
    }
    else{
        /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
        header("Location: ./../../views/colors/add_colors.php");
    }

    // menutup koneksi database
    $mysqli->close();
    }

    /* Method untuk menampilkan data product berdasarkan nis */
    function get_colors($id) {
    // memanggil file Database.php
    require_once "./../../config/Database.php";

    // membuat objek db dengan nama $db
    $db = new Database();

    // membuka koneksi ke database
    $mysqli = $db->connect();

    // sql statement untuk mengambil data product berdasarkan nis
    $sql = "SELECT * FROM colors WHERE id='$id'";

    $result = $mysqli->query($sql);
    $data   = $result->fetch_assoc();

    // menutup koneksi database
    $mysqli->close();
    
    // nilai kembalian dalam bentuk array
    return $data;
    }

    /* Method untuk mengubah data pada tabel product */
    function update($name) {
    // memanggil file Database.php
    require_once "./../../config/Database.php";

    // membuat objek db dengan nama $db
    $db = new Database();

    // membuka koneksi ke database
    $mysqli = $db->connect();

    $name           = $mysqli->real_escape_string($name);

    // sql statement untuk update data product
    $sql = "INSERT INTO colors (
                name
            ) VALUES (
                '$name',
            )";

    // sql statement untuk update data product
    $sql = "UPDATE colors SET  name           = '$name'
                              WHERE id            = '$id'"; 

    $result = $mysqli->query($sql);

    // cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 3 */
        header("Location: ./../../views/colors/?alert=3");
    }
    else{
        /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
        header("Location: ./../../views/colors/?alert=1");
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
    $sql = "DELETE FROM colors WHERE id = '$id'";

    $result = $mysqli->query($sql);

    // cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 4 */
        header("Location: ./../../views/colors/?alert=4");
    }
    else{
        /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
        header("Location: ./../../views/colors/?alert=1");
    }

    // menutup koneksi database
    $mysqli->close();
    }
}


?>