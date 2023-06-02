<?php

    if (isset($_POST['add'])) {
        $sql = "INSERT INTO product (name, price, image, quantity, description, discount, made_in, categories_type_id, create_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisissiis", $name, $price, $image, $quantity, $description, $discount, $made_in, $categories_type_id, $create_date);
        
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $discount = $_POST['discount'];
        $made_in = $_POST['made'];
        $categories_type_id = $_POST['category'];
        $create_date = date('Y-m-d');
        if ($stmt->execute()) {
            header('location:productLi.php');
        }
        $stmt->close();
    }

?>