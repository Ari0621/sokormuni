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
        $sql = "SELECT  detail.id as detail_id,
                        detail.product_id as detail_product_id,
                        detail.stock as detail_stock,
                        detail.created_at as detail_created_at,
                        detail.updated_at as detail_updated_at,
                        -- products.name as products_name
                        FROM detail 
        INNER JOIN products ON products.name = detail.product_name 
        ORDER BY detail.created_at DESC";

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
    function insert($product, $ju_stock) {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $product           = $mysqli->real_escape_string($product);
        $ju_stock          = $mysqli->real_escape_string($ju_stock);


        // sql statement untuk insert data product
        $sql = "INSERT INTO detail (
                    product_id,
                    stock
                ) VALUES (
                    '$product',
                    '$ju_stock'
                )";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 2 */
            header("Location: ./../../views/stock/?alert=2");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
            header("Location: ./../../views/stock/?alert=1");
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
        $sql = "SELECT  detail.id as detail_id,
                        detail.product_id as detail_product_id,
                        detail.stock as detail_stock,
                        detail.created_at as detail_created_at,
                        detail.updated_at as detail_updated_at,
                        products.name as products_name
                        FROM detail 
        INNER JOIN products ON products.id = detail.product_id 
        ORDER BY detail.created_at DESC";

        $result = $mysqli->query($sql);
        $data   = $result->fetch_assoc();

        // menutup koneksi database
        $mysqli->close();
        
        // nilai kembalian dalam bentuk array
        return $data;
    }
    
    /* Method untuk mengubah data pada tabel product */
    function update($id, $name, $category_id, $material, $color, $size, $description) {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $product           = $mysqli->real_escape_string($product);
        $ju_stock          = $mysqli->real_escape_string($ju_stock);


        // sql statement untuk update data product
        $sql = "INSERT INTO detail (
            product_id,
            stock
        ) VALUES (
            '$product',
            '$ju_stock'
        )";

        // sql statement untuk update data product
        $sql = "UPDATE detail SET  product_id           = '$product',
                                    stock                 = '$stock'
                              WHERE id             = '$id'"; 

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 3 */
            header("Location: ./../../views/stock/?alert=3");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
            header("Location: ./../../views/stock/?alert=1");
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
            header("Location: ./../../views/stock/?alert=4");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
            header("Location: ./../../views/stock/?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }
}
?>