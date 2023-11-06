<?php

if (!isset($_GET["page"])) {
    $_GET["page"] = 1;
}

$page = (int)$_GET["page"];

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
            <ul class="nav navbar-nav">
                <li><a href="index.php?page=1">Naslovna</a></li>
                <li><a href="index.php?page=2">Kreiraj novu bilješku</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <?php include("./controller/noteController/noteView.php");?>
    </main>
    <footer class="modal-footer panel-footer navbar-fixed-bottom">
        <p class="text-center">&copy; Copyright, Jerko Anzulović, Napredne tehnike programiranja web servisa, 2022./23.</p>
    </footer>
</body>

</html>