<?php

class Pessoa
{
    private $_nome;
    private $_sexo;
    private $_idade;

    public function __construct(
        string $nome,
        string $sexo,
        int $idade
    )
    {
        $this->_nome = $nome;
        $this->_sexo = $sexo;
        $this->_idade = $idade;
    }

    public function getPessoa()
    {
        return '
            Nome:'.$this->getNome().
            '<br /> Sexo: '.$this->getSexo(). 
            '<br />Idade: '.$this->getIdade();
    }

    public function getNome() {
        return $this->_nome;
    }

    public function getSexo() {
        return $this->_sexo;
    }

    public function getIdade() {
        return $this->_idade;
    }
}