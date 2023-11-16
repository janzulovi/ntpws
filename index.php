<?php

session_start();


if (!isset($_GET["page"])) {
    $_GET["page"] = 1;
}

$page = (int)$_GET["page"];
$id = NULL;

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Moje bilješke</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <header class="page-header">
        <nav class="container">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php?page=1">Naslovna</a></li>
                <?php 
                echo '<li><a href="index.php?page=2">Kreiraj novu bilješku</a></li>';
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php 
                if(isset($_SESSION['control']) && $_SESSION['control'] == true){
                    echo '<li><a href="./controller/userController/methods/logout.php">Odjava</a></li>';
                }
                else {
                    echo '<li><a href="index.php?page=6">Login</a></li>';
                    echo '<li><a href="index.php?page=7">Registriraj se</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    <main class="container">
        <?php
        include("./controller/noteController/noteView.php");
        ?>
    </main>
    <footer class="modal-footer panel-footer navbar-fixed-bottom">
        <p class="text-center">&copy; Copyright, Jerko Anzulović, Napredne tehnike programiranja web servisa, 2023./24.</p>
    </footer>
</body>

</html>