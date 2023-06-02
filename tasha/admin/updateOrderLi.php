<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>

    <style>



    </style>
</head>

<body>
    <?php
        require "model/config.php";
        require "model/update-order.php";
    ?>
    <form action="" method="post">
        <div class="container" style="border: 1px solid black;">
            <div class="one">
                <div class="update">
                    <h3>Update Order information</h3>
                </div>
                <div>
                    <table>
                        <div style="float:left;">
                        <tr>
                            <td>User:</td>
                            <td><input type="text" name="user" value="<?php echo isset($order['user']) ? $order['user'] : null; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Product name:</td>
                            <td><input type="text" name="product_name" value="<?php echo isset($order['product_name']) ? $order['product_name'] : null; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Total price:</td>
                            <td><input type="text" name="total_price" value="<?php echo isset($order['total_price']) ? $order['total_price'] : null; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input type="text" name="address" value="<?php echo isset($order['address']) ? $order['address'] : null; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Order date:</td>
                            <td><input type="text" name="order_date" value="<?php echo isset($order['order_date']) ? $order['order_date'] : null; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td><input type="text" name="status" value="<?php echo isset($order['status']) ? $order['status'] : null; ?>" required></td>
                        </tr>
                            <td></td>
                            <td><input type="submit" value="update" name="update">
                            <input type="submit" value="delete" name="delete"></td>
                        </tr>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </form>
</body>

</html>