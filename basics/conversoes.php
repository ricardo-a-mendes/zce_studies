<?php

$x = 47;
$x .= '11';
echo $x; //Output 4711
echo '<br>';

$y = 08; //Base cotal (0 a 7)
echo $y; //Como nao existe, retorna 0 (Zero)
echo '<br>';

$z = " 56";
$z += 4;
echo $z; //Output 60, ao converter o 56, tira o espaco da esquerda
echo '<br>';

$w = "a56";
$w += 4;
echo $w; //Output 4, nao consegue converter o a56, retorna 0 (Zero) para a soma
echo '<br>';

$m = "56a";
$m += 4;
echo $m; //Output 60, consegue converter o 56 e ignora a string a esquerda
echo '<br>';

var_dump("12x" *1); //int 12
var_dump("1.2x" *1);//float 1.2
var_dump("12E-1x" *1);//float 1.2
var_dump("08x" *1);//int 8
var_dump("E1x" *1);//int 0
var_dump((int)"12E-1x");//inteiro 12
var_dump((float)"12E-1x");//float 1.2

echo '<hr>';

$a = 1;
$b = &$a; //$b aponta para o local de memoria de $a
//Entao se $b muda, $a tambem muda, pois apontam para o mesmo lugar de memoria
$b = 2;
echo $a; //Output = 2