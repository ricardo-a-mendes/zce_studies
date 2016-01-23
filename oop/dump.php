<?php

class dump {

    public static function d($mixed, $hr = false)
    {
        self::imprimir('d', $mixed, $hr);
    }

    public static function p($mixed, $hr = false)
    {
        self::imprimir('p', $mixed, $hr);
    }

    public static function imprimir($tipo, $mixed, $hr)
    {
        echo '<pre>';
        ($tipo === 'p') ? print_r($mixed) : var_dump($mixed);
        echo ($hr == true) ? '</pre><hr>' : '</pre>';
    }

}