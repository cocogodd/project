<?php
include('header.php');
?>

<?php
if (!function_exists('connect')) {
    function connect()
    {
        $conn = new mysqli('localhost', 'root', '12345678', 'project');
        if ($conn->connect_error) {
            die('Kết nối thất bại' . $conn->connect_error);
        }
        return $conn;
    }
}

$conn = connect();
$name_search = $_GET['search'];
$products = $conn->query("SELECT product.*,categories.menu_name,categories.id as category_id from product
    join categories_type on categories_type.id=product.categories_type_id
    join categories on categories.id=categories_type.Categories_id
     where product.name like '%$name_search%'");
?>
<ul class="product">

    <?php
    foreach ($products as $product) : ?>
        <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-thumb">
                        <img src="./upload/<?php echo $product['image'] ?>">
                    <a href="" class="buy-now">Buy Now</a>
                </div>
                <div class="product-infor">
                    <a href="categoryPage.php?category_id=<?php echo $product['category_id'] ?>" class="product-cart"> <?= $product['menu_name'] ?></a><br>
                    <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-name"><?= $product['name'] ?></a><br>
                    <div class="product-price">$<?= $product['price'] ?></div>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
<?php
include('footer.php');
?>