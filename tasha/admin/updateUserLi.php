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
        require "model/update-user.php";
    ?>
    <form action="" method="post">
        <div class="container" style="border: 1px solid black;">
            <div class="one">
                <div class="update">
                    <h3>Update User information</h3>
                </div>
                <div>
                    <table>
                        <div style="float:left;">
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="name" value="<?php echo isset($user['name']) ? $user['name'] : null; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : null; ?>"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" name="email" value="<?php echo isset($user['email']) ? $user['email'] : null; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Phone number:</td>
                            <td><input type="number" name="phone_number" value="<?php echo isset($user['phone_number']) ? $user['phone_number'] : null; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input type="text" name="address" value="<?php echo isset($user['address']) ? $user['address'] : null; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Role ID:</td>
                            <td>
                                <select name="role_id">
                                    <option value="1" <?php echo $user['role_id'] == 1 ? 'selected' : null ?>>User</option>
                                    <option value="2" <?php echo $user['role_id'] == 2 ? 'selected' : null ?>>Admin</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
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