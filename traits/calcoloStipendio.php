<?php

trait CalcoloStipendio{
    protected $Inquadramento;
    protected $OreSettimanali;
    protected $stipendio;

    public function _construct($_id, $_Nome, $_Cognome, $_Iban, $_Inquadramento, $_OreSettimanali){
        parent::__construct($_id, $_Nome, $_Cognome, $_Iban);
        $this->Inquadramento = $_Inquadramento;
        $this->OreSettimanali = $_OreSettimanali;
    }

    public function setInquadramento($_Inquadramento){
        if(empty($_Inquadramento)){
            die("Attenzione! Inserisci l'inquadramento del dipendente");
        } else if ($_Inquadramento > 5){
            die("Attenzione! Il livello di inquadramento del dipendente non può essere superiore a 5");
        } else {
            $this->Inquadramento = $_Inquadramento;
        }
    }

    public function getInquadramento(){
        return $this->Inquadramento;
    }

    public function setOreSettimanali($_OreSettimanali){
        if(empty($_OreSettimanali)){
            die("Attenzione! Inserisci le ore settimanali");
        } else {
            $this->OreSettimanali = $_OreSettimanali;
        }
    }

    public function getOreSettimanali(){
        return $this->OreSettimanali;
    }

    public function Stipendio($_Inquadramento, $_OreSettimanali){
        $this->stipendio = ($this->Inquadramento * $this->OreSettimanali) * 4;
        return $this->stipendio;
    }

}
