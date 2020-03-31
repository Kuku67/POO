<?php

class Realisateur {

    protected $nom;
    protected $prenom;
    protected $naissance;
    
    public $films = [];

    private static $realisateurs = 0;

    public function __construct($nom, $prenom, $naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new DateTime($naissance);
    }

    public static function realisateur() {
        return self::$realisateur;
    }

    public function __toString() {
        //  code...
    }

    public function setInfo($propriete, $valeur) {
        $this->$propriete = $valeur;   
    }

    public function getInfo($propriete) {
        return $this->$propriete;
    }

    // TO GET LIST OF THIS FILMS
    public function getFilms() {

        $datas = [[$this->nom, $this->prenom], []];

        for($i = 0; $i < count($this->films); $i++) {
            array_push($datas[1], $this->films[$i]);
        }
        return $datas;
    }
}