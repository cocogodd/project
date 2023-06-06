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
        function valid_email($str) {
            return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
        }
        function valid_phone($str){
            return (!preg_match("/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/",$str)) ? FALSE : TRUE ;
        }
        function insertUser($name_i, $pass_i, $email_i, $phone_i, $address_i) {
            $product_id = 0;
            $conn = connect(); 
            $sql = "INSERT INTO user (name, password, email, phone_number, address, role_id) VALUES(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssi", $name, $password, $email, $phone, $address, $role);
            $name = $name_i;
            $password = $pass_i;
            $email = $email_i;
            $phone = $phone_i;
            $address = $address_i;
            $role = 1;
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
        function check_username($username_input){     
            $conn = connect();
            $flag = 0;
            $sql = "SELECT name FROM user WHERE name = ? ";
            $stmt = $conn -> prepare($sql);
            $stmt -> bind_param("s",$name);
            $stmt -> execute();
            $name = $username_input;
            $result = $stmt -> get_result();
            if ($result -> num_rows > 0){
                $flag = 1;
            }
            close($stmt, $conn);
            return $flag;
        }
        function check_email($email_input){     
            $conn = connect();
            $flagg = 0;
            $sql = "SELECT email FROM user WHERE email = ? ";
            $stmt = $conn -> prepare($sql);
            $stmt -> bind_param("s",$email);
            $stmt -> execute();
            $email = $email_input;
            $result = $stmt -> get_result();
            if ($result -> num_rows > 0){
                $flagg = 1;
            }
            close($stmt, $conn);
            return $flagg;
        }
        function check_phone($phone_input){     
            $conn = connect();
            $flag = 0;
            $sql = "SELECT phone_number FROM user WHERE phone_number = ? ";
            $stmt = $conn -> prepare($sql);
            $stmt -> bind_param("s",$phone);
            $stmt -> execute();
            $phone = $phone_input;
            $result = $stmt -> get_result();
            if ($result -> num_rows > 0){
                $flag = 1;
            }
            close($stmt, $conn);
            return $flag;
        }

        $error = array();
        $data = array();
        if (!empty($_POST['submit'])){
            $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
            $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
            $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
            $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
            $data['address'] = isset($_POST['address']) ? $_POST['address'] : '';
            
            if (empty($data['name'])){
                $error['name'] = "Please enter your username.";    
            } else if (check_username($data['name']) === 1){
                $error['username'] = "Account already exist, please enter another account.";
            }
            if (empty($data['password'])){
                $error['password'] = "Please enter your password.";
            }
            if (empty($data['email'])){
                $error['email'] = "Please enter your email.";
            } else if (!valid_email($data['email'])){
                $error['email'] = "Incorrect type, please enter correct email!";
            } else if (check_email($data['email']) === 1){
                $error['email'] = "Email already exist, please enter another email.";
            }
            if (empty($data['phone'])){
                $error['phone'] = "Please enter your phone.";
            } else if (!valid_phone($data['phone'])){
                $error['phone'] = "Incorrect type, please enter correct phone!";
            } else if (check_phone($data['phone']) === 1){
                $error['phone'] = "Phone already exist, please enter another phone.";
            }
            if (empty($data['address'])){
                $error['address'] = "Please enter your address.";
            }
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            if (!$error){
                insertUser($data["name"], $data["password"], $data["email"], $data["phone"], $data["address"] );
                header("location: sign_in.php");
            }
            
        }
    ?>