<!DOCTYPE html>
<html lang="cs">
<head>
        <title>Slovácký Soubor Kyjov</title>
        <link rel="shortcut icon" href="../../Images/favicon.ico" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/CSS.css">
        <script src="../../jquery.min.js"></script>
        <script src="../../popper.min.js"></script>
        <script src="../../bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../all.min.css">
        <script type="text/javascript" src="../../all.min.js"></script>
        <style>
        .gallery img{width: 100%;height: 250px;object-fit: cover}
        .gallery{display: grid;grid-template-columns: repeat(3, auto);max-width: 1000px}
        @media screen and (max-width: 724px) {.gallery{grid-template-columns: repeat(1, auto)}}
        @media screen and (min-width: 725px) AND (max-width: 1100px) {.gallery{grid-template-columns: repeat(2, auto)}}
        </style>
    </head>
    <body class="bg">
        <header style="background-color: #ffff;">
            <nav class="navbar navbar-expand-lg">
                <img class="logo" src="../../Images/logo.jpg" alt="">
                <h1 class="navText">Slovácký soubor Kyjov</h1>  
                <button class="navbar-toggler blue" type="button" data-bs-toggle="collapse" data-bs-target="#Burger" style="margin-right: 3%">
                    <span><i class="fa-solid fa-bars blue"></i></span>
                </button>
                <div class="navbar-collapse collapse" id="Burger">
                    <ul class="navbar-nav ms-auto navigation">
                        <li class="nav-item"><a class="nav-link" href="../../index.php">Domů</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../slozky.html">Složky souboru</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../historie.html">Historie</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../turne.html">Turné</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../galerie.php">Galerie</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../zvykoslovi.html">Zvykosloví</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="mainFieldGallery">
            <nav class="navbar menu">
            <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            <i class="fa-solid fa-calendar-days dBlue"></i>
            </button>
            <div class="offcanvas offcanvas-start" id="demo">
                <div class="offcanvas-header">
                <h1 class="offcanvas-title">Rok -> Akce</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                <ul class="">
                    <div class="btn-group-vertical">
                    <div class="dropdown">
                        <button type="button" class="btn blue" data-bs-toggle="dropdown">
                        2014
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../gallery/2014/TriKralove.php">Tři králové</a></li>
                            <li><a class="dropdown-item" href="../../gallery/2014/Velikonoce.php">Velikonoce</a></li>
                            <li><a class="dropdown-item" href="../../gallery/2014/Dozinky.php">Dožínky</a></li>
                            <li><a class="dropdown-item" href="../../gallery/2014/Hody.php">Hody</a></li>
                            <li><a class="dropdown-item" href="../../gallery/2014/Vanoce.php">Vánoce</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn blue" data-bs-toggle="dropdown">
                        2015
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../gallery/2015/TriKralove.php">Tři králové</a></li>
                            <li><a class="dropdown-item" href="../../gallery/2015/Velikonoce.php">Velikonoce</a></li>
                            <li><a class="dropdown-item" href="../../gallery/2015/Dozinky.php">Dožínky</a></li>
                            <li><a class="dropdown-item" href="../../gallery/2015/Hody.php">Hody</a></li>
                            <li><a class="dropdown-item" href="../../gallery/2015/Vanoce.php">Vánoce</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn blue" data-bs-toggle="dropdown">
                        2016
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../gallery/2016/TriKralove.php">Tři králové</a></li>
                        </ul>
                    </div>
                    </div>
                </ul>
                </div>
                </div>
            </nav>
            <div class="content">
                <div class="gallery">
                <?php
                $images = glob("../../Images/galerie/triKralove/2014/*.{jpg,jpeg,png,gif,webp,jfif}", GLOB_BRACE);
                foreach ($images as $i) {
                    printf("<img src='../../Images/galerie/triKralove/2014/%s'/>", basename($i));
                }
                ?></div>
            </div>
            <div class="clearfix"></div>
        </main>
        <footer class="bgBlue">
            <div class="ftCon">
                <p class="ftConTex white">Konataktujte nás: </p>
                <a class="ftConIcPh" href="../../kontakty.html"><i class="fa-solid fa-envelope white"></i></a>
                <a class="ftConIcFb" href="https://www.facebook.com/slovackysoubor/" target="_blank"><i class="fa-brands fa-facebook-f white"></i></a>
                <a href="https://www.youtube.com/user/slovackysouborkyjov" target="_blank"><i class="fa-brands fa-youtube white"></i></a>
            </div>
            <div class="copySt white">
                &copy; Slouvácký soubor Kyjov 2022
            </div>
            <div class="clearfix"></div>
        </footer>
    </body>
    
</html>
