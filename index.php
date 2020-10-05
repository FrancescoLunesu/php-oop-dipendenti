<?php

require_once '/classes/dettaglioDipendenti.php';
require_once '/traits/calcoloStipendio.php';

$dipendente1 = new DettaglioDipendenti ("Z55", "Mario", "Rossi", "IT8009001200");
var_dump($dipendente1);
