<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasha</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    
    <?php
    function connect()
    {
        $conn = new mysqli('localhost', 'root', '12345678', 'project');
        if ($conn->connect_error) {
            die('Kết nối thất bại' . $conn->connect_error);
        }
        return $conn;
    }
    session_start();
    $conn = connect();
    $categories = $conn->query("SELECT id, menu_name from categories");
    $categories_type = $conn->query("SELECT id, category_name,Categories_id from categories_type");
    $user;
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
       $user=null ;
    }
    ?>
    <header>
        <div>
            <div class="d-flex justify-content-end align-items-center container pt-2">
                <?php if ($user) { ?>
                    <div class="dropdown show">
                        <span id="avatar" class="d-flex justify-content-center align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= strtoupper(substr($user, 0, 1)) ?></span>

                        <div class="dropdown-menu" aria-labelledby="avatar">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="sign_in.php">Logout</a>
                        </div>
                    </div>
                <?php } 
                else{?>
                
                <a class="pt-1 pb-1 pr-2 pl-2 text-black font-weight-bold" href="sign_up.php">Sign up</a>
                <div class="navbar__link-separator"></div>
                <a class="pt-1 pb-1 pr-2 pl-2 text-black font-weight-bold" href="sign_in.php">Sign in</a>
                <?php }?>
            </div>
        </div>
        <div class="container  pb-2 d-flex justify-content-between align-items-center">
            <a href="./homePage.php"><img src="./assets/images/logo.png" alt=""></a>
            <form action="searchPage.php" method="get" class="form-search">
                <input type="search" name="search" placeholder="Search">
                <button type="submit">Search</button>
            </form>
            <div>
                <i style="font-size:25px" class="fa-solid fa-cart-shopping"></i>
                <span>Cart:2</span>
            </div>
        </div>
        <hr>
        <nav class="navbar navbar-expand-lg container p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php foreach ($categories as $category) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $category['menu_name'] ?>
                            </a>
                            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                <?php foreach ($categories_type as $category_type) : ?>
                                    <?php if ($category['id'] == $category_type['Categories_id']) {
                                        echo "
                                        <a class='dropdown-item' href='categoryPage.php?category_type_id={$category_type['id']}'>{$category_type['category_name']}</a>
                                    ";
                                    }
                                    ?>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </header>