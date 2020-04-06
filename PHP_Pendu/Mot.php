<?php

class Mot {

    protected $lettres;
    protected $longueur;

    public function __construct($mot) {
        $datas = [];
        $mot = str_split(strtolower($mot));
        for($i = 0; $i < count($mot); $i++) {
            array_push($datas, $mot[$i]);
        }
        $this->lettres = $datas;
        $this->longueur = count($mot);
    }

    public function getLettres() {
        return $this->lettres;
    }
}