<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product_details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://fontawesome.com/icons/truck-fast?f=sharp&s=regular">
    <style>
        .col {
            border: solid black 1px;
        }
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
    .container {
        margin-left: 60px;
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
        $conn = new mysqli('localhost:3307', 'root', 'Tranha350', 'project');
        if ($conn->connect_error) {
            die("ket noi that bai" . $conn->connect_error);
        }
    
    function close($stmt,$conn){
        $stmt->close();
        $conn->close();
    }
    $id = $_GET['id'];
     $result = mysqli_query($conn, "SELECT * FROM product WHERE id = $id ");
    $product = mysqli_fetch_assoc($result);
    
    
    
    ?>
    <div id="wrapper">
        <div >
            <img id="img" src="./img/<?php echo $product['image'] ?>" alt="Nồi chống dính"> <br>
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
 <!-- Code mới phần quantity 1 --><input type="button" name="minus" onclick="Decrease();" value="-"><span><input type="number" name="quantity" id="quantity" value = "1" readonly><input type="button" name="plus" onclick="Increase();" value="+"></span>
                            
                            <input type="submit" name="add" id="submit1" value="Thêm Vào Giỏ Hàng"
                                class="btn btn-outline-warning">
                            <input type="submit" name="submit" id="submit" value="Mua Ngay" class="btn">
                        </div> <br>
                        <div class="form-gruop">
                            <h3>Product Detail</h3> 
                        <label><?php echo $product['description'] ?> <br>
                                </label>
                            
                            
                        </div>
                        <div class="form-gruop">
                            <label for="">Xuất Xứ: <?php echo $product['made_in'] ?></label>
                        </div>
                        <div class="form-gruop">
                            <label for=""><?php echo $product['create_date'] ?></label>
                        </div>
                    </form>

                    <!-- Code mới phần quantity 2 -->
                    <script>
                        var quantity = document.getElementById("quantity");
                        var amount = quantity.value;

                        function Increase()
                        {
                            amount++;
                            quantity.value = amount;
                        }

                        function Decrease()
                        {
                            if (amount > 1)
                            {
                                amount--;
                            }
                            quantity.value = amount;
                        }
                    </script>
                    <!-- Hết -->
                    <?php
                        
                        if (isset($_POST['add']))
                        {
                            $temp = 0;
                            if (isset($_SESSION['cart']))
                            {
                                for ($i = 0; $i < sizeof($_SESSION['cart']); $i++)
                                {
                                    if ($_SESSION['cart'][$i]["id"] == $_POST['id'])
                                    {
                                        $_SESSION['cart'][$i]["quantity"] += 1;
                                        $_SESSION['cart'][$i]["price"] = $_POST['price'] * $_SESSION['cart'][$i]["quantity"];
                                        $temp = 1;
                                        break;
                                    }
                                }
                            }
                            if ($temp == 0)
                            {
                                $_SESSION['cart'][] = array(
                                    "id" => $_POST['id'],
                                    "name" => $_POST['name'],
                                    "img" => $_POST['img'],
                                    "quantity" => $_POST['quantity'],
                                    "price" => $_POST['price'] * $_POST['quantity']);
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--<p class="text-center text-uppercase ">Có Thể Bạn Cũng Thích</p> <br>
    <div class="product-restaurants">
        <div class="row">
        <?php
            $sql = 'SELECT * from product,product_detail where  product.id=product_detail.product_id';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            
              echo '
                                <div class="col">
                                    <a href="productDetail.php?id=' . $row['id'] . '">
                                        <img class="thumbnail" src="./img/cookware/' . $row['image'] . '" alt="">
                                        <table>
                                        <tr rowspan="2">
                                        <div class="title">
                                            <p class ="title2">' . $row['name'] . '</p>
                                        </div>
                                        </tr>
                                        <tr>
                                        <div class="price">
                                            <span>' . $row['price'] . ' VNĐ</span>
                                        </div>
                                        </tr>
                                        
                                        </table>
                                    </a>
                                </div>
                                ';
            }
        }
    

            ?>

        </div>
    </div> -->
    <style>
        .thumnail {
            width: 100px;
            height: 100px;
        }
    </style>

</body>

</html>


<?php
include('footer.php');
?>