<?php
        
/* class product */
class Detail {

    /* method untuk menampilkan data product */
    function view() {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil semua data product
        $sql = "SELECT * FROM detail ORDER BY created_at DESC";

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
    function insert($last_id, $name, $stock) {
        // memanggil file Database.php
        require_once "./../../config/Database.php";
        

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $last_id           = $mysqli->real_escape_string($last_id);
        $name              = $mysqli->real_escape_string($name);
        $stock             = $mysqli->real_escape_string($stock);


        // sql statement untuk insert data product
        $sql = "INSERT INTO detail (
                    product_id,
                    nama,
                    stock
                ) VALUES (
                    '$last_id',
                    '$name',
                    '$stock'
                )";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 2 */
            header("Location: ./../../views/products/?alert=2");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
            header("Location: ./../../views/products/?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }

    /* Method untuk menampilkan data product berdasarkan nis */
    function get_product($id) {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil data product berdasarkan nis
        $sql = "SELECT * FROM detail WHERE id='$id'";

        $result = $mysqli->query($sql);
        $data   = $result->fetch_assoc();

        // menutup koneksi database
        $mysqli->close();
        
        // nilai kembalian dalam bentuk array
        return $data;
    }
    
    /* Method untuk mengubah data pada tabel product */
    function update($id, $last_id, $name, $stock) {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $product           = $mysqli->real_escape_string($product);
        $name              = $mysqli->real_escape_string($name);
        $last_id          = $mysqli->real_escape_string($last_id);


        // sql statement untuk update data product
        $sql = "INSERT INTO detail (
            product_id,
            nama,
            stock
        ) VALUES (
            '$last_id',
            '$name ',
            '$last_id'
        )";

        // sql statement untuk update data product
        $sql = "UPDATE detail SET  product_id           = '$last_id',
                                    nama                 = '$name',
                                    stock                 = '$last_id'
                              WHERE id             = '$id'"; 

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 3 */
            header("Location: ./../../views/detail_products/?alert=3");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
            header("Location: ./../../views/detail_products/?alert=1");
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
        $sql = "DELETE FROM detail WHERE id = '$id'";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 4 */
            header("Location: ./../../views/detail_products/?alert=4");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
            header("Location: ./../../views/detail_products/?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }
}
?>