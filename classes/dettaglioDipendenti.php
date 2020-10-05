<?php
require_once __DIR__ . '/dipendenti.php';
require_once __DIR__ . '/../traits/calcoloStipendio.php';

class DettaglioDipendenti extends Dipendenti{
    use CalcoloStipendio;
    protected $Nome;
    protected $Cognome;
    private $CodiceFiscale;
    protected $Iban;

    public function __construct($_id, $_Nome, $_Cognome, $_Iban){
        parent::__construct($_id);
        $this->Nome = $_Nome;
        $this->Cognome = $_Cognome;
        $this->Iban = $_Iban;
    }

    public function setNome($_Nome){
        if(empty($_Nome)){
            die("Attenzione! Inserisci il nome del dipendente");
        } else {
            $this->Nome = $_Nome;
        }
    }

    public function getNome(){
        return $this->Nome;
    }

    public function setCognome($_Cognome){
        if(empty($_Cognome)){
            die("Attenzione! Inserisci il cognome del dipendente");
        } else {
            $this->Cognome = $_Cognome;
        }
    }

    public function getCognome(){
        return $this->Cognome;
    }

    public function setIban($_Iban){
        if(empty($_Iban)){
            die("Attenzione! Inserisci l'Iban del dipendente");
        } else {
            $this->Iban = $_Iban;
        }
    }

    public function getIban(){
        return $this->Iban;
    }
}
