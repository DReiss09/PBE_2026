<?php

class Aula(){
    public $Nome
    public $nota1
    public $nota2
    public $média

    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->média = $this->calcularMedia();
    }
    public function calcularMedia(){
        return ($this->nota1 + $this->nota2)/2;
    }
}
$aluno = new aluno("leonardo",10, 9.9);
echo "<pre>";
print_r($aluno);
echo "</pre>";
