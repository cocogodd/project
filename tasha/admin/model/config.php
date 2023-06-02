<?php
    function connect() {
        $con = mysqli_connect('localhost:3307', 'root', '12345678', 'project');
        return $con;
    }

    $conn = connect();
    session_start();

    date_default_timezone_set("Asia/Ho_Chi_Minh");

    if(isset($_POST['productLi'])) {  
        header('location: productLi.php');
    }

    if(isset($_POST['userLi'])) {  
        header('location: userLi.php');
    }

    if(isset($_POST['orderLi'])) {  
        header('location: orderLi.php');
    }

    if(isset($_POST['addProduct'])) {  
        header('location: addProduct.php');
    }

?>