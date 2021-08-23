<?php

require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Métodos especiais
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
                
    }
    public function getVolume() {
        return $this->volume;
    }
    public function getLigado() {
        return $this->ligado;
    }
    public function getTocando() {
        return $this->tocando;
    }
    public function setVolume($volume): void {
        $this->volume = $volume;
    }
    public function setLigado($ligado): void {
        $this->ligado = $ligado;
    }
    public function setTocando($tocando): void {
        $this->tocando = $tocando;
    }
     public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {        
        echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br> Volume: " . $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo " |";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "<br>Fechando Menu...";
    }
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 10);
        }
    }
    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 10);
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume > 0){
            $this->setVlume(0);
        }
    }
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume == 0){
            $this->setVolume(50);
        }
    } 
    public function play() {
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

    

}
