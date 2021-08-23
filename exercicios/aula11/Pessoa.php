<?php

abstract class Pessoa {
    //Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    
    //metodos
    public function fazerAniver(){
        $this->idade ++;
    }
    //metodos especiais
    
  
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }


    
}
