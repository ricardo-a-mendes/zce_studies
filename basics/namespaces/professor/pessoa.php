<?php

namespace professor;

class Pessoa {

    private $nome;

    function getNome()
    {
        return 'Professor: ' . $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }
}
