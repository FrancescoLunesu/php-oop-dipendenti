<?php

trait CalcoloStipendio{
    protected $Inquadramento;
    protected $paga;
    protected $OreSettimanali;
    protected $stipendio;

    public function _construct($_id, $_Nome, $_Cognome, $_Iban, $_paga, $_OreSettimanali){
        parent::__construct($_id, $_Nome, $_Cognome, $_Iban);
        $this->paga = $_paga;
        $this->OreSettimanali = $_OreSettimanali;
    }

    public function setPaga($_paga){
        if(empty($_paga)){
            die("Attenzione! Inserisci la paga oraria del dipendente");
        } else if ($_paga < 10 || $_paga > 30){
            die("Attenzione! La paga oraria del dipendente deve essere tra i 10€ e i 30€");
        } else {
            $this->paga = $_paga;
        }
    }

    public function getPaga(){
        return $this->paga;
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

    public function stipendio(){
        $this->stipendio = ($this->paga * $this->OreSettimanali) * 4;
        return $this->stipendio;
    }

}
