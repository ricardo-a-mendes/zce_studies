<?php

//printf - Imprime a string formatada
//sprintf - Retorna a string formatada
$format = 'There are %d monkeys in the %s';
$num = 5;
$location = 'Zoo';
printf($format,$num,$location);//There are 5 monkeys in the Zoo
echo '<br>';
printf("%f",1500); //1500.000000
echo '<br>';
printf("%d",-7.99); //-7
echo '<br>';
printf("%u",-7.99); //4294967289
echo '<br>';
printf("%c",65); //A, A = 65 em ASCII
echo '<br>';
printf("%b",65); //1000001 (binario)
echo '<br>';
echo 0xFF;
echo '<br>===========================================<br>';
$frase = sprintf($format,$num,$location);
echo $frase;
echo '<br>===========================================<br>';
$money1 = 68.75;
$money2 = 54.35;
echo $money = $money1 + $money2;
echo '<br>';
// echo $money irá mostrar "123.1";
$formatted = sprintf("%1.2f", $money);
echo $formatted;
echo '<br>';
printf("%01.2f", $money);
// echo $formatted irá mostrar "123.10"