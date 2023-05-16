<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./login/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Feedback</title>
    <style>
        .map img {
            position: unset !important;
        }

        iframe,
        .tab-pane {
            width: 100%;
            height: 100%;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: unset;
            color: #F75813;
        }

        .nav-link {
            color: #000;
            font-size: 16px;
            padding: 8px;
        }

        .tab-content {
            height: 400px;
        }

        .text-color i {
            color: #F75813;
            margin-right: 10px;
        }
        .contact-footer i{
            color:#F75813;
        }
    </style>
</head>


<body>
    <form action="" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-7 map">
                        <div class="pt-4 pb-4">
                            <a href="./homePage.php"><img src="./assets/images/logo.png" alt=""></a>
                        </div>
                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="trieu-khuc-tab" data-toggle="pill" href="#trieu-khuc" role="tab" aria-controls="v-pills-home" aria-selected="true">Triều Khúc</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="le-thanh-nghi-tab" data-toggle="pill" href="#le-thanh-nghi" role="tab" aria-controls="v-pills-profile" aria-selected="false">54 Lê Thanh Nghị</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="doi-can-tab" data-toggle="pill" href="#doi-can" role="tab" aria-controls="v-pills-messages" aria-selected="false">16 Đội Cấn</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="fpt-tower-tab" data-toggle="pill" href="#fpt-tower" role="tab" aria-controls="v-pills-settings" aria-selected="false">FPT 10 Phạm Văn Bạch</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="trieu-khuc" role="tabpanel" aria-labelledby="trieu-khuc-tab">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7450.541753670525!2d105.79562539173128!3d20.981776240109713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc3ae37fc47%3A0x607ded9d4d1d1182!2zVHJp4buBdSBLaMO6YywgVMOibiBUcmnhu4F1LCBUaGFuaCBUcsOsLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1681918682315!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="tab-pane fade" id="le-thanh-nghi" role="tabpanel" aria-labelledby="le-thanh-nghi-tab">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7294312625086!2d105.84730827510676!3d21.003480288646593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgUC4gTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1681918743098!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="tab-pane fade" id="doi-can" role="tabpanel" aria-labelledby="doi-can-tab">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.938431134461!2d105.81971747510744!3d21.035149387559365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0cea14480f%3A0xe3f91377915ccbe6!2zMTYgxJDhu5lpIEPhuqVuLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1681918772425!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="tab-pane fade" id="fpt-tower" role="tabpanel" aria-labelledby="fpt-tower-tab">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1459354757203!2d105.7860368751073!3d21.026845987844503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab286c7f7931%3A0xd08c4f176b0c22a7!2zMTAgUC4gUGjhuqFtIFbEg24gQuG6oWNoLCBZw6puIEhvw6AsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1681918821273!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="mt-4 text-color">
                            <p class="mb-0"><i class="fa-solid fa-phone"></i> 1-800-234-9000</p>
                            <p class="mb-0"><i class="fa-solid fa-envelope"></i> tasha@yourcompany.com</p>
                        </div>
                        <div class="mt-2 contact-footer">
                            <a class="p-2" href="https://www.facebook.com/profile.php?id=100049345187328"><i class="fa-brands fa-facebook"></i></a>
                            <a class="p-2" href="https://www.instagram.com/quocuong__/"><i class="fa-brands fa-instagram"></i></a>
                            <a class="p-2" href="https://www.youtube.com/channel/UCUQuQqsoq9h440BXNKOw1rQ"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-md-5 right">
                        <div class="input-box">
                            <h1>Contact</h1>
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
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>