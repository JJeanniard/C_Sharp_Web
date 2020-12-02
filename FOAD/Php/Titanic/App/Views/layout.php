<!doctype html>
<html lang="fr">
<head>
    <title>Agence Titanic</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e5939720c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <div class="sidebar">
        <div class="logo"><img src="img/logo/titanic_1.png" alt="logo de l'agence"></div>
        <nav>
            <ul class="menu">
                <li id="act-menu"><a>menu</a>
                    <ul id="sous-menu" hidden>
                        <li><a href="#">Item 1</a></li>
                        <li><a href="#">Item 2</a></li>
                        <li><a href="#">Item 3</a></li>
                        <li><a href="#">Item 4</a></li>
                        <li><a href="#">Item 5</a></li>
                        <li><a href="#"><i class="fas fa-user"></i></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="main-logo"><img src="img/logo/titanic_1.png" alt="logo de l'agence"></div>
    <h1 class="title-main">Agence Titanic</h1>
    <p>Vos vacances s'annoncent titanesques</p>
    <button>Découvrir nos destination</button>
</header>
<main>
<?php
    echo $page;
?>
</main>
<footer>

</footer>
<script src="js/menu.js"></script>
</body>
</html>