<?php

$animals = [
    "easy" => ["Loup", "Oiseau", "Paon", "Buffle", "Dinde", "Poule", "Cerf"],
    "medium" => ["Blaireau", "Guepard", "Herisson", "Dauphin", "Lamantin"],
    "hard" => ["Hippopotame", "Kangourou", "Bouquetin", "Elephant", "Cheuvreuil", "Rhinoceros", "Paradisier"]
];

$sports = [
    "easy" => ["Course", "Criket", "Judo", "Lutte", "Rugby"],
    "medium" => ["Parkour", "Plongeon", "Handball", "Football", "Baseball"],
    "hard" => ["Gymnastique", "Heptathlon", "Horseball", "Motocross", "Trampoline", "Wakeboard"]
];

$geographie = [
    "easy" => ["Lybie", "Iran", "Irac", "Tokyo", "France", "Lille", "Lyon", "Nuage", "Volcan", "Fleuve"],
    "medium" => ["Espagne", "Montagne", "Pacifique", "Atlantique", "Riviere", "Banquise", "Blizzard", "Cascade"],
    "hard" => ["Continental", "Afganistan", "Bangladesh", "Atmosphere", "Volcanique", "Escarpement"]
];

switch($_COOKIE['theme']) {
    case 'animals' : $theme = 'animals'; break;
    case 'sport' : $theme = 'sports'; break;
    case 'geography' : $theme = 'geography'; break;
}

switch($_COOKIE['difficulty']) {
    case 'easy' : $diff = 'easy'; break;
    case 'medium' : $diff = 'medium'; break;
    case 'hard' : $diff = 'hard'; break;
}

if($diff == 'easy') {
    switch($theme) {
        case 'animals' : $mots = $animals['easy']; break;
        case 'sports' : $mots = $sports['easy']; break;
        case 'geography' : $mots = $geographie['easy']; break;
    }
}
if($diff == 'medium') {
    switch($theme) {
        case 'animals' : $mots = $animals['medium']; break;
        case 'sports' : $mots = $sports['medium']; break;
        case 'geography' : $mots = $geographie['medium']; break;
    }
}
if($diff == 'hard') {
    switch($theme) {
        case 'animals' : $mots = $animals['hard']; break;
        case 'sports' : $mots = $sports['hard']; break;
        case 'geography' : $mots = $geographie['hard']; break;
    }
}
