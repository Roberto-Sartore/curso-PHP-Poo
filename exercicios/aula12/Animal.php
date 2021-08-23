<?php

abstract class Animal {
    //Atributos
    protected $peso;
    protected $idade;
    protected $menbros;
    //métodos abstratos
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();
    //métodos especiais
    public function getPeso() {
        return $this->peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getMenbros() {
        return $this->menbros;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setMenbros($menbros): void {
        $this->menbros = $menbros;
    }


}
