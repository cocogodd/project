<?php
include('header.php');
?>
<?php
function mysubstr($str, $limit = 100)
{
  if (strlen($str) <= $limit) return $str;
  return mb_substr($str, 0, $limit - 3, 'UTF-8') . '...';
}
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
<div class="container">
  <?php
  $conn = connect();
  if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $category_total_record = $conn->query("SELECT count(product.id) as total from product
    join categories_type on categories_type.id=product.categories_type_id
    join categories on categories.id=categories_type.Categories_id
    where categories_type.Categories_id=$category_id
    ")->fetch_row()[0];
    $category_current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 15;
    $category_total_page = ceil($category_total_record / $limit);

    if ($category_current_page > $category_total_page) {
      $category_current_page = $category_total_page;
    } else if ($category_current_page < 1) {
      $category_current_page = 1;
    }
    $category_start = ($category_current_page - 1) * $limit;

    $products_category = $conn->query("SELECT product.*,categories.menu_name,categories.id as category_id from product  
      join categories_type on categories_type.id=product.categories_type_id
      join categories on categories.id=categories_type.Categories_id
      where  categories_type.Categories_id=$category_id
      LIMIT $category_start, $limit
      ");
    $result = $conn->query("SELECT menu_name from categories where id=$category_id");
  ?>
  <?php if ($products_category) { ?>
    <div class="headline">
      <h3><?= $result->fetch_row()[0]; ?></h3>
    </div>
    <div class="row product">
        <?php foreach ($products_category as $product) : ?>
        <div class="col col-lg-5 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-top">
              <a href="productDetail.php?id=<?php echo $product['id'] ?>">
                <img src="./upload/<?php echo $product['image'] ?>" alt="">
              </a>
            </div>
            <div class="product-infor">
              <a href="categoryPage.php?category_id=<?php echo $product['category_id'] ?>" class="product-cart"> <?= $product['menu_name'] ?></a><br>
              <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-name"><?= mysubstr($product['name'], 10) ?></a><br>
              <div class="product-price">$<?= $product['price'] ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <nav aria-label="...">
      <ul class="pagination justify-content-center">
        <?php if ($category_current_page > 1 && $category_total_page > 1) { ?>
          <li class="page-item">
            <a class="page-link" href="categoryPage.php?category_id=<?php echo $category_id ?>&page=<?php echo $category_current_page - 1 ?>" tabindex="-1">Previous</a>
          </li>
        <?php } ?>
        <?php
        for ($i = 1; $i <= $category_total_page; $i++) {
          if ($i == $category_current_page) { ?>
            <li class="page-item page-item active"><a class="page-link" href="#"><?php echo $i ?></a></li>
          <?php } else { ?>
            <li class="page-item "><a class="page-link" href="categoryPage.php?category_id=<?php echo $category_id ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php }
        } ?>

        <?php if ($category_current_page < $category_total_page && $category_total_page > 1) { ?>
          <li class="page-item">
            <a class="page-link" href="categoryPage.php?category_id=<?php echo $category_id ?>&page=<?php echo $category_current_page + 1 ?>">Next</a>
          </li>
        <?php } ?>

      </ul>
    </nav>
  <?php } else { ?>
        <div style="height: 100px;" class="p-4 d-flex justify-content-between align-items-center">Not Found</div>
    <?php } ?>
  <?php } ?>

  <?php
  if (isset($_GET['category_type_id'])) {
    $category_type_id = $_GET['category_type_id'];
      $category_type_total_record = $conn->query("SELECT count(product.id) as total from product
      join categories_type on categories_type.id=product.categories_type_id
      join categories on categories.id=categories_type.Categories_id 
      where  product.categories_type_id=$category_type_id
      ")->fetch_row()[0];
      $category_type_current_page = isset($_GET['page']) ? $_GET['page'] : 1;
      $limit = 15;
      $category_type_total_page = ceil($category_type_total_record / $limit);
  
      if ($category_type_current_page > $category_type_total_page) {
        $category_type_current_page = $category_type_total_page;
      } else if ($category_type_current_page < 1) {
        $category_type_current_page = 1;
      }
      $category_type_start = ($category_type_current_page - 1) * $limit;
      $products_category_type = $conn->query("SELECT product.*,categories.menu_name,categories.id as category_id from product  
      join categories_type on categories_type.id=product.categories_type_id
      join categories on categories.id=categories_type.Categories_id 
      where  product.categories_type_id=$category_type_id
      LIMIT $category_type_start, $limit");
    $result = $conn->query("SELECT category_name from categories_type where id=$category_type_id");
  ?>
  <?php if ($products_category_type) { ?>
    <div class="headline">
      <h3><?= $result->fetch_row()[0] ?></h3>
    </div>
    <div class="row product ">
        <?php foreach ($products_category_type as $product) : ?>
        <div class="col col-lg-5 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-top">
              <a href="productDetail.php?id=<?php echo $product['id'] ?>">
                <img src="./upload/<?php echo $product['image'] ?>" alt="">
              </a>

            </div>
            <div class="product-infor">
              <a href="categoryPage.php?category_id=<?php echo $product['category_id'] ?>" class="product-cart"> <?= $product['menu_name'] ?></a><br>
              <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-name"><?= mysubstr($product['name'], 10) ?></a><br>
              <div class="product-price">$<?= $product['price'] ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <nav aria-label="...">
      <ul class="pagination justify-content-center">
        <?php if ($category_type_current_page > 1 && $category_type_total_page > 1) { ?>
          <li class="page-item">
            <a class="page-link" href="categoryPage.php?category_type_id=<?php echo $category_type_id ?>&page=<?php echo $category_type_current_page - 1 ?>" tabindex="-1">Previous</a>
          </li>
        <?php } ?>
        <?php
        for ($i = 1; $i <= $category_type_total_page; $i++) {
          if ($i == $category_type_current_page) { ?>
            <li class="page-item page-item active"><a class="page-link" href="#"><?php echo $i ?></a></li>
          <?php } else { ?>
            <li class="page-item "><a class="page-link" href="categoryPage.php?category_type_id=<?php echo $category_type_id ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php }
        } ?>

        <?php if ($category_type_current_page < $category_type_total_page && $category_type_total_page > 1) { ?>
          <li class="page-item">
            <a class="page-link" href="categoryPage.php?category_type_id=<?php echo $category_type_id ?>&page=<?php echo $category_type_current_page + 1 ?>">Next</a>
          </li>
        <?php } ?>

      </ul>
    </nav>
  <?php } else { ?>
        <div style="height: 100px;" class="p-4 d-flex justify-content-between align-items-center">Not Found</div>
    <?php } ?>
  <?php } ?>
</div>

<?php
include('footer.php');
?>