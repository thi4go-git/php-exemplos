<?php

class Pessoa{

  private $nome;

  function falar(){
    echo "Olá pessoal, meu nome é: $this->nome";
  }

  // Getter para o atributo "nome"
  public function getNome(){
    return $this->nome;
  }

  // Setter para o atributo "nome"
  public function setNome($nome){
    $this->nome = $nome;
  }

}

interface AnaoInterface {
   function falarAnao();
}

class Anao extends Pessoa implements AnaoInterface{
  function falar(){
    echo "Olá pessoal, sou anão, meu nome é: " . $this->getNome();
  }

  function falarAnao(){
    echo "falarAnao INTERFACE";
  }
}

$matheus = new Pessoa();
$matheus->setNome("Matheus");
echo $matheus->getNome();
echo "<br>";
$matheus->falar();
//------------------------------------------------------
$anao = new Anao();
$anao->setNome("anao");
echo $anao->getNome();
echo "<br>";
$anao->falar();
echo "<br>";
$anao->falarAnao();