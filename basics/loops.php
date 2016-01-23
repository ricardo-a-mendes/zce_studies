<?php
$a = 10;
while ($a > 0)
{
    echo $a--.'<br>';
    if ($a < 7)
        break; //Encerra apenas o loop (Sai apenas do Loop)
}//Output de 10 a 7
echo '<hr>';
$b = 10;
while ($b > 0)
{
    echo $b--.'<br>';
    //Descomentar 2 linhas abaixo para testar
    //if ($b < 7)
    //    exit; //Encerra o script inteiro
}//Output de 10 a 7 e encerra TODO o script
echo '<hr>';
//----------------------------
$arr = array(1,2,3,4,5,6,7,8,9);
while (list($key, $value) = each($arr)) {
    if (!($key % 2)) { // salta numeros impares
        continue; //vai para o proximo elemento do loop
    }
    do_something($value); //executa somente nos pares
}
function do_something($value)
{
    echo 'do_something('.$value . ')<br>';
}
echo '<hr>';
//----------------------------
$i = 10;
while ($i > 0)
{
    echo $i--.'<br>';
}//Output de 10 a 1
echo '<hr>';
$j = 10;
do {
    echo $j.'<br>';
    $j--;
} while ($j > 0);//Output de 10 a 1
echo '<hr>';
//----------------------------
//Diferente do WHILE, o DO-WHILE sempre imprime a primeira ocorrencia
//isso porque a verificacao esta no final do script
$k = 0;
while ($k > 0)
{
    echo $k--.'<br>';
}//Não imprime nada
echo '<hr>';
$l = 0;
do {
    echo $l--.'<br>';
} while ($l > 0); //Output 0
echo '<hr>';
//----------------------------
$n = 0;
switch ($n) {
    case 0:
        echo "i equals 0";
    case 1:
        echo "i equals 1";
    case 2:
        echo "i equals 2";
}
//ATENCAO
//Se n = 0, os 3 'echo' serao impressos.
//Se n = 1, os 2 ultimos 'echo' serao impressos.
//Se n = 2, o ultimo 'echo' serao impressos.