<?php

namespace aluno;

class Pessoa {

     private $nome;

    function getNome()
    {
        return 'Aluno: ' . $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }
}
