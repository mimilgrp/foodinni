<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/fav.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Geologica">
    <link rel="stylesheet" href="sheet/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5f15823e31.js" crossorigin="anonymous"></script>
    <title>Foodinni</title>
</head>
<body>
    <div class="container-navbar">
        <div class="container">
            <nav class="navbar-nav">
                <ul class="nav justify-content-between">
                    <li class="nav-item">
                        <a href="." class="d-none d-sm-block">
                            <img src="img/logo-large.svg" class="nav-img">
                        </a>
                        <a href="." class="d-block d-sm-none">
                            <img src="img/logo-small.svg" class="nav-img">
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-flex">
                        <a href="items/brand" class="d-none d-xl-block" onclick="return false;">
                            <div class="nav-menu">
                                <p>Brands</p>
                            </div>
                        </a>
                        <a href="items/category" class="d-none d-lg-block" onclick="return false;">
                            <div class="nav-menu">
                                <p>Categories</p>
                            </div>
                        </a>
                        <a href="items/discount" class="d-none d-lg-block" onclick="return false;">
                            <div class="nav-menu">
                                <p>Discounts</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="items" onsubmit="return false; ">
                            <input type="search" placeholder="Search" class="nav-search" name="search">
                        </form> 
                    </li>
                    <li class="nav-item d-flex">
                        <a href="account" class="d-none d-md-block" onclick="return false;">
                            <div class="nav-menu">
                                <p>Account <i class="fa-regular fa-user"></i></p>
                            </div>
                        </a>
                        <a href="account" class="d-block d-md-none" onclick="return false;">
                            <div class="nav-menu">
                                <p><i class="fa-regular fa-user"></i></p>
                            </div>
                        </a>
                        <a href="account/list" class="d-none d-xl-block" onclick="return false;">
                            <div class="nav-menu">
                                <p>List <i class="fa-solid fa-list-check"></i></p>
                            </div>
                        </a>
                        <a href="account/list" class="d-block d-xl-none" onclick="return false;">
                            <div class="nav-menu">
                                <p><i class="fa-solid fa-list-check"></i></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>