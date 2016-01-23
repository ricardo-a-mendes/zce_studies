<?php

class A
{

    public $teste = 10;

}

$a = new A;

$b = $a;

$a->teste = 15;

$b->teste = 20;

echo $a->teste;
