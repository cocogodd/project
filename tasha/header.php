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
    <header>
        <div style="background: #1E1E1E">
            <div class="d-flex justify-content-end container ">
                <a class="pt-1 pb-1 pr-2 pl-2 text-white" href="">Sign up</a>
                <a class="pt-1 pb-1 pr-2 pl-2 text-white" href="">Sign in</a>
            </div>
        </div>
        <div class="container pt-2 pb-2 d-flex justify-content-between align-items-center">
            <a href="./homePage.php"><img src="./assets/images/logo.png" alt=""></a>
            <form action="" class="form-search">
                <input type="text" placeholder="What are you looking for?">
                <button type="submit" class="btn  btn-container ">Search</button>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cookware
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="categoryPage.php?category_type_id=1">Cooking Pans</a>
                            <a class="dropdown-item" href="categoryPage.php?category_type_id=2">Frying Pans</a>
                            <a class="dropdown-item" href="categoryPage.php?category_type_id=3">Cookware Sets</a>
                            <a class="dropdown-item" href="categoryPage.php?category_type_id=4">Handis</a>
                            <a class="dropdown-item" href="categoryPage.php?category_type_id=5">Kadais [Karahi]</a>
                            <a class="dropdown-item" href="categoryPage.php?category_type_id=6">Grill pans</a>
                            <a class="dropdown-item" href="categoryPage.php?category_type_id=7">Tawas</a>
                            <a class="dropdown-item" href="categoryPage.php?category_type_id=8">Egg Poachers</a>
                            <a class="dropdown-item" href="categoryPage.php?category_type_id=9">Steamers</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Refrigeration
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="categoryPage.php?category_id=10">Freezers</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=11">Refrigerators</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Appliances
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="categoryPage.php?category_id=12">Bread Makers</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=13">Coffee Makers</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=14">Ice-Cream and sorbet makers</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=15">Electric Kettles</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=16">Food Choppers</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=17">Toasters</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Food Storage
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="categoryPage.php?category_id=18">Flask</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=19">Spice Jars</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=20">Storage Bags</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=21">Lunch Boxes</a>
                            <a class="dropdown-item" href="categoryPage.php?category_id=22">Vacuum bottles</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>