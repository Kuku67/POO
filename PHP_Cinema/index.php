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
        <!-- AFFICHAGE TOUS LES FILMS D'UN REALISATEUR -->

        <?php $realisateurDatas = $realisateur1->getFilms(); ?>
        <?php $realisateurFilms = $realisateurDatas[1]; ?>
        <table>
            <thead>
                <tr>
                    <th>Films de : « <?= $realisateurDatas[0][0]." ".$realisateurDatas[0][1] ?> »</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($realisateurFilms as $film) : ?>
            <tr><td><?= $film ?></td></tr>
        <?php endforeach; ?>
            </tbody>
        </table>

        <!-- AFFICHAGE TOUS LES FILMS D'UN ACTEUR -->

        <?php $acteurDatas = $acteur9->getFilms(); ?>
        <?php $acteurFilms = $acteurDatas[1]; ?>
        <table>
            <thead>
                <tr>
                    <th>Films de : « <?= $acteurDatas[0][0]." ".$acteurDatas[0][1] ?> »</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($acteurFilms as $film) : ?>
            <tr><td><?= $film[0]. " en tant que « ".$film[1]." »" ?></td></tr>
        <?php endforeach; ?>
            </tbody>
        </table>

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

        <!-- AFFICHAGE TOUS LES ROLES D'UN ACTEUR -->

        <?php $acteurDatas = $acteur9->getRoles(); ?>
        <?php $acteurFilms = $acteurDatas[1]; ?>
        <table>
            <thead>
                <tr>
                    <th colspan="2">Roles de : « <?= $acteurDatas[0][0]." ".$acteurDatas[0][1] ?> »</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($acteurFilms as $film) : ?>
            <tr><td><?= $film[0] ?></td><td><?= $film[1] ?></td></tr>
        <?php endforeach; ?>
            </tbody>
        </table>

        <!-- AFFICHAGE FILMS+ACTEUR D'UN ROLE PRECIS -->

        <?php $roles = Acteur::getFilmsByRole("Personnage principal"); ?>
        <?php $infos = $roles[1]; ?>
        <table>
            <thead>
                <tr><th colspan='4'>Les acteurs pour le rôle « <?= ucfirst($roles[0]) ?> »</th></tr>
            </thead>
            <tbody>
            <?php foreach($infos as $film) : ?>
                <tr>
                    <td><?= $film[0] ?></td>
                    <td><?= $film[1] ?></td>
                    <td><?= $film[2] ?></td>
                    <td><?= ucfirst($film[3]) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <!-- INFORMATIONS D'UN FILM -->
        
        <?php $filmInfos = $film1->__toString(); ?>
        <?php $acteurs = $filmInfos[4]; ?>
        <table>
            <thead>
                <tr><th colspan='4'>Informations du Film</th></tr>
                <tr>
                    <th class="light-th">Titre</th>
                    <th class="light-th">Date de sortie</th>
                    <th class="light-th">Durée</th>
                    <th class="light-th">Genre</th>
                </tr>
                <tr>
                    <td><?= $filmInfos[0] ?></td>
                    <td><?= $filmInfos[1] ?></td>
                    <td><?= $filmInfos[2] ?></td>
                    <td><?= ucfirst($filmInfos[3]) ?></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="4">Réalisateur</th>
                </tr>
                <tr>
                    <td colspan="2"><?= $filmInfos[5]->getInfo("nom") ?></td>
                    <td colspan="2"><?= $filmInfos[5]->getInfo("prenom") ?></td>
                </tr>
                <tr>
                    <th colspan="4">Liste des acteurs</th>
                </tr>
            <?php foreach($acteurs as $acteur) : ?>
                <tr>
                    <td colspan="2"><?= $acteur->getInfo("nom") ?></td>
                    <td colspan="2"><?= $acteur->getInfo("prenom") ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>




</body>
</html>