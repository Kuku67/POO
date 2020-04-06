<?php

$acteur1 = new Acteur("Nom1", "Prenom1", "23-01-1956");
$acteur2 = new Acteur("Nom2", "Prenom2", "23-02-1986");
$acteur3 = new Acteur("Nom3", "Prenom3", "23-01-1956");
$acteur4 = new Acteur("Nom4", "Prenom4", "23-01-1956");
$acteur5 = new Acteur("Nom5", "Prenom5", "23-01-1956");
$acteur6 = new Acteur("Nom6", "Prenom6", "23-01-1956");
$acteur7 = new Acteur("Nom7", "Prenom7", "23-01-1956");
$acteur8 = new Acteur("Nom8", "Prenom8", "23-01-1956");
$acteur9 = new Acteur("Nom9", "Prenom9", "23-01-1956");
$acteur10 = new Acteur("Nom10", "Prenom10", "23-01-1956");


$realisateur1 = new Realisateur("NomRea1", "PrenomRea1", "13-05-1988");
$realisateur2 = new Realisateur("NomRea2", "PrenomRea2", "23-11-2000");
$realisateur3 = new Realisateur("NomRea3", "PrenomRea3", "16-04-1967");

$film1 = new Film("Film1", "24-03-2017", "01:40", "Synopsis1", $realisateur1, [$acteur1, $acteur2, $acteur3], "Science-fiction");
$acteur1->addRole("Personnage principal", $film1);
$acteur2->addRole("Personnage secondaire", $film1);
$acteur3->addRole("Figurant", $film1);
$film2 = new Film("Film2", "13-11-2002", "02:10", "Synopsis2", $realisateur3, [$acteur4, $acteur5, $acteur6], "Dramatique");
$acteur4->addRole("Personnage secondaire", $film2);
$film3 = new Film("Film3", "11-02-1987", "01:30", "Synopsis3", $realisateur2, [$acteur7, $acteur8, $acteur9, $acteur10], "Comédie");
$acteur9->addRole("Personnage principal", $film3);
$film4 = new Film("Film4", "22-12-19-7", "01:30", "Synopsis4", $realisateur1, [$acteur7, $acteur8, $acteur9], "Comédie");
$acteur9->addRole("Personnage secondaire", $film4);