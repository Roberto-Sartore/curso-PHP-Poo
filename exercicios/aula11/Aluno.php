<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
   //Atributos
    private $matricula;
    private $curso;
    
    //Método
    public function pagarMensalidade(){
        echo "<p>Pagando Mensalidade do aluno <strong> " . $this->nome . "</strong></p>";
    }
    //Métodos especiais
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }





}

