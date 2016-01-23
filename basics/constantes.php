<?php
//Constantes tem escopo Global

define('teste_constante', 13);
echo teste_constante;
echo '<br>';

define('_testeconstante', 15);
echo _testeconstante;
echo '<br>';

define('MeuTesteconstante', 15, true);
echo meutesteconstante;
echo '<br>';

define('1testeconstante', 15);
//echo 1testeconstante; //Erro, a IDE marca como parse error!!

define('teste-constante', 13);
echo teste-constante; //Retorna erro por causa do "-"