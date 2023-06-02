<?php
    $sql = "SELECT * FROM user WHERE id = " . $_GET['id'];
    $result = mysqli_query(connect(), $sql);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    }
    else {
        header('location:userLi.php');
    }

    if (isset($_POST['update'])) {
        if (empty($_POST['password'])) {
            $sql = "UPDATE user SET name = '" . $_POST['name'] . "',
                email = '" . $_POST['email'] . "',
                phone_number = '" . $_POST['phone_number'] . "',
                address = '" . $_POST['address'] . "',
                role_id = " . $_POST['role_id'] . "
                WHERE id = " . $_GET['id'];
        }
        else {
            $sql = "UPDATE user SET name = '" . $_POST['name'] . "',
                    password = '" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "',
                    email = '" . $_POST['email'] . "',
                    phone_number = '" . $_POST['phone_number'] . "',
                    address = '" . $_POST['address'] . "',
                    role_id = " . $_POST['role_id'] . "
                    WHERE id = " . $_GET['id'];
        }
        Connect()->query($sql);
        header('location:userLi.php');
    }

    if (isset($_POST['delete'])) {
        Connect()->query("DELETE FROM user WHERE id = " . $_GET['id']);
        header('location:userLi.php');
    }
?>