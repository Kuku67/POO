<?php
require 'Mot.php';
session_start();
$mots = [];
require 'library.php';
if(!isset($_SESSION['compteur'])) {
    $_SESSION['compteur'] = 0;
}
if(isset($_GET['reset'])) {
    if($_GET['reset'] == 'true') {
        session_destroy();
        header('Location: game.php');
    }
}
$_SESSION['motTrouve'] = false;
if($_SESSION['motTrouve'] == false) {
    if(!isset($_SESSION['mot'])) {
        $_SESSION['mot'] = new Mot($mots[array_rand($mots, 1)]);
    }
}
if(!isset($_SESSION['lettresUtilisees'])) {
    $_SESSION['lettresUtilisees'] = [];
}
if(!isset($_SESSION['lettresJustes'])) {
    $_SESSION['lettresJustes'] = [];
}
if(isset($_GET['lettre']) && $_SESSION['compteur'] <= 10) {
    if(!in_array($_GET['lettre'], $_SESSION['lettresUtilisees'])) {
        if(in_array($_GET['lettre'], $_SESSION['mot']->getLettres())) {
            array_push($_SESSION['lettresJustes'], $_GET['lettre']);
        } else {
            $_SESSION['compteur']++;
        }
        array_push($_SESSION['lettresUtilisees'], $_GET['lettre']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Pendu</title>
</head>
<body>
    <?php
    if(count($_SESSION['lettresJustes']) == count(array_unique($_SESSION['mot']->getLettres()))) {
        echo "<h1 class='finished'>VICTOIRE</h1>";
    } else if ($_SESSION['compteur'] == 10) {
        echo "<h1 class='finished'>PERDU</h1>";
    } else {
        echo "<h1>Jeu du pendu</h1>";
        require_once 'board.php';
    }
    ?>
    <div id="replay">
        <p class='replay-link'><a href="game.php?reset=true" class="reset">Rejouer ?</a></p>
        <p class='replay-link'><a href="index.php?reset=true" class="reset">Revenir aux paramètres</a></p>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>
</html>