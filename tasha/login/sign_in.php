<?php 
include("sign_in_be.php");
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
                            <h1>Login</h1>

                            <div class="input-field">
                                <input type="text" class="input" name="name" id="name" placeholder="<?php echo isset($errorLogin['name']) ? $errorLogin['name'] : ''; ?>" >
                                <label for="name">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" name="password" id="password" placeholder="<?php echo isset($errorLogin['password']) ? $errorLogin['password'] : ''; ?>">
                                <label for="password">Password</label>
                            </div>
                             <br>
                           
                            <div class="input-field">
                                <input type="submit" class="submit" name="submit" id="submit" value="Sign In">
                            </div>
                            <div class="signup">
                                <span>Have an account? <a href="sign_up.php">Sign Up here</a></span>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
    </form>
</body>

</html>