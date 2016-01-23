<?php

$string = "123456";

echo 'substr:';
//Se $start > 0, começa da esquerda pra direita
var_dump(substr($string, 3, 2)); //output => string '45' (length=2)

//Se $length < 0, será a quantidade de caracteres
//omitidos do fim da string para o começo, omite o 6 e o 5
var_dump(substr($string, 3, -2)); //output => string '4' (length=1)

//Se $start < 0, começa da direita (fim da string) para a esquerda
var_dump(substr($string, -3, 2)); //output => string '45' (length=2)
var_dump(substr($string, -4, -2)); //output => string '34' (length=2)
var_dump(substr($string, -4, -5)); //output => string '' (length=0)
echo '<hr>';

//Conta a quantidade de substrings na string
//Neste caso não se utiliza negativo nem para Offset (ponto onde comeca),
//nem para Length (limite apos offset)
$string = "01 02 03 01 04 05 01";
$needle = "01";
var_dump(substr_count($string, $needle));
var_dump(substr_count($string, $needle, 2));
var_dump(substr_count($string, $needle, 5, 11));
var_dump(substr_count($string, $needle, 0, 10));