
<?php
$id = $_GET['id'];

require "./../../controller/products/Product.php";
$products = new Product();
$product = $products->get_product($id);
$result = $products->view();
print_r ($product);
// require "./../../controller/categories/Category.php";
// $categories = new Category();
// $list_category = $categories->view();

// require "./../../controller/materials/Material.php";
// $materials = new Material();
// $list_material = $materials->view();

// require "./../../controller/colors/Colors.php";
// $colors = new Colors();
// $list_colors = $colors->view();

// require "./../../controller/sizes/Sizes.php";
// $sizes = new Sizes();
// $list_sizes= $sizes->view()
// ?>


    </form>
</body>

</html>