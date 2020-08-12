
<?php
$id = $_GET['id'];

require "./../../controller/products/Product.php";
$products = new Product();
$product = $products->get_product($id);

require "./../../controller/categories/Category.php";
$categories = new Category();
$list_category = $categories->view();

require "./../../controller/materials/Material.php";
$materials = new Material();
$list_material = $materials->view();

require "./../../controller/colors/Colors.php";
$colors = new Colors();
$list_colors = $colors->view();

require "./../../controller/sizes/Sizes.php";
$sizes = new Sizes();
$list_sizes= $sizes->view()
?>
<html>

<body>
    <form action="./../../controller/products/proses_update.php" method="post" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Name: <br><input type="text" name="name" value="<?php echo $product['product_name']; ?>"><br>
        <br> category_id:
        <select name="category_id">
            <?php foreach($list_category as $value) { ?>
                <option value="<?php echo $value['id'] ?>" <?php echo ($value['id'] === $product['products_category_id']) ? "selected":"" ?>><?php echo $value['name'] ?></option>
            <?php
        } ?>
        </select>

        <br>material:
        <?php foreach ($list_material as $value) {
            ?>
        <input type="checkbox" name="material[]" value="<?php echo $value['name']?>" 
        <?php 
            $material = explode(",", $product['product_material']);
            foreach ($material as $valueChecked){
                switch ($valueChecked) {
                    case $value['name']:
                        echo ($value['name'] === $valueChecked) ? "checked":"";
                        break;
                    
                }
            }
        ?>> <?php echo $value['name']?>
        <?php } ?>

        <br>Colors:
        <?php foreach ($list_colors as $value) {
            ?>
        <input type="checkbox" name="color[]" value="<?php echo $value['name']?>" 
        <?php 
            $material = explode(",", $product['product_color']);
            foreach ($material as $valueChecked){
                switch ($valueChecked) {
                    case $value['name']:
                        echo ($value['name'] === $valueChecked) ? "checked":"";
                        break;
                    
                }
            }
        ?>> <?php echo $value['name']?>
        <?php } ?>

        <br>Sizes:
        <?php foreach ($list_sizes as $value) {
            ?>
        <input type="checkbox" name="size[]" value="<?php echo $value['name']?>" 
        <?php 
            $material = explode(",", $product['product_size']);
            foreach ($material as $valueChecked){
                switch ($valueChecked) {
                    case $value['name']:
                        echo ($value['name'] === $valueChecked) ? "checked":"";
                        break;
                    
                }
            }
        ?>> <?php echo $value['name']?>
        <?php } ?>
        <br>Stock:<br> <input type="number" name="stock" value="<?php echo $product['product_stock']; ?>"><br>
        <br>Description:<br><textarea class="form-control" rows="3" id="textarea"
            name="description"><?php echo $product['product_description']; ?></textarea>
         <br>Foto</br><input type="file" name="foto">
         <br>
        <br><input type="submit" name="simpan">

    </form>
</body>

</html>