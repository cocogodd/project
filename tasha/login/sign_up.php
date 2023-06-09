<?php 
include("sign_up_be.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Tasha</title>
</head>


<body>
    <form action="" method="post">
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                <a href="../homePage.php"><img src="../assets/images/logo.png" alt=""></a>
                    <div class="text">
                        <p>Go to the kitchen every day without any worries <i>- Tasha</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <h1>Register</h1>
                        <div class="input-field">
                            <input type="text" class="input" name="name" id="name" placeholder="<?php echo isset($error['name']) ? $error['name'] : ''; ?>">
                            <label for="name">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" name="password" id="password" placeholder="<?php echo isset($error['password']) ? $error['password'] : ''; ?>">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" name="email" id="email" placeholder="<?php echo isset($error['email']) ? $error['email'] : ''; ?>">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" name="phone" id="phone" placeholder="<?php echo isset($error['phone']) ? $error['phone'] : ''; ?>">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" name="address" id="address" placeholder="<?php echo isset($error['address']) ? $error['address'] : ''; ?>">
                            <label for="address">Address</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" name="submit" id="submit" value="Sign Up">                          
                        </div>
                        <div class="signup">
                        <span><a href="sign_in.php">Sign In here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>
