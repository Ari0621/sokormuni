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
                        products.description as product_description,
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
    function insert($name, $category_id, $material, $color, $size, $description) {
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
        $description    = $mysqli->real_escape_string($description);

        // sql statement untuk insert data product
        $sql = "INSERT INTO products (
                    name,
                    category_id,
                    material,
                    color,
                    size,
                    description
                ) VALUES (
                    '$name',
                    '$category_id',
                    '$material',
                    '$color',
                    '$size',
                    '$description'
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
                        products.description as product_description,
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
    function update($name, $category_id, $material, $color, $size, $description) {
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
        $description    = $mysqli->real_escape_string($description);

        // sql statement untuk update data product
        $sql = "INSERT INTO products (
                    name,
                    category_id,
                    material,
                    color,
                    size,
                    description
                ) VALUES (
                    '$name',
                    '$category_id',
                    '$material',
                    '$color',
                    '$size',
                    '$description'
                )";

        // sql statement untuk update data product
        $sql = "UPDATE products SET  name           = '$name',
                                    category_id    = '$category_id',
                                    material       = '$material',
                                    color          = '$color',
                                    size           = '$size',
                                    description    = '$description'
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