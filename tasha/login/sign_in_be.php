<?php 
    session_start();
    unset($_SESSION['user']);
     $conn = new mysqli('localhost:3306','root','12345678','project');
     if($conn->connect_error) {
         die("ket noi that bai" .$conn->connect_error);
     }
     $sql = "SELECT name, password from user";
            $result = $conn->query($sql);

    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $password = $_POST["password"];
        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($name != $row['name']) {
                    $user = "Username does not exist";
                } else if (!password_verify($_POST['password'], $row['password'])) {

                    $pass = "You entered wrong password";
                }
                if ($name == $row['name'] && password_verify($_POST['password'], $row['password'])){
                    $_SESSION["user"] = $name;
                    header("Location: ../homePage.php");
                }
                
            }
        }
    }
    $conn->close();
   
    ?>