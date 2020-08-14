<?php
        
/* class product */
class Product {

    /* method untuk menampilkan data product */
    function view() {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil semua data product
        $sql = "SELECT  products.id as product_id,
                        products.category_id as products_category_id,
                        products.name as product_name,
                        products.material as product_material,
                        products.color as product_color,
                        products.size as product_size,
                        products.stock as product_stock,
                        products.description as product_description,
                        products.image as products_image,
                        products.image1 as products_image1,
                        products.image2 as products_image2,
                        products.harga as products_harga,
                        products.created_at as product_created_at,
                        products.updated_at as product_updated_at,
                        categories.name as category_name
                        FROM products 
        INNER JOIN categories ON categories.id = products.category_id 
        ORDER BY products.created_at DESC";

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
    function insert($name, $category_id, $material, $color, $size,$stock, $description, $coba, $coba1, $coba2, $harga) {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $name           = $mysqli->real_escape_string($name);
        $category_id    = $mysqli->real_escape_string($category_id);
        $material       = $mysqli->real_escape_string($material);
        $color          = $mysqli->real_escape_string($color);
        $size           = $mysqli->real_escape_string($size);
        $stock          = $mysqli->real_escape_string($stock);
        $description    = $mysqli->real_escape_string($description);
        $coba           = $mysqli->real_escape_string($coba);
        $coba1          = $mysqli->real_escape_string($coba1);
        $coba2          = $mysqli->real_escape_string($coba2);
        $harga          = $mysqli->real_escape_string($harga);
        // sql statement untuk insert data product
        $sql = "INSERT INTO products (
                    name,
                    category_id,
                    material,
                    color,
                    size,
                    stock,
                    description,
                    image,
                    image1,
                    image2,
                    harga
                ) VALUES (
                    '$name',
                    '$category_id',
                    '$material',
                    '$color',
                    '$size',
                    '$stock',
                    '$description',
                    '$coba',
                    '$coba1',
                    '$coba2',
                    '$harga'
                )";

        $result = $mysqli->query($sql);
                 
        // cek hasil query
        if($result){
            return $mysqli->insert_id;
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
        $sql = "SELECT products.id as product_id,
                        products.category_id as products_category_id,
                        products.name as product_name,
                        products.material as product_material,
                        products.color as product_color,
                        products.size as product_size,
                        products.stock as product_stock,
                        products.description as product_description,
                        products.image as products_image,
                        products.image1 as products_image1,
                        products.image2 as products_image2,
                        products.harga as products_harga,
                        products.created_at as product_created_at,
                        products.updated_at as product_updated_at,
                        categories.name as category_name
        FROM products 
        INNER JOIN categories ON categories.id = products.category_id
        WHERE products.id ='$id'";

        $result = $mysqli->query($sql);
        $data   = $result->fetch_assoc();

        // menutup koneksi database
        $mysqli->close();
        
        // nilai kembalian dalam bentuk array
        return $data;
    }
    
    /* Method untuk mengubah data pada tabel product */
    function update($id, $name, $category_id, $material, $color, $size, $stock, $description, $coba, $coba1, $coba2, $harga) {
        // memanggil file Database.php
        require_once "./../../config/Database.php";

        // membuat objek db dengan nama $db
        $db = new Database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $name           = $mysqli->real_escape_string($name);
        $category_id    = $mysqli->real_escape_string($category_id);
        $material       = $mysqli->real_escape_string($material);
        $color          = $mysqli->real_escape_string($color);
        $size           = $mysqli->real_escape_string($size);
        $stock          = $mysqli->real_escape_string($stock);
        $description    = $mysqli->real_escape_string($description);
        $coba           = $mysqli->real_escape_string($coba);
        $coba1          = $mysqli->real_escape_string($coba1);
        $coba2          = $mysqli->real_escape_string($coba2);
        $harga          = $mysqli->real_escape_string($harga);


        // sql statement untuk update data product
        $sql = "INSERT INTO products (
                    name,
                    category_id,
                    material,
                    color,
                    size,
                    stock,
                    description,
                    image1,
                    image2,
                    image,
                    harga
                ) VALUES (
                    '$name',
                    '$category_id',
                    '$material',
                    '$color',
                    '$size',
                    '$stock',
                    '$description',
                    '$coba',
                    '$coba1',
                    '$coba2',
                    '$harga'
                )";

        // sql statement untuk update data product
        $sql = "UPDATE products SET  name          = '$name',
                                    category_id    = '$category_id',
                                    material       = '$material',
                                    color          = '$color',
                                    size           = '$size',
                                    stock          = '$stock',
                                    description    = '$description',
                                    image          = '$coba',
                                    image1         = '$coba1',
                                    image2         = '$coba2',
                                    harga          = '$harga'
                              WHERE id             = '$id'"; 

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 3 */
            header("Location: ./../../views/products/?alert=3");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
            header("Location: ./../../views/products/?alert=1");
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
        $sql = "DELETE FROM products WHERE id = '$id'";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman product dan tampilkan pesan = 4 */
            header("Location: ./../../views/products/?alert=4");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman product dan tampilkan pesan = 1 */
            header("Location: ./../../views/products/?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }
}
?>