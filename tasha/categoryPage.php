<style>
  * {
    padding: 0;
    margin: 0;
  }

  .headline {
    text-align: center;
    margin: 40px 0px;
  }

  h3 {
    font-size: 18px;
    padding: 10px 20px;
    border: 1px solid black;
    display: inline-block;
  }

  ul.product {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  ul.product li {
    flex-basis: 20%;
    padding-left: 15px;
    padding-right: 15px;
    box-sizing: border-box;
    margin-bottom: 30px;
  }

  /* chỉnh ảnh về 1 kích thước */
  ul.product li img {
    max-width: 100%;
    height: auto;
    width: 100%;
  }

  ul.product li .product-top {
    position: relative;
    overflow: hidden;
  }

  ul.product li .product-top a.product-thumb {
    display: block;
  }

  ul.product li:hover .product-top .product-thumb img {
    filter: opacity(80%);
  }

  ul.product li .product-top a.buy-now {
    color: #e9e9e9;
    text-transform: uppercase;
    text-align: center;
    text-decoration: none;
    display: block;
    background-color: orange;
    padding: 6px 0px;
    position: absolute;
    width: 100%;
    bottom: -36px;
    transition: 0.25s ease-in-out;
    opacity: 0.85;
  }

  ul.product li:hover a.buy-now {
    bottom: 0px;
  }

  ul.product li .product-infor {
    padding: 10px 0px;
  }

  ul.product li .product-infor a {
    text-decoration: none;
  }

  ul.product li .product-infor a.product-cart {
    font-size: 11px;
    text-transform: uppercase;
    color: #9e9e9e;
    padding: 3px 0px;
  }

  ul.product li .product-infor a.product-name {
    padding: 3px 0px;
    color: #334862;

  }

  ul.product li .product-infor .product-price {
    color: #111;
    font-weight: 600;
  }
</style>


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
<div class="container">
  <?php
  if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $products_category = $conn->query("SELECT product.*,categories.menu_name,categories.id as category_id from product
      join categories_type on categories_type.id=product.categories_type_id
      join categories on categories.id=categories_type.Categories_id 
      where  categories_type.Categories_id=$category_id");
    $result = $conn->query("SELECT menu_name from categories where id=$category_id");
    $title = $result->fetch_row()[0];
  ?>
    <div class="headline">
      <h3><?= $title ?></h3>
    </div>
    <ul class="product">
      <?php foreach ($products_category as $product) : ?>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-thumb">
                <img src="./assets/images/slide1.jpg" alt="">
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
  <?php } ?>

  <?php
  if (isset($_GET['category_type_id'])) {
    $category_type_id = $_GET['category_type_id'];
    $products_category_type = $conn->query("SELECT product.*,categories.menu_name,categories.id as category_id from product
      join categories_type on categories_type.id=product.categories_type_id
      join categories on categories.id=categories_type.Categories_id 
      where  product.categories_type_id=$category_type_id");
    $result = $conn->query("SELECT category_name from categories_type where id=$category_type_id");
    $title = $result->fetch_row()[0];
  ?>
    <div class="headline">
      <h3><?= $title ?></h3>
    </div>
    <ul class="product">
      <?php foreach ($products_category_type as $product) : ?>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-thumb">
                <img src="./assets/images/slide1.jpg" alt="">
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
  <?php } ?>
</div>
<?php
include('footer.php');
?>