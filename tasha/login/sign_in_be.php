<?php 
 session_start();
 unset($_SESSION['user']);
   function connect() {
     $conn = new mysqli('localhost:3306','root','12345678','project');
     if($conn->connect_error) {
         die("ket noi that bai" .$conn->connect_error);
     }
     return $conn;
    }
    function close($stmt,$conn) {
        $stmt->close();
        $conn->close();
    }

    function check_user($username_input){     
        $conn = connect();
        $sql = "SELECT name, password, role_id FROM user WHERE name = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$username);
        $username = $username_input;
        $stmt -> execute();
        $result = $stmt -> get_result();       
        close($stmt,$conn);
        return $result;
    }
    $dataLogin = array();
    $errorLogin = array();
    $flag = 0;
    if (!empty($_POST['submit'])){
        $dataLogin['name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $dataLogin['password'] = isset($_POST['password']) ? $_POST['password'] : '';
        $resultCheckUser = check_user($dataLogin['name']);
        if($resultCheckUser->num_rows>0){
            while($rowCheckUser = $resultCheckUser->fetch_assoc()){
                if (empty($dataLogin['password'])){
                    $errorLogin['password'] = "Please enter your password.";
                }else if (!password_verify($dataLogin['password'], $rowCheckUser['password'])){
                    $errorLogin['password'] = "The password is wrong!";
                } else if ($rowCheckUser['role_id'] == 1){
                    $flag = 1;
                }
            }
        } else {
            if (empty($dataLogin['password'])){
                $errorLogin['password'] = "Please enter your password.";
            }
            if (empty($dataLogin['name'])){
                $errorLogin['name'] = "Please enter your username.";
            } else{
                $errorLogin['name'] = "This user does not exist!";
            }
        }
        if (!$errorLogin){
            $conn = connect();
            $result = mysqli_query($conn, "SELECT * FROM user WHERE name = '" . $dataLogin['name'] . "'");
            $users = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $dataLogin['name'];
            $_SESSION['role'] = $users['role_id'];
            if ($_SESSION['role'] == 1) {
                header("location:../homePage.php");
            }
            else {
                header("location:../admin/productLi.php");
            }
        } 
    }