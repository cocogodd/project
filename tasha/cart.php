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
                                    session_start();
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
                        '<div class="row border-top border-bottom">
                                <div class="row main align-items-center">
                                    <div class="col-2">
                                    <img class="img-fluid" src="img /' . $_SESSION['cart'][$i]['img'] . '"></div>
                                    <div class="col">
                                        <div class="row">' . $_SESSION['cart'][$i]['name'] . '</div>
                                    </div>
                                    <!-- Update Quantity -->
                                    <div class="col">
                                        <input type="number" class="quantity" value="' . $_SESSION['cart'][$i]['quantity'] . '" id="quantity" readonly>
                                    </div>
                                    <!-- Price -->
                                    <div class="col">' . number_format($_SESSION['cart'][$i]['price']) . ' đ
                                        <!-- Remove Item -->
                                        
                                    </div>
                                </div>
                            </div>';
                    }
                }


                ?>
                <form action="" method="post">
                <div class="back-to-shop"><a href="homePage.php">&leftarrow; Back to shop</a>
                    <span>
                        
                            <input type="submit" class="remove" name="remove" value="Remove all items">
                        
                    </span>
                </div>
                </form>
            </div>
            <?php
            if (isset($_POST['remove'])) {
                unset($_SESSION['cart']);
                header('location:homePage.php');
            }
            ?>

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
                </form>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE:</div>
                    <div class="col text-right"><?php
                                                if (isset($_SESSION['cart'])) {
                                                    $total = 0;
                                                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                                        $total = $total + $_SESSION['cart'][$i]["price"];
                                                    }
                                                    echo number_format($total) . ' đ';
                                                }
                                                ?></div>
                </div>
                <button style="font-size: 15px; font-weight: 600;" class="btn" href="">CHECK OUT</button>
            </div>
        </div>
    </div>
</body>
<?php

?>

</html>