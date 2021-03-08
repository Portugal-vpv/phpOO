<?php

class Livro implements Publicacao
{
    private $_titulo;
    private $_autor;
    private $_totPaginas;
    private $_pagAtual;
    private $_aberto;
    private $_leitor;

    public function __construct(
        string $titulo,
        string $autor,
        int $totPaginas,
        int $pagAtual,
        bool $aberto,
        Pessoa $leitor
    ) {
        $this->_titulo = $titulo;
        $this->_autor = $autor;
        $this->_totPaginas = $totPaginas;
        $this->_pagAtual = $pagAtual;
        $this->_aberto = $aberto;
        $this->_leitor = $leitor;
    }

    public function getLivro() {
        return '
            Titulo:'.$this->getTitulo().
            '<br /> Autor: '.$this->getAutor(). 
            '<br />Paginas: '.$this->getTotPaginas(). 
            '<br />Pagina Atual: '.$this->getPagAtual(). 
            '<br />Aberto: '.$this->getAberto().
            '<br />Leitor: '.$this->_leitor->getPessoa();
    }

    public function getTitulo()
    {
        return $this->_titulo;
    }

    public function getAutor()
    {
        return $this->_autor;
    }

    public function getTotPaginas()
    {
        return $this->_totPaginas;
    }

    public function getPagAtual()
    {
        return $this->_pagAtual;
    }

    public function getAberto()
    {
        return $this->_aberto;
    }

    public function getLeitor()
    {
        return $this->_leitor;
    }   
    
    public function abrir() 
    {
        return 'Livro aberto';
    }

    public function fechar() 
    {
        return 'Livro fechado';
    }

    public function avancarPag() 
    {
        $this->_pagAtual++;
        return 'Página atual: '.$this->_pagAtual;
    }
    
    public function voltarPag() 
    {
        $this->_pagAtual--;
        return 'Página atual: '.$this->_pagAtual;
    }
    
}