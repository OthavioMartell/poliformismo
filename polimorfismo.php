<?php

abstract class Usuario {
    protected $pontos = 0;
    protected $numeroDeArtigos = 0;
    // Metodos abstrato e concretos

    Public Function setNumeroDeArtigos($nart){
    $NumDeArtigos=(int)$nart;
    $this->NumDeArtigos=$NumDeArtigos;
    }
    Public Function getNumeroDeArtigos(){
    return $this->NumArtigos;
    }
    abstract public function calcPontuacao();
}

class Autor extends Usuario{
    Public Function calcPontuacao(){
        return ($this->numeroDeArtigos * 10) + 20;
    }
}

class Editor extends Usuario{
    private $dados;
    Public Function __construct($dados){
        $this->dados=$dados;
    }
    public function calcPontuacao(){
        return ($this->dados * 6) +15;
    }
}

$autor1=new Autor(8);
$editor1=new Editor(15);

echo $autor1->calcPontuacao() . "\n";
echo $editor1->calcPontuacao();

?>