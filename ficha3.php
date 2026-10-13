<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Nome: {$this->nome} - Idade: {$this->idade}<br>";
    }
}

$p1 = new Pessoa("Edson", 23);
$p2 = new Pessoa("Jorge", 24);

$p1->apresentar();
$p2->apresentar();


echo "exercicio2"



?>