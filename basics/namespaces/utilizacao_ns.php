<?php

namespace utilizacao_ns;
use aluno as a;
use professor;

//Nao e feito autoload automaticamente
require_once './aluno/pessoa.php';
require_once './professor/pessoa.php';

$aluno = new a\Pessoa();
$aluno->setNome('Ricardo');
$professor = new professor\Pessoa();
$professor->setNome('Amanda');
/*
//Se nao chamar 'professor' no use, pode-se colocar a barra '\'
//para indicar o path do namespace
$professor1 = new \professor\Pessoa();
$professor1->setNome('Amanda');
*/
echo $professor->getNome();
echo '<br>';
echo $aluno->getNome();

//Se nao declarar 'professor' no use, procura no namespace 'utilizacao'
//=> Fatal error: Class 'utilizacao\professor\Pessoa' not found
//$professor2 = new professor\Pessoa();
//$professor2->setNome('Amanda');

