<?php
    $sql = "SELECT * FROM product WHERE id = " . $_GET['id'];
    $result = mysqli_query(connect(), $sql);
    if (mysqli_num_rows($result) == 1) {
        $product = mysqli_fetch_assoc($result);
    }
    else {
        header('location:productLi.php');
    }

    if (isset($_POST['update'])) {
        $sql = "UPDATE product SET name = '" . $_POST['name'] . "',
                price = " . $_POST['price'] . ",
                image = '" . $_POST['image'] . "',
                quantity = " . $_POST['quantity'] . ",
                description = '" . $_POST['description'] . "',
                discount = '" . $_POST['discount'] . "',
                made_in = " . $_POST['made'] . ",
                categories_type_id = " . $_POST['category'] . "
                WHERE id = " . $_GET['id'];
        Connect()->query($sql);
        header('location:productLi.php');
    }

    if (isset($_POST['delete'])) {
        Connect()->query("DELETE FROM product WHERE id = " . $_GET['id']);
        header('location:productLi.php');
    }
?>