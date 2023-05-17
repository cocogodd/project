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
        $conn = new mysqli('localhost:3306', 'root', '12345678', 'project');
        if ($conn->connect_error) {
            die('Kết nối thất bại' . $conn->connect_error);
        }
        return $conn;
    }
}

$conn = connect(); ?>
<?php
$limit = 10;
$best_seller_total_record = $conn->query(
    'SELECT count(id) as total from product
    where product.discount >= 20
    '
)
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
      where product.discount >= 20
        LIMIT $best_seller_start, $limit
        ");
?>

<?php
    $conn = new mysqli('localhost', 'root', '12345678', 'project');
    if ($conn->connect_error) {
        die("ket noi that bai" . $conn->connect_error);
    }

    function close($stmt, $conn)
    {
        $stmt->close();
        $conn->close();
    }
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT product.id as id, product.image as image, product.name as name, product.price as price, product.description as description, nation.country as made_in, product.create_date as create_date 
    FROM product join nation on  product.made_in = nation.id and   product.id =" . $id);
    $product = mysqli_fetch_assoc($result);

    $user;
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    } else {
        $user = null;
    }

    ?>
<style>
.flex-box {
    display: flex;
    width: 1000px;
    margin-top: 30px;
    margin-left: 20%;
    margin-bottom: 5%;
}

.left {
    width: 45%;
}

.big-img {
    margin-top: 30px;
    width: 250px;
}

.big-img img {
    width: 400px;
    height: 400px;
}

.pname {
    font-size: 30px;
    font-weight: 600;

}

.ratings {
    color: rgb(255, 136, 0);
}

.price {
    font-size: 25px;
    font-weight: 500;
    margin: 10px 0;
    color: #F75813;
}

.color {
    display: flex;
    align-items: center;
}

.color p {
    font-size: 18px;
    font-weight: 500;
    margin: 20px 0;
}

.pcolor {
    border-radius: 5px;
    border: 1px solid black;
    width: 80px;
    height: 30px;
    color: black;
    text-align: center;
    margin: 0 10px;

}

.pcolor:hover,
.selected {
    border-color: #F75813;
    color: #F75813;
}

.quantity {
    display: flex;

}

.quantity p {
    font-size: 18px;
    font-weight: 500;
}

.origin p {
    font-size: 18px;
    font-weight: 500;
    margin-top: 10px;
}

.date p {
    font-size: 16px;
    font-weight: 500;
}

.quantity input {
    width: 30px;
    height: 25px;
    font-size: 17px;
    font-weight: 500;
    text-align: center;

}

.btn-box {
    display: flex;
    margin: 10px 0;
}

.btn-box input, button{
    font-size: 18px;
    padding: 8px 25px;
    border: none;
    outline: none;
    border-radius: 5px;
    cursor: pointer;
}

#submit1 {
    background-color: #FFEEE8;
    color: #F75813;
    margin-right: 10px;
    border-color: #F75813;
}

#submit {
    background-color: #F75813;
    color: white;
}

h4 {
    margin: 20px 0;
}


/* quantity */
.buttons_added {
    opacity: 1;
    display: inline-block;
    display: -ms-inline-flexbox;
    display: inline-flex;
    white-space: nowrap;
    vertical-align: top;
    margin-left: 10px;
}

.is-form {
    overflow: hidden;
    position: relative;
    background-color: #f9f9f9;
    height: 2.2rem;
    width: 1.9rem;
    padding: 0;
    text-shadow: 1px 1px 1px #fff;
    border: 1px solid #ddd;
}

.is-form:focus,
.input-text:focus {
    outline: none;
}

.is-form.minus {
    border-radius: 4px 0 0 4px;
}

.is-form.plus {
    border-radius: 0 4px 4px 0;
}

.input-qty {
    background-color: #fff;
    height: 2.2rem;
    text-align: center;
    font-size: 1rem;
    display: inline-block;
    vertical-align: top;
    margin: 0;
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    border-left: 0;
    border-right: 0;
    padding: 0;
}

.input-qty::-webkit-outer-spin-button,
.input-qty::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
<form action="" method="post">
    <div class="flex-box">
        <div class="left">
            <div class="big-img">
                <img src="./upload/<?php echo $product['image'] ?>" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="right">
                <div class="pname"><?php echo $product['name'] ?></div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"><?= $english_format_number= number_format($product['price']) ?> VND</div>
                <div class="color">
                    <p>Color: </p>
                    <div class="pcolor">Green</div>
                    <div class="pcolor">Blue</div>
                    <div class="pcolor">Pink</div> <br>
                    <div class="pcolor">Black</div>
                    <div class="pcolor">white</div>
                    <div class="pcolor">Brown</div>
                </div>
                <div class="quantity">
                    <p>Quantity: </p>
                    <div>
                        <input type="number" name="id" value="<?php echo $product['id']; ?>" hidden>
                        <input type="text" name="img" value="<?php echo $product['image']; ?>" hidden>
                        <input type="text" name="name" value="<?php echo $product['name']; ?>" hidden>
                        <input type="number" name="price" value="<?php echo $product['price']; ?>" hidden>
                        <!-- Code mới phần quantity 1 -->
                        <div class="buttons_added">
                            <input type="button" name="minus" onclick="Decrease();" value="-" class="minus is-form">

                            <input aria-label="quantity" class="input-qty" type="number" name="quantity" id="quantity"
                                value="1" readonly>
                            <input class="plus is-form" type="button" name="plus" onclick="Increase();" value="+">

                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <?php if ($user) { ?>
                            <input type="submit" name="add" id="submit1" value="Add To Cart">
                    <?php } else { ?>
                    <button id="submit1">
                        <a href="login/sign_in.php">Add To Cart</a>
                    </button>
                    <?php } ?>
                    <?php if ($user) { ?>
                            <input type="submit" name="submit" id="submit" value="Buy Now">
                    <?php } else { ?>
                    <button id="submit" >
                        <a style="color: #fff" href="login/sign_in.php">Buy Now</a>
                    </button>
                    <?php } ?>
                </div>

                <div class="description">
                    <h4>Product Detail</h4>
                    <div><?php echo $product['description'] ?></div>
                </div>
                <div class="origin">
                    <p>origin: <?php echo $product['made_in'] ?></p>

                </div>
                <div class="date">
                    <p>Create Date: <?php echo $product['create_date'] ?></p>

                </div>
            </div>
        </div>
    </div>
</form>
<script>
var button = document.getElementsByClassName("pcolor");

var addSelectClass = function() {
    removeSelectClass();
    this.classList.add('selected');
}

var removeSelectClass = function() {
    for (var i = 0; i < button.length; i++) {
        button[i].classList.remove('selected')
    }
}

for (var i = 0; i < button.length; i++) {
    button[i].addEventListener("click", addSelectClass);
}
</script>

<!-- Code mới phần quantity 2 -->
<script>
var quantity = document.getElementById("quantity");
var amount = quantity.value;

function Increase() {
    amount++;
    quantity.value = amount;
}

function Decrease() {
    if (amount > 1) {
        amount--;
    }
    quantity.value = amount;
}
</script>
<!-- Hết -->
<?php

                    if (isset($_POST['add'])) {
                        $temp = 0;
                        if (isset($_SESSION['cart'])) {
                            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                if ($_SESSION['cart'][$i]["id"] == $_POST['id']) {
                                    $_SESSION['cart'][$i]["quantity"] += 1;
                                    $_SESSION['cart'][$i]["price"] = $_POST['price'] * $_SESSION['cart'][$i]["quantity"];
                                    $temp = 1;
                                    break;
                                }
                            }
                        }
                        if ($temp == 0) {
                            $_SESSION['cart'][] = array(
                                "id" => $_POST['id'],
                                "name" => $_POST['name'],
                                "img" => $_POST['img'],
                                "quantity" => $_POST['quantity'],
                                "price" => $_POST['price'] * $_POST['quantity']
                            );
                        }
                    }
                    ?>
</div>
</div>
</div>
</div>
<p class="text-center text-uppercase ">You may also like</p> <br>
<div class="container">
    <div class="row product ">
        <?php foreach ($bestSeller as $product) : ?>
        <div class="col col-lg-5 col-md-4 col-sm-6">
            <div class="product-item">
                <div class="product-top">
                    <a href="productDetail.php?id=<?php echo $product['id'] ?>">
                        <img src="./upload/<?php echo $product['image'] ?>" alt="">
                    </a>

                </div>
                <div class="product-infor">
                    <a href="categoryPage.php?category_id=<?php echo $product['category_id'] ?>" class="product-cart">
                        <?= $product['menu_name'] ?></a><br>
                    <a href="productDetail.php?id=<?php echo $product['id'] ?>"
                        class="product-name"><?= mysubstr($product['name'], 23) ?></a><br>
                    <div class="product-price"><?= $english_format_number= number_format($product['price']) ?> VND</div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <nav aria-label="...">
        <ul class="pagination justify-content-center">
            <?php if ($best_seller_current_page > 1 && $best_seller_total_page > 1) { ?>
            <li class="page-item">
                <a class="page-link"
                    href="productDetail.php?id=<?php echo $id ?>&page=<?php echo $best_seller_current_page - 1 ?>"
                    tabindex="-1">Previous</a>
            </li>
            <?php } ?>
            <?php
                for ($i = 1; $i <= $best_seller_total_page; $i++) {
                    if ($i == $best_seller_current_page) { ?>
            <li class="page-item page-item active"><a class="page-link" href="#"><?php echo $i ?></a></li>
            <?php } else { ?>
            <li class="page-item "><a class="page-link"
                    href="productDetail.php?id=<?php echo $id ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php }
                } ?>

            <?php if ($best_seller_current_page < $best_seller_total_page && $best_seller_total_page > 1) { ?>
            <li class="page-item">
                <a class="page-link"
                    href="productDetail.php?id=<?php echo $id ?>&page=<?php echo $best_seller_current_page + 1 ?>">Next</a>
            </li>
            <?php } ?>

        </ul>
    </nav>
</div>



<?php
    include('footer.php');
    ?>