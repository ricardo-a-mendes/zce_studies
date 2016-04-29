<?php

function xyz()
{
    echo 'Saida XYZ';
}

$d = 'abc';
$abc = "xyz";
echo $$d . "<br>"; // xyz
$$d(); // Saida XYZ

echo '<br>';

$a = 2;
$b = 3;

function teste(){
    global $b;
    static $a;

    $a++;
    $b+=$a;

    global $a;
    $a += 2;
}
teste();
teste();
teste();
echo "$a, $b"; //8, 9
echo '<br>';
/*
function test($one, $two, &$three = 3)
{
    echo "[$one, $two, $three]\n";
    $three+=3;
    $two++;
}

$one = 21;
$two = 22;

test($one, $two, 23); //Fatal error: Only variables can be passed by reference
test($one, $two); //[21, 22, 3] + Notice: Undefined variable: three

echo "[$one, $two, $three]\n";
*/