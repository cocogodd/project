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
        require "model/add-product.php";
    ?>
    <form action="" method="post">
        <div class="container" style="border: 1px solid black;">
            <div class="one">
                <div class="update">
                    <h3>Update Items information</h3>
                </div>
                <div>
                    <table>
                        <div style="float:left;">
                        <tr>
                            <td>Items name:</td>
                            <td><input type="text" name="name" required></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><input type="number" name="price" required></td>
                        </tr>
                        <tr>
                            <td>Image:</td>
                            <td><input type="text" name="image" required></td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td><input type="number" name="quantity" required></td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td><input type="text" name="description" required></td>
                        </tr>
                        <tr>
                            <td>Discount:</td>
                            <td><input type="number" name="discount"></td>
                        </tr>
                        <tr>
                            <td>Made in:</td>
                            <td><input type="text" name="made" required></td>
                        </tr>
                        <tr>
                            <td>Category:</td>
                            <td><input type="text" name="category" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="add" name="add">
                            <input type="submit" value="cancel" name="cancel"></td>
                        </tr>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </form>
</body>

</html>