<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Domaine</title>
</head>

<body>
    <header>
        <div id="logo">
            <img src="./images/logo.png" alt="Logo du site">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Html 5</a></li>
                <li><a>CCS3</a>
                    <ul class="sous">
                        <li><a href="#">Introduction</a> </li>
                        <li><a href="#">Background</a></li>
                        <li><a href="#">Bordure</a></li>
                        <li><a href="#">Text</a></li>
                        <li><a href="#">Transfromation</a></li>
                    </ul>
                </li>
                <li><a>Apllications</a></li>
                <?php if (!empty($_SESSION['user'])) { ?>
                    <li><a href="#"><?php echo $_SESSION['user']['firstname'] ?></a>
                        <ul class="sous">
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php } ?>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>