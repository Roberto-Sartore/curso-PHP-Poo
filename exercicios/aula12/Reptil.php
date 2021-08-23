<?php

require_once 'Animal.php';
class Reptil extends Animal{
      //Atributo
    private $corEscama;
    
    public function alimentar() {
        echo "<p>Comendo Vegetais</p>";
    }

    public function emitirSom() {
       echo "<p>Som de Réptil</p>"; 
    }

    public function locomover() {
        echo "<p>Rastejando</p>";
    }
    //métodos especiais
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }



}
