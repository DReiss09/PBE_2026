<?php

class Matricula {

    private Aluno $aluno;
    private $plano;
    private $meses;
    private $modalidades;

    public function __construct(Aluno $aluno, $plano, $meses, $modalidades){
        $this->aluno = $aluno;
        $this->plano = $plano;
        $this->meses = $meses;
        $this->modalidades = $modalidades;
    }

    public function getAluno(){
        return $this->aluno;
    }

    public function getPlano(){
        return $this->plano;
    }

    public function getMeses(){
        return $this->meses;
    }

    public function getModalidades(){
        return $this->modalidades;
    }

    public function calcularValorPlano(){

        if ($this->plano == "basico"){
            return 80;
        } elseif ($this->plano == "plus"){
            return 120;
        } elseif {
            return 180;
        }

    }

    public function calcularValorModalidade($modalidade){
        if ($modalidade == "natacao"){
            return 60;
        } elseif ($modalidade == "funcional"){
            return 40;
        } elseif{
            return 50;
        }

    }

    public function calcularMensalidade(){
        $total = $this->calcularValorPlano();
        foreach ($this->modalidades as $modalidade){
            $total = $total + $this->calcularValorModalidade($modalidade);
        }
        return $total;
    }

    public function calcularPercentualDesconto(){
        if ($this->meses >= 12){
            return 20;
        } elseif ($this->meses >= 6){
            return 10;
        } else{
            return 0;
        }

    }

    public function calcularSubtotal(){
        return $this->calcularMensalidade() * $this->meses;
    }

    public function calcularDesconto(){
        return $this->calcularSubtotal() * ($this->calcularPercentualDesconto()/100);
    }

    public function calcularTotal(){
        return $this->calcularSubtotal() - $this->calcularDesconto();
    }

}
?>