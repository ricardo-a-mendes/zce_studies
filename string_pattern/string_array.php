<?php

include '../oop/dump.php';

$string = 'ricardo.a...mendes';
dump::d(explode(".", $string));
/*
array (size=5)
  0 => string 'ricardo' (length=7)
  1 => string 'a' (length=1)
  2 => string '' (length=0)
  3 => string '' (length=0)
  4 => string 'mendes' (length=6)
*/
//dump::d(explode("", $string)); //Warning: explode(): Empty delimiter in

$array = ['Ricardo', 'a', 'Mendes'];
dump::d(implode("-", $array)); //string 'Ricardo-a-Mendes'