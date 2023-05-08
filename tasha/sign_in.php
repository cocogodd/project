

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tasha</title>
    <style>
        body {
            background: #e3e5bb5d;
        }
    #submit {
        background: #F75813;

    }
    
    #login a:hover {
        color: #F75813;
    }
    img {
        width: 300px;
        height: 200px;
        margin-top: 50%;
        margin-left: 40%;
    }
    #wrapper {
        display: flex;
    }
   #signin {
    box-shadow: 0 40px 80px 0 rgb(203, 208, 209), 0 6px 20px 0  rgb(203, 208, 209);
   }
    </style>
</head>

<body>
   
<div id="wrapper">
<div> 
    <img src="./assets/images/logo.png" alt="logo" >
   </div> 
    <div class="container p-5 ">
        <div class="row justify-content-around ">
            <div class="col-md-4">
                <form action="" method="post" class=" bg-light p-3 my-3" id="signin">
                        <h1 class="text-center text-uppercase h3 py-3">Login</h1>
                        <div class="form-gruop">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="" class="form-control">
                        </div>
                        <div class="form-gruop">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" value="" class="form-control">
                        </div>
                        <div class="form-gruop py-2">
                            <input type="submit" name="submit" id="submit" value="Sign_in"
                                class="form-control btn-primary">
                        </div>
                        <button type="button" class=" form-control btn btn-link" id="login"><a
                                href="sign_up.php">Sign_up</a></button>
                </form>
            </div>
        </div>
    </div>
</div>
   
</body>
</html>
<?php 
     $conn = new mysqli('localhost:3306','root','12345678','project');
     if($conn->connect_error) {
         die("ket noi that bai" .$conn->connect_error);
     }
     $sql = "SELECT name, password from user";
            $result = $conn->query($sql);

    if(isset($_POST["submit"])) {
        $name = $_POST["username"];
        $password = $_POST["password"];
        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($name != $row['name']) {

                    echo '<script>alert("Khong tồn tại user này")</script>';
                } else if ($password != $row['password']) {

                    echo '<script>alert("Sai password")</script>';
                }
                if ($name == $row['name'] && $password == $row['password']) {

                    header("Location: homePage.php");
                }
                
            }
        }
    }
    $conn->close();
   
    ?>
