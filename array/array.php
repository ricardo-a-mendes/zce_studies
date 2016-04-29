<?php
include '../oop/dump.php';

//Organizando arrays
$myArray = array('Three' => 3, 'Two' => 2, 'One' => 1);

//Ordena pelo VALOR e REFAZ as chaves de forma numérica
sort($myArray);
dump::p($myArray);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)*/
dump::p(array_keys($myArray),1);
/*
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
)
*/

//Ordena pelo VALOR e MANTEM as chaves 
$myArray = array('Three' => 3, 'Two' => 2, 'One' => 1);
asort($myArray);
dump::p($myArray);
/*
Array
(
    [One] => 1
    [Two] => 2
    [Three] => 3
)
*/

$myArray = array('Three' => 3, 'Two' => 2, 'One' => 1);
//Ordena pelo CHAVE em ordem ASC
ksort($myArray);
dump::p($myArray);
/*
Array
(
    [One] => 1
    [Three] => 3
    [Two] => 2
)
*/

//Ordena pelo CHAVE em ordem DESC (reverse)
krsort($myArray);
dump::p($myArray);
/*
Array
(
    [Two] => 2
    [Three] => 3
    [One] => 1
)
*/
//----------------------------------------------------------------------------------------------------
$arrNames = array('Jhon', 4=>'Peter', 'Angela');
dump::p($arrNames);
/*
Array
(
    [0] => Jhon
    [4] => Peter
    [5] => Angela
)
*/
//----------------------------------------------------------------------------------------------------
$arrRange = range(5, 3, 0.17);
dump::p($arrRange);
//----------------------------------------------------------------------------------------------------
//Pega um pedaço do array
$arrSlice = range(1, 5); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
dump::pf(array_slice($arrSlice, 2));			//Array ( [0] => 3 [1] => 4 [2] => 5 )
dump::pf(array_slice($arrSlice, 1, 3));			//Array ( [0] => 2 [1] => 3 [2] => 4 )
//Preserve Keys (4th parameter)
dump::pf(array_slice($arrSlice, 1, 3, true));	//Array ( [1] => 2 [2] => 3 [3] => 4 )

dump::pf(array_slice($arrSlice, -3));			//Array ( [0] => 3 [1] => 4 [2] => 5 )
dump::pf(array_slice($arrSlice, -4, -1));		//Array ( [0] => 2 [1] => 3 [2] => 4 )
//----------------------------------------------------------------------------------------------------
//Adiciona um elemento no INICIO do array, refazendo as chaves de forma ordenada
$arrUnShift = [7, 8, 9];
array_unshift($arrUnShift, 6);
dump::pf($arrUnShift);		//Array ( [0] => 6 [1] => 7 [2] => 8 [3] => 9 ) 

$arrUnShift2 = [4 => 7,  5 => 8, 15 => 9];
array_unshift($arrUnShift2, 6);
dump::pf($arrUnShift);	//Array ( [0] => 6 [1] => 7 [2] => 8 [3] => 9 ) //Recriou as chaves de forma ordenada
//----------------------------------------------------------------------------------------------------
//Remove um elemento do INICIO do array
$arrShift = [1, 2, 3];
$removido = array_shift($arrShift);
dump::pf($arrShift); //Array ( [0] => 2 [1] => 3 ) 
dump::df($removido); //int 1
//----------------------------------------------------------------------------------------------------
//Adicionando elementos no FIM do array
$arrPush = [1, 2, 3];
array_push($arrPush, 4);	//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 ) 
dump::pf($arrPush);
$arrPush[] = 5;
dump::pf($arrPush);			//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 ) 
//----------------------------------------------------------------------------------------------------
//Remove elementos no FIM do array
$arrPop = [11, 12, 13];
$removido = array_pop($arrPop);
dump::pf($arrPop); //Array ( [0] => 11 [1] => 12 ) 
dump::df($removido); //int 13
//----------------------------------------------------------------------------------------------------
$arr01 = array();
$arr02 = array(1 => "data");
//Reescreve os indices
$arr03 = array_merge($arr01, $arr02);
dump::pf($arr03); //Array ( [0] => data ) 

$arr01 = array(3 => 'texto');
$arr02 = array(1 => "data");
//Reescreve os indices de forma numerica (ASC)
$arr03 = array_merge($arr01, $arr02);
dump::pf($arr03); //Array ( [0] => texto [1] => data ) 

$arr01 = array('a1' => 'texto');
$arr02 = array('a1' => "data");
//Como a chave é "string", admite o segundo valor
$arr03 = array_merge($arr01, $arr02);
dump::pf($arr03); //Array ( [a1] => data ) 
//----------------------------------------------------------------------------------------------------
