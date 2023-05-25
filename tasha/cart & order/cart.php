<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="cart.css">
</head>

<body>
<?php
$conn = new mysqli('localhost:3307','root','12345678','project');
if($conn->connect_error) {
    die("ket noi that bai" .$conn->connect_error);
}

session_start();
if (isset($_POST['delete'])) {
    if (isset($_SESSION['cart']))
    {
        for ($i = $_POST['index']; $i < sizeof($_SESSION['cart']); $i++)
        {
            $_SESSION['cart'][$i] = $_SESSION['cart'][$i+1];
        }
        unset($_SESSION['cart'][sizeof($_SESSION['cart']) - 1]);
    }
    header('location:cart.php');
}

if (isset($_POST['order'])) {
    if (isset($_SESSION['cart'])) {
        $sql = "INSERT INTO project.order (user, product_name, total_price, address, order_date, status) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $user, $product_name, $total_price, $address, $order_date, $status);
        $user = $_SESSION['user'];
        $product_name = $_POST['name'];
        $total_price = $_POST['price'];
        $address = $_POST['address'];
        $order_date = date('Y-m-d H:i:s');
        $status = 'On Delivery';
        if ($stmt->execute() === TRUE) {
            unset($_SESSION['cart']);
        }
        $stmt->close();
    }
    else
    {
        echo '<script>alert("Chưa có sản phẩm nào trong giỏ hàng.")</script>';
    }
}

$total = 0;
$nameProduct = null;
?>
    <div class="card">
        <div class="row">
            <!-- CART LIST -->
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>

                        <!-- TOTAL ITEM IN THE CART -->
                        <div class="col align-self-center text-right text-muted">
                            <span><?php
                                    if (isset($_SESSION['cart'])) {
                                        echo sizeof($_SESSION['cart']);
                                    } else {
                                        echo '0';
                                    }
                                    ?> </span>
                            items
                        </div>

                    </div>

                </div>
                <?php
                if (isset($_SESSION['cart'])) {
                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                        echo
                        '<form action="" method="post" style="padding:0">
                            <div class="row border-top border-bottom">
                                <div class="row main align-items-center">
                                    <div class="col-2">
                                    <img class="img-fluid" src="./upload/' . $_SESSION['cart'][$i]['img'] . '"></div>
                                    <div class="col">
                                        <div class="row">' . $_SESSION['cart'][$i]['name'] . '</div>
                                    </div>
                                    <!-- Update Quantity -->
                                    <div class="col">
                                        <input type="number" name="quantity" class="quantity" value="' . $_SESSION['cart'][$i]['quantity'] . '" id="quantity" readonly>
                                    </div>
                                    <!-- Price -->
                                    <div class="col">' . number_format($_SESSION['cart'][$i]['price']) . ' đ
                                    </div>
                                    <div class="col">
                                        <input type="hidden" name="index" value="' . $i . '">
                                        <button type="submit" name="delete" style="border:none; background:none; padding:0; font-size:12px; color:red;">x</button>
                                    </div>
                                </div>
                            </div>
                        </form>';
                        $nameProduct = $nameProduct . $_SESSION['cart'][$i]['name'] . ' [x'.$_SESSION['cart'][$i]['quantity'].']' . '<br>';
                        $total = $total + $_SESSION['cart'][$i]["price"];
                    }
                }


                ?>
                <div class="back-to-shop" style="display:contents"><a href="homePage.php">&leftarrow; Back to shop</a>
                </div>
            </div>

            <!-- SUMMARY -->
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row">
                    <!-- TOTAL ITEM IN THE CART -->
                    <div class="col" style="padding-left:0;">ITEMS:
                        <?php
                        if (isset($_SESSION['cart']) > 0) {
                            echo sizeof($_SESSION['cart']);
                        } else {
                            echo '';
                        }
                        ?></div>
                    <!-- TOTAL MONEYS -->
                    <div class="col text-right">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $total = 0;
                            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                $total = $total + $_SESSION['cart'][$i]["price"];
                            }
                            echo number_format($total) . ' đ';
                        }
                        ?>
                    </div>
                </div>
                <form action="" method="post">
                    <p>SHIPPING</p>
                    <select name="ship">
                        <option class="text-muted" value="150000">Standard-Delivery- 150.000đ</option>
                        <option class="text-muted" value="300000">Fast-Delivery- 300.000đ</option>
                        <option class="text-muted" value="1550000">Global-Delivery- 1.550.000đ</option>
                    </select>

                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE:</div>
                        <div class="col text-right">
                            <?php
                                echo isset($_SESSION['cart']) ? number_format($total) . ' đ' : null;
                                $result = mysqli_query($conn, "SELECT * FROM user WHERE name = '" . $_SESSION['user'] . "'");
                                $user = mysqli_fetch_assoc($result);
                            ?>
                        </div>
                    </div>
                    <input type="hidden" name="name" value="<?php echo $nameProduct; ?>">
                    <input type="hidden" name="price" value="<?php echo $total; ?>">
                    <input type="hidden" name="address" value="<?php echo $user['address']; ?>">
                    <input type="submit" style="font-size: 15px; font-weight: 600;" name="order" value="CHECKOUT" class="btn">
                </form>
            </div>
        </div>
    </div>
</body>

</html>