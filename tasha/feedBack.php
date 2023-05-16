<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./login/style.css">
    <title>Feedback</title>
</head>


<body>
    <form action="" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">
                        <a href="./homePage.php"><img src="./assets/images/logo.png" alt=""></a>
                        <div class="text">
                            <p>Go to the kitchen every day without any worries <i>- Tasha</i></p>
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <div class="input-box">
                            <h1>Feedback</h1>
                            <div class="input-field">
                                <input type="text" class="input" name="username" required>
                                <label for="name">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="email" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="phone_number" required>
                                <label for="phone">Phone</label>
                            </div>
                            <div class="input-field">
                                <textarea type="text" class="input" style="height:auto" name="message" rows="6" cols="50" required></textarea>
                                <label for="message">Message</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" name="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    function connect()
    {
        $conn = new mysqli('localhost', 'root', '12345678', 'project');
        if ($conn->connect_error) {
            die('Kết nối thất bại' . $conn->connect_error);
        }
        return $conn;
    }
    $conn = connect();
    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO feedbacks(username,email,message,phone_number,create_date) values(?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssss', $username, $email, $message, $phone_number, $create_date);
        $currentDate = date('Y-m-d');
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $message = $_POST['message'];
        $create_date = $currentDate;
        if ($stmt->execute()) {
            echo '<script type="text/javascript">
            alert("Success");
            window.location = "homePage.php";
            </script>';
        } else {
            echo '<script type="text/javascript">
            alert("Feed Back Error");
            </script>';
        }
        $stmt->close();
        $conn->close();
        exit;
    }


    ?>
</body>

</html>