<?php
require '../oop/dump.php';

$string = "abcdefg";

//2o. param positivo => quantidade de caracteres apos 1o. param
dump::d(substr($string, 3, 2)); //string 'de'

//2o. param negativo => indica qual sera a posicao final do fim para o inicio
dump::d(substr($string, 2, -2)); //string 'cde'

dump::d(substr($string, -3, -2)); //string 'e'
dump::d(substr($string, -3, 20)); //string 'efg' (length=3)
dump::d(substr($string, -3, -4)); //string '' (length=0)