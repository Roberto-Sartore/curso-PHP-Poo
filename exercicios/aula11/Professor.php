<?php

require_once 'Pessoa.php';
class Professor extends Pessoa {
    //Atributos
    private $especialidade;
    private $salario;
    
    //método
    public function receberAum($aum){
        $this->salario += $aum;
        echo "<p> Consedido aumento de R$ $aum com sucesso!</p>";
    }
    //métodos especiais
    public function __construct($especialidade, $salario) {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }


}
