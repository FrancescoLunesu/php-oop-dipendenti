<?php

require_once __DIR__ . '/classes/dettaglioDipendenti.php';
require_once __DIR__ . '/classes/dipendenti.php';
// require_once __DIR__ . '/traits/calcoloStipendio.php';

$dipendente1 = new DettaglioDipendenti ("Z55", "Mario", "Rossi", "IT8009001200");
var_dump($dipendente1);

try {
    $dipendente1->setNome("Mario");
} catch (Exception $e) {
    echo "Eccezione: " . $e->getMessage();
}

try {
    $dipendente1->setCognome("Rossi");
} catch (Exception $e) {
    echo "Eccezione: " . $e->getMessage();
}

try {
    $dipendente1->setIban("IT8009001200");
} catch (Exception $e) {
    echo "Eccezione: " . $e->getMessage();
}


echo $dipendente1->getNome() . " " . $dipendente1->getCognome() . "</br>";

try {
    $dipendente1->setPaga(30);
} catch (Exception $e) {
    echo "Eccezione: " . $e->getMessage();
}
try {
    $dipendente1->setOreSettimanali(40);
} catch (Exception $e) {
    echo "Eccezione: " . $e->getMessage();
}

// $dipendente1->setOreSettimanali(40);
echo $dipendente1->getPaga() . "</br>";
echo $dipendente1->getOreSettimanali() . "</br>";
echo $dipendente1->stipendio() . "</br>";
