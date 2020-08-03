<?php
$id = $_GET['id'];

require "./../../controller/detail_product/Detail_product.php";
$stock = new Stock();
$list_stock = $stock->get_stock($id);

require "./../../controller/products/Product.php";
$products = new Product();
$list_product = $products->view();

?>
<html>
<body>
<form action="./../../controller/detail_product/proses_update.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<br> Nama Product:
<select name="category_id">
            <?php foreach($list_product as $value) { ?>
                <option value="<?php echo $value['id'] ?>" <?php echo ($value['id'] === $product['product_id']) ? "selected":"" ?>><?php echo $value['name'] ?></option>
            <?php
        } ?>
        </select>
        Stock:<br><textarea class="form-control" rows="3" id="textarea" name="stock" ><?php echo $list_stock['stock']; ?></textarea>
<input type="submit" name="simpan">
</form>
</body>
</html>