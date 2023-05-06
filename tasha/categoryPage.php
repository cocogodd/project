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
                <img src="./upload/<?php echo $product['image']?>" alt="">
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
                <img src="./upload/<?php echo $product['image']?>" alt="">
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