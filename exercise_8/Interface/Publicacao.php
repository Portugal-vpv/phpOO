<?php

interface Publicacao 
{

    public function abrir();

    public function fechar();

    public function avancarPag();
    
    public function voltarPag();
}