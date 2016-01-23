<?php

class pessoa
{

    var $nome;
    var $idade;
    var $skills;

    public function __construct()
    {
        $this->nome = 'Ricardo';
        $this->idade = 30;
        $this->skills = array(
            'php',
            'Mysql'
        );
    }

}

$array = array(
    'nome' => 'Ricardo',
    'idade' => 30,
    'skills' => array(
        'php',
        'Mysql'
    )
);

$json1 = json_encode($array); //{"nome":"Ricardo","idade":30,"skills":["php","Mysql"]}
echo $json1;
echo '<br>';
echo '<hr>';
$json2 = json_encode(new pessoa()); //{"nome":"Ricardo","idade":30,"skills":["php","Mysql"]}
echo $json2;
echo '<br>';

$str1 = json_decode($json1);
echo '<pre>';
print_r($str1); //Imprime um stdClass
echo '</pre>';
$str2 = json_decode($json2, true); //Imprime um Array
echo '<pre>';
print_r($str2);
echo '</pre>';