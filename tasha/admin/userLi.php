<?php
    if(isset($_POST['productLi'])) {  
        header('location: productLi.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <?php
        require "model/config.php";
        require "model/select-user.php";
    ?>
    <form action="" method="post">
        <div class="header">
            <input class="navli" name="productLi" type="submit" value="Product list">
            <input class="navli" name="userLi" type="submit" value="User list">
            <input class="navli" name="orderLi" type="submit" value="Order list">
            <input class="navli" type="submit" name="addProduct" value="Add Product">

            </table>
        </div>
        <div class="container">
            <div class="list">
                <table>
                    <tr class="rows">
                        <td>Username</td>
                        <td>Email</td>
                        <td>Phone number</td>
                        <td>Address</td>
                        <td>Change information</td>
                        <td>Role</td>
                    </tr>
                    <?php SelectUser(); ?>
                </table>

            </div>
        </div>
    </form>
</body>
</html>