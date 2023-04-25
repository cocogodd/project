<!-- Header component => Tạo header chung cho tấT cả các trang -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasha</title>
    <!-- Phần này để import file css -->
<!-- các link dưới đang dùng link cdn để thay cho các file css -->

<!-- link dưới là import boostrap.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link dưới là import frontawesome để dùng icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link dưới là import style.css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <!-- Phần top header trên đầu -->
        <div style="background: #1E1E1E">
            <div class="d-flex justify-content-end container ">
                <!-- Phần này để link tới trang đăng ký và đăng nhập -->
                <a class="pt-1 pb-1 pr-2 pl-2 text-white" href="">Sign up</a>
                <a class="pt-1 pb-1 pr-2 pl-2 text-white" href="">Sign in</a>
            </div>
        </div>
        <!-- Phần header ở giữa, form search -->
        <div class="container pt-2 pb-2 d-flex justify-content-between align-items-center">
            <img src="./assets/images/logo.png" alt="">
            <!-- Phần này để search sản phẩm -->
            <form action="" class="form-search">
                <input type="text" placeholder="What are you looking for?">
                <button type="submit" class="btn  btn-container ">Search</button>
            </form>
            <div>
                <!-- Phần này là mở giỏ hàng và hiện thị số lượng hàng trong giỏ -->
                <i style="font-size:25px" class="fa-solid fa-cart-shopping"></i>
                <span>Cart:2</span>
            </div>
        </div>
        <hr>
        <!-- Phần menu danh mục dùng navbar của bootstrap -->
        <nav class="navbar navbar-expand-lg container p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <!-- Menu danh mục -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cookware
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- Các loại danh mục -->
                            <a class="dropdown-item" href="#">Cooking Pans</a>
                            <a class="dropdown-item" href="#">Frying Pans</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Refrigeration
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Freezers</a>
                            <a class="dropdown-item" href="#">Refrigerators</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Appliances
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Bread Makers</a>
                            <a class="dropdown-item" href="#">Coffee Makers</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Food Storage
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Spice Jars</a>
                            <a class="dropdown-item" href="#">Storage Bags</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>