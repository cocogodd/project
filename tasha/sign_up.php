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
        <div class="container">
            <div class="row justify-content-around">
                <form action="" method="post" class="col-md-5 bg-light p-3 my-5" id="signin">
                        <h1 class="text-center text-uppercase h3 py-3">Register</h1>
                      <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="name" id="name" value="" required class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" value="" required class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="" required class="form-control"> 
                            </div>
                     <div class="form-group">
                           <label for="phone">Phone</label>
                            <input type="number" name="phone" id="phone" value="" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                             <input type="text" name="address" id="address" value="" class="form-control">
                        </div> 
                        <div class="form-group py-3">        
                            <input type="submit" name="submit" id="submit" value="Sign Up" class="form-control btn-primary btn " >  
                        </div>                                         
                </form>
            </div>
        </div>
    </div>

    <?php 
     function connect() {
        $conn = new mysqli('localhost:3306','root','12345678','project');
    if($conn->connect_error) {
        die("ket noi that bai" .$conn->connect_error);
    }
    return $conn;
    }
    function close($stmt,$conn){
        $stmt->close();
        $conn->close();
    }
    function insertUser($name_i, $pass_i, $email_i, $phone_i, $address_i) {
        $product_id = 0;
        $conn = connect(); 
        $sql = "INSERT INTO user (name, password, email, phone_number, address) VALUES(?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $password, $email, $phone, $address);
        $name = $name_i;
        $password = $pass_i;
        $email = $email_i;
        $phone = $phone_i;
        $address = $address_i;
        if($stmt->execute() === TRUE) {
            $last_id = $conn->insert_id;
            $product_id = $last_id;
            header("location: sign_in.php");
        }else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        close($stmt, $conn);
        return $product_id;
    }
    if(isset($_POST["submit"])) {
        insertUser($_POST["name"], $_POST["password"], $_POST["email"], $_POST["phone"], $_POST["address"] );
        header("location: sign_in.php");
    }
   
        
    
    ?>
</body>

</html>