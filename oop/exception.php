<?php

class myException extends Exception {
    public function __construct($message)
    {
        if ($message == 'specialError') {
            throw new Exception('Opps: Special Error');
        }
        else {
            throw new Exception('Opps: Generic Error');
        }
    }
}
/*
 * Modo Errado
try {
    $e = new myException('desconhecido');
} catch (myException $e) {
    echo 'Error: ' . $e->getMessage(); //Fatal error: Uncaught exception 'Exception' with message 'Opps: Generic Error'
}

*/
//Modo Correto
try {
    $e = new myException('desconhecido');
} catch (Exception $e) { // <= Aqui está diferente
    echo 'Error: ' . $e->getMessage(); //Fatal error: Uncaught exception 'Exception' with message 'Opps: Generic Error'
}