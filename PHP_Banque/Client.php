<?php

class Client {

    // VARIABLES
    protected $nom;
    protected $prenom;
    protected $naissance;
    protected $ville;
    public $comptes = [];

    // TO KNOW HOW MANY CLIENTS IN THE BANK
    private static $clients = 0;

    public function __construct(string $nom, string $prenom, $naissance, string $ville) {
        is_string($nom) ? $this->nom = $nom : NULL;
        is_string($prenom) ? $this->prenom = $prenom : NULL;
        $this->naissance = new DateTime($naissance);
        is_string($ville) ? $this->ville = $ville : NULL;
        self::$clients++;
    }

    // TO CALL $clients OUTSIDE MY CLASS
    public static function bankClients() {
        return self::$clients;
    }

    // CALLED TO RETURN INFOS
    public function getInfos() {
        $clientDatas = [$this->nom, $this->prenom, $this->getAge(), $this->ville, $this->comptes];
        return $clientDatas;
    }

    // CALLED WHEN WE ECHO OUR OBJECT
    public function __toString() {
        // code...
    }

    // TO UPDATE ANY PROPERTY
    public function setInfo($propriete, $valeur) {
        $this->$propriete = $valeur;
    }

    // TO GET ANY PROPERY INFO
    public function getInfo($propriete) {
        $propriete == "age" ? $rep = $this->getAge() : $rep = $this->$propriete;
        return $rep;
    }

    // TO GET FORMATED AGE AS A YEAR OLD INTEGER (exemple : 49)
    public function getAge() {
        $current = new DateTime();
        $age = $current->diff($this->naissance);
        return "$age->y ans";
    }
}