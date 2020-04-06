<?php
    require_once 'Acteur.php';
    require_once 'Realisateur.php';
    require_once 'Film.php';
    require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>POO Cinéma</title>
</head>
<body>
    <?php
        echo $realisateur1->getFilms();
        echo $acteur9->getFilms(); ?>
        
        <!-- AFFICHAGE FILMS D'UN GENRE SPECIFIQUE -->

        <?php $datas = Film::getFilmsByGenre("comédie"); ?>
        <?php $films = $datas[1]; ?>
        <?php $genre = $datas[0]; ?>
        <table>
            <thead>
                <tr>
                    <th>Films du genre : « <?= ucfirst($genre) ?> »</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($films as $film) : ?>
            <tr><td><?= $film ?></td></tr>
        <?php endforeach; ?>
            </tbody>
        </table>

        <!-- echo Film::getFilmsByGenre("Science-fiction");
        echo Acteur::getFilmsByRole("Personnage secondaire"); -->
</body>
</html>