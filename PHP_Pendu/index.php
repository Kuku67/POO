<?php
session_start();
if(isset($_GET['reset'])) {
    if($_GET['reset'] == 'true') {
        session_destroy();
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="indexStyle.css">
</head>
<body>
    <div id="wrapper">
    <header>
        <h1>Bienvenue sur le Pendu</h1>
    </header>
    <main>
        <section id="parameters">
            <div id="difficulty">
                <h3>Difficulté :</h3>
                <div class="choices">
                    <a href="#" class="easy">Facile</a>
                    <a href="#" class="medium">Moyen</a>
                    <a href="#" class="hard">Difficile</a>
                </div>
            </div>
            <div id="theme">
                <h3>Thème : </h3>
                <div class="choices">
                    <a href="#" class="animals">Animaux</a>
                    <a href="#" class="sport">Sport</a>
                    <a href="#" class="geography">Géographie</a>
                </div>
            </div>
        </section>
        <section id="play">
            <a href="game.php">JOUER</a>
        </section>
    </main>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>
</html>