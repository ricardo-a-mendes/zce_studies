<?php
include '../oop/dump.php';
$expressao = '/ricardo/';

$stringMatch = 'ricardo_mendes';
$stringMatchAll = 'ricardo_mendes_ricardo';
$stringNoMatch = 'andrietta_mendes';

/**
 * preg_match       => primeira ocorrencia
 * preg_match_all   => todas ocorrencias
 */

$saida1 = preg_match($expressao, $stringMatch, $matches);
dump::d($saida1); //int 1
dump::d($matches, 1);
/*
array (size=1)
  0 => string 'ricardo' (length=7)
*/
$saida2 = preg_match($expressao, $stringNoMatch, $matches);
dump::d($saida2); //int 0
dump::d($matches, 1);
/*
array (size=0)
  empty
*/
$saida3 = preg_match($expressao, $stringMatchAll, $matches);
dump::d($saida3); //int 1
dump::d($matches, 1);
/*
array (size=1)
  0 => string 'ricardo' (length=7)
*/
$saida4 = preg_match_all($expressao, $stringMatchAll, $matches);
dump::d($saida3); //int 1
dump::d($matches, 1);
/*
array (size=1)
  0 =>
    array (size=2)
      0 => string 'ricardo' (length=7)
      1 => string 'ricardo' (length=7)
*/
//////////////////////////////////////////////////////////////////////////////
/**
 * preg_replace
 */
$nome = 'Marcos';
$saidaReplce01 = preg_replace($expressao, $nome, $stringMatchAll, -1, $count);
dump::d($saidaReplce01); //string 'Marcos_mendes_Marcos' (length=20)
dump::d($count, 1); //int 2

$saidaReplce02 = preg_replace('/(ricardo)_(mendes)/', '\2, \1', $stringMatch);
dump::d($saidaReplce02); //string 'mendes, ricardo' (length=15)