<?php

class dump {

    public static function d($mixed, $hr = false)
    {
        self::imprimir('d', false, $mixed, $hr);
    }

    public static function p($mixed, $hr = false)
    {
        self::imprimir('p', false, $mixed, $hr);
    }

    public static function df($mixed, $hr = false)
    {
        self::imprimir('d', true, $mixed, $hr);
    }

    public static function pf($mixed, $hr = false)
    {
        self::imprimir('p', true, $mixed, $hr);
    }

    public static function imprimir($tipo, $isFlat, $mixed, $hr)
    {
		if ($isFlat)
        {
			($tipo === 'p') ? print_r($mixed) : var_dump($mixed);
			echo ($hr == true) ? '<hr>' : '<br>';
		}
		else
		{
			echo '<pre>';
			($tipo === 'p') ? print_r($mixed) : var_dump($mixed);
			echo ($hr == true) ? '</pre><hr>' : '</pre>';
		}
    }

}