<?php

class Compte {

    // VARIABLES
    protected $libelle;
    protected $solde = 0;
    protected $devise;
    protected $numero;
    public $client;

    // TO KNOW HOW MANY ACCOUNTS MADE IN THE BANK
    private static $comptes = 0;

    public function __construct(string $libelle, int $depot, string $devise, $client, $numero) {
        // ACCOUNT OBJECT SIDE
        is_string($libelle) ? $this->libelle = $libelle : NULL;
        is_int($depot) ? $this->solde += $depot : NULL;
        is_string($devise) ? $this->devise = $devise : NULL;
        is_object($client) ? $this->client = $client : NULL;
        is_int($numero) ? $this->numero = $numero : NULL;
        // CLIENT OBJECT SIDE
        $compte = [$this->libelle, $this->solde, $this->devise, $this->numero];
        array_push($client->comptes, $compte);
    }

    // TO CALL $comptes OUTSIDE MY CLASS
    public static function bankAccounts() {
        return self::$comptes;
    }

    // ADD MONEY
    public function crediter($value) {
        $this->solde += $value;
    }

    // REMOVE MONEY
    public function debiter($value) {
        $this->solde -= $value;
    }

    // TRANFER
    public function virement($from, $target, $value) {
        $from->solde -= $value;
        $target->solde += $value;
    }

    // CALLED WHEN WE ECHO OUR OBJECT
    public function __toString() {
        // code...
    }

    public function getInfos() {
        // NUMERO - LIBELLE - SOLDE - DEVISE - CLIENT
        $accountDatas = [$this->numero, $this->libelle, $this->solde, $this->devise, $this->client];
        return $accountDatas;
    }
}