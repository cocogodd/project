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
?>
<?php
$conn = connect();
$name_search = $_GET['search'];
$search_page_total_record = $conn->query("SELECT count(id) as total from product
    where product.name like '%$name_search%'
    ")->fetch_row()[0];
$search_page_current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 15;
$search_page_total_page = ceil($search_page_total_record / $limit);

if ($search_page_current_page > $search_page_total_page) {
    $search_page_current_page = $search_page_total_page;
} else if ($search_page_current_page < 1) {
    $search_page_current_page = 1;
}
$search_page_start = ($search_page_current_page - 1) * $limit;
$products = $conn->query("SELECT product.*,categories.menu_name,categories.id as category_id from product
    join categories_type on categories_type.id=product.categories_type_id
    join categories on categories.id=categories_type.Categories_id
     where product.name like '%$name_search%'
     LIMIT $search_page_start, $limit");
?>
<ul class="product">

    <?php
    foreach ($products as $product) : ?>
        <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-thumb">
                        <img src="./upload/<?php echo $product['image'] ?>">
                    
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
<nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        <?php if ($search_page_current_page > 1 && $search_page_total_page > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="searchPage.php?page=<?php echo $search_page_current_page - 1 ?>" tabindex="-1">Previous</a>
                            </li>
                        <?php } ?>
                        <?php
                        for ($i = 1; $i <= $search_page_total_page; $i++) {
                            if ($i == $search_page_current_page) { ?>
                                <li class="page-item page-item active"><a class="page-link" href="#"><?php echo $i ?></a></li>
                            <?php } else { ?>
                                <li class="page-item "><a class="page-link" href="searchPage.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php }
                        } ?>

                        <?php if ($search_page_current_page < $search_page_total_page && $search_page_total_page > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="searchPage.php?page=<?php echo $search_page_current_page + 1 ?>">Next</a>
                            </li>
                        <?php } ?>

                    </ul>
                </nav>
<?php
include('footer.php');
?>