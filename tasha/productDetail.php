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
<style>
    #wrapper {
        display: flex;
    }

    #img {
        margin-top: 10%;
        margin-left: 40%;
        width: 500px;
        height: 400px;
        margin-bottom: 30%;

    }



    #price {
        color: #F75813;
        font-size: 170%;
    }

    #submit {
        background: #F75813;
        color: white;
        width: 200px;
        height: 50px;
    }

    #submit1 {
        color: #F75813;
        background: #FFEEE8;
        width: 200px;
        height: 50px;
    }
    #submit1:hover a{
        color: #F75813;
    }
    #free {
        font-size: 110%;
    }

    #quantity {
        width: 200px;
        height: 35px;
    }
</style>
</head>

<body>
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
    $result = mysqli_query($conn, "SELECT * FROM product WHERE id = $id ");
    $product = mysqli_fetch_assoc($result);

    $user;
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    } else {
        $user = null;
    }

    ?>
    <div id="wrapper">
        <div>
            <img id="img" src="./upload/<?php echo $product['image'] ?>" alt="Nồi chống dính"> <br>
        </div>
        <div class="container p-4 ">
            <div class="row justify-content-around ">
                <div class="col-md-6">
                    <form action="" method="post">
                        <h1><?php echo $product['name'] ?></h1>
                        <div class="form-gruop" id="price">
                            <label for="price"> <?php echo $product['price'] ?> VND</label>
                        </div>
                        <br>
                        <div class="form-gruop">
                            <input type="number" name="id" value="<?php echo $product['id']; ?>" hidden>
                            <input type="text" name="img" value="<?php echo $product['image']; ?>" hidden>
                            <input type="text" name="name" value="<?php echo $product['name']; ?>" hidden>
                            <input type="number" name="price" value="<?php echo $product['price']; ?>" hidden>
                            <!-- Code mới phần quantity 1 --><input type="button" name="minus" onclick="Decrease();" value="-"><span><input type="number" name="quantity" id="quantity" value="1" readonly><input type="button" name="plus" onclick="Increase();" value="+"></span>
                            <?php if ($user) { ?>
                                <input type="submit" name="add" id="submit1" class="btn btn-outline-warning" value="Add To Cart">
                            <?php } else { ?>
                                <button id="submit1" class="btn btn-outline-warning" >
                                    <a href="login/sign_in.php">Add To Cart</a>
                                </button>
                            <?php } ?>

                            <?php if ($user) { ?>
                                <input type="submit" name="submit" id="submit" value="Buy Now" class="btn">
                            <?php } else { ?>
                                <button id="submit" class="btn">
                                    <a style="color: #fff" href="login/sign_in.php">Buy Now</a>
                                </button>
                            <?php } ?>
                            
                        </div> <br>
                        <div class="form-gruop">
                            <h3>Product Detail</h3>
                            <label><?php echo $product['description'] ?> <br>
                            </label>


                        </div>
                        <div class="form-gruop">
                            <label for="">Origin: <?php echo $product['made_in'] ?></label>
                        </div>
                        <div class="form-gruop">
                            <label for=""><?php echo $product['create_date'] ?></label>
                        </div>
                    </form>

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
                            <a href="productDetail.php?id=<?php echo $product['id'] ?>" class="product-name"><?= mysubstr($product['name'], 10) ?></a><br>
                            <div class="product-price">$<?= $product['price'] ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                <?php if ($best_seller_current_page > 1 && $best_seller_total_page > 1) { ?>
                    <li class="page-item">
                        <a class="page-link" href="productDetail.php?id=<?php echo $id ?>&page=<?php echo $best_seller_current_page - 1 ?>" tabindex="-1">Previous</a>
                    </li>
                <?php } ?>
                <?php
                for ($i = 1; $i <= $best_seller_total_page; $i++) {
                    if ($i == $best_seller_current_page) { ?>
                        <li class="page-item page-item active"><a class="page-link" href="#"><?php echo $i ?></a></li>
                    <?php } else { ?>
                        <li class="page-item "><a class="page-link" href="productDetail.php?id=<?php echo $id ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php }
                } ?>

                <?php if ($best_seller_current_page < $best_seller_total_page && $best_seller_total_page > 1) { ?>
                    <li class="page-item">
                        <a class="page-link" href="productDetail.php?id=<?php echo $id ?>&page=<?php echo $best_seller_current_page + 1 ?>">Next</a>
                    </li>
                <?php } ?>

            </ul>
        </nav>
    </div>



    <?php
    include('footer.php');
    ?>