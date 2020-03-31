<?php

class Acteur {

    protected $nom;
    protected $prenom;
    protected $naissance;

    public $films = [];

    // $classroles sous la forme [NOM, PRENOM, TITRE-FILM, ROLE]
    public static $classroles = [];
    public static function getFilmsByRole($role) {
        // Insensible à la casse
        $role = strtolower($role);
        $roles = [$role, []];

        for($i = 0; $i < count(self::$classroles); $i++) {
            if(self::$classroles[$i][3] == $role) {
                array_push($roles[1], self::$classroles[$i]);
            }
        }
        return $roles;
    }

    public static function getClassRoles() {
        return self::$classroles;
    }

    public function __construct($nom, $prenom, $naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new DateTime($naissance);
    }

    public function __toString() {
        // ...
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
            array_push($datas[1], [$this->films[$i][0], $this->films[$i][1]]);
        }
        return $datas;
    }

    // TO GET ROLES OF THIS
    public function getRoles() {

        $datas = [[$this->nom, $this->prenom], []];

        for($i = 0; $i < count($this->films); $i++) {
            array_push($datas[1], [$this->films[$i][1], $this->films[$i][0]]);
        }
        return $datas;
    }


    // TO ADD A ROLE
    public function addRole($role, $film) {
        array_push(self::$classroles, [$this->nom, $this->prenom, $film->titre, strtolower($role)]);
        array_push($this->films, [$film->titre, $role]);
    }
}