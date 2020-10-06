<?php
require_once __DIR__ . '/../traits/calcoloStipendio.php';

class Dipendenti{
    public $id;
    public $dipartimento;

    public function __construct($_id){
        $this->id = $_id;
    }

    public function setId($_id){
        if(empty($_id)){
            throw new Exception("Attenzione! Inserisci l'identificativo del dipendente");
        } else {
            $this->id = $_id;
        }
    }

    public function getIg(){
        return $this->id;
    }
}
