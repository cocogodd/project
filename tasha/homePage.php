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

$conn = connect(); ?>
<?php
$new_arrival_total_record = $conn->query('SELECT count(id) as total from product
    --   WHERE ...
    ')->fetch_row()[0];
$new_arrival_current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 15;
$new_arrival_total_page = ceil($new_arrival_total_record / $limit);

if ($new_arrival_current_page > $new_arrival_total_page) {
    $new_arrival_current_page = $new_arrival_total_page;
} else if ($new_arrival_current_page < 1) {
    $new_arrival_current_page = 1;
}
$new_arrival_start = ($new_arrival_current_page - 1) * $limit;
$newArrival = $conn->query("SELECT product.*,categories.menu_name,categories.id as category_id from product
      join categories_type on categories_type.id=product.categories_type_id
      join categories on categories.id=categories_type.Categories_id 
      LIMIT $new_arrival_start, $limit
    --   WHERE ...
      ");
?>

<?php
$best_seller_total_record = $conn->query(
    'SELECT count(id) as total from product
    --   WHERE ...
    ')
    ->fetch_row()[0];
$best_seller_current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$best_seller_total_page = ceil($best_seller_total_record / $limit);

if ($best_seller_current_page > $best_seller_total_page) {
    $best_seller_current_page = $best_seller_total_page;
} else if ($best_seller_current_page < 1) {
    $best_seller_current_page = 1;
}
$best_seller_start = ($best_seller_current_page - 1) * $limit;
$bestSeller = $conn->query("SELECT product.*,categories.menu_name,categories.id as category_id from product
      join categories_type on categories_type.id=product.categories_type_id
      join categories on categories.id=categories_type.Categories_id 
        LIMIT $best_seller_start, $limit
        --   WHERE ...
        ");
?>

<div id="homePage">
    <div id="bannerHome" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#bannerHome" data-slide-to="0" class="active"></li>
            <li data-target="#bannerHome" data-slide-to="1"></li>
            <li data-target="#bannerHome" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-40">Food wages</h5>
                    <p class="font-25">Don't have to worry about your meals every day.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-40">Kitchen utensils</h5>
                    <p class="font-25">Go to the kitchen every day without any worries.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-40">Food wages</h5>
                    <p class="font-25">Don't have to worry about your meals every day.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-40">Food wages</h5>
                    <p class="font-25">Don't have to worry about your meals every day.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-40">Kitchen utensils</h5>
                    <p class="font-25">Go to the kitchen every day without any worries.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bannerHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="categoryBox" class="container">
        <div class="row">
            <div class="col-6">
                <a href="./categoryPage.php?category_id=1">
                    <div class="card bg-dark text-white">
                        <img src="./assets/images/slide5.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Cookware</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="./categoryPage.php?category_id=2">
                    <div class="card bg-dark text-white">
                        <img src="./assets/images/slide14.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Refrigeration</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="./categoryPage.php?category_id=3">
                    <div class="card bg-dark text-white">
                        <img src="./assets/images/slide8.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Appliances</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="./categoryPage.php?category_id=4">
                    <div class="card bg-dark text-white">
                        <img src="./assets/images/slide4.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Food Storage</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="productHomePage" class="container pb-4">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="new-arrival-tab" data-toggle="tab" href="#new-arrival" role="tab" aria-controls="new-arrival" aria-selected="true">New Arrival</a>
                <a class="nav-item nav-link" id="best-seller-tab" data-toggle="tab" href="#best-seller" role="tab" aria-controls="best-seller" aria-selected="false">Best Seller</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="new-arrival" role="tabpanel" aria-labelledby="new-arrival-tab">
                <ul class="product">
                    <?php foreach ($newArrival as $product) : ?>
                        <li>
                            <div class="product-item">
                                <div class="product-top">
                                    <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-thumb">
                                        <img src="./upload/<?php echo $product['image'] ?>" alt="">
                                    </a>
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
                <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        <?php if ($new_arrival_current_page > 1 && $new_arrival_total_page > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="homePage.php?page=<?php echo $new_arrival_current_page - 1 ?>" tabindex="-1">Previous</a>
                            </li>
                        <?php } ?>
                        <?php
                        for ($i = 1; $i <= $new_arrival_total_page; $i++) {
                            if ($i == $new_arrival_current_page) { ?>
                                <li class="page-item page-item active"><a class="page-link" href="#"><?php echo $i ?></a></li>
                            <?php } else { ?>
                                <li class="page-item "><a class="page-link" href="homePage.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php }
                        } ?>

                        <?php if ($new_arrival_current_page < $new_arrival_total_page && $new_arrival_total_page > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="homePage.php?page=<?php echo $new_arrival_current_page + 1 ?>">Next</a>
                            </li>
                        <?php } ?>

                    </ul>
                </nav>
            </div>
            <div class="tab-pane fade" id="best-seller" role="tabpanel" aria-labelledby="best-seller-tab">
                <ul class="product">
                    <?php foreach ($bestSeller as $product) : ?>
                        <li>
                            <div class="product-item">
                                <div class="product-top">
                                    <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-thumb">
                                        <img src="./upload/<?php echo $product['image'] ?>" alt="">
                                    </a>
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
                <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        <?php if ($best_seller_current_page > 1 && $best_seller_total_page > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="homePage.php?page=<?php echo $best_seller_current_page - 1 ?>" tabindex="-1">Previous</a>
                            </li>
                        <?php } ?>
                        <?php
                        for ($i = 1; $i <= $best_seller_total_page; $i++) {
                            if ($i == $best_seller_current_page) { ?>
                                <li class="page-item page-item active"><a class="page-link" href="#"><?php echo $i ?></a></li>
                            <?php } else { ?>
                                <li class="page-item "><a class="page-link" href="homePage.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php }
                        } ?>

                        <?php if ($best_seller_current_page < $best_seller_total_page && $best_seller_total_page > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="homePage.php?page=<?php echo $best_seller_current_page + 1 ?>">Next</a>
                            </li>
                        <?php } ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>