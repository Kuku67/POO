<?php

class Film {

    public $titre;
    protected $sortie;
    protected $duree;
    protected $synopsis;
    protected $genre;

    public $realisateur = [];
    public $acteurs;

    // $genres sous la forme [TITRE, GENRE]
    public static $genres = [];
    public static function getFilmsByGenre($type) {
        $datas = [$type, []];
        $type = strtolower($type);
        for($i = 0; $i < count(self::$genres); $i++) {
            if(self::$genres[$i][1] == $type) {
                array_push($datas[1], self::$genres[$i][0]);
            }
        }
        return $datas;
    }

    public function __construct($titre, $sortie, $duree, $synopsis, $realisateur, $acteurs, $genre) {
        $this->titre = $titre;
        $this->sortie = new DateTime($sortie);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $this->genre = strtolower($genre);
        array_push(self::$genres, [$this->titre, strtolower($genre)]);

        // A WAY TO KNOW EVERY ACTORS IN CURRENT OBJECT
        $this->acteurs = $acteurs;

        //
        $film = $this->titre;
        array_push($realisateur->films, $film);
    }

    public function __toString() {

        $datas = [$this->titre, $this->getDate(), $this->duree, $this->genre, $this->acteurs, $this->realisateur];

        return $datas;
    }

    public function setInfo($propriete, $valeur) {
        $this->$propriete = $valeur;   
    }

    public function getInfo($propriete) {
        return $this->$propriete;
    }

    public function getDate() {
        $date = $this->sortie;
        return $date->format("d.m.Y");
    }
}