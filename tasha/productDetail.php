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
        $conn = new mysqli('localhost:3306','root','12345678','project');
    if($conn->connect_error) {
        die("ket noi that bai" .$conn->connect_error);
    }
    
    function close($stmt,$conn){
        $stmt->close();
        $conn->close();
    }
    $id = $_GET['id'];
     $result = mysqli_query($conn, "SELECT * FROM product_detail WHERE id = $id ");
    $product = mysqli_fetch_assoc($result);
    
    
    
    ?>
    <div id="wrapper">
        <div >
            <img id="img" src="./img/cookware/<?php echo $product['image'] ?>" alt="Nồi chống dính"> <br>
        </div>
        <div class="container p-4 ">
            <div class="row justify-content-around ">
                <div class="col-md-6">
                    <form action="" method="post">
                        <h1><?php echo $product['product_name'] ?></h1> 
                        <div class="form-gruop" id="price">
                            <label for="price"> <?php echo $product['price'] ?> VND</label>
                        </div> 
                        <div class="form-gruop" id="free">
                            <label >Vận chuyển: Miễn Phí Vận chuyển</label>    
                        </div>
                        
                        <div class="form-gruop">
                            <label for="quantity" id="free">Số Lượng:</label> <br>
                            <input type="number" name="quantity" value="" min="1" id="quantity">
                        </div> <br>
                        <div class="form-gruop">
                            <input type="submit" name="submit" id="submit1" value="Thêm Vào Giỏ Hàng"
                                class="btn btn-outline-warning">
                            <input type="submit" name="submit" id="submit" value="Mua Ngay" class="btn">
                        </div> <br>
                        <div class="form-gruop">
                            <h3>Product Detail</h3> 
                        <label><?php echo $product['description'] ?> <br>
                                <?php echo $product['description'] ?> </label>
                            
                            
                        </div>
                        <div class="form-gruop">
                            <label for="">Xuất Xứ: <?php echo $product['create_by'] ?></label>
                        </div>
                        <div class="form-gruop">
                            <label for=""><?php echo $product['create_date'] ?></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center text-uppercase ">Có Thể Bạn Cũng Thích</p> <br>
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
    </div>
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