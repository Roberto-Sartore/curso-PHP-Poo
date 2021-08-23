<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero {
    
      public function alimentar() {
        echo "<p>Ração</p>";
    }

    public function emitirSom() {
        echo "<p>Latindo</p>";
    }
      public function enterrarOsso() {
        echo "<p>Enterrando osso</p>";
    }

    public function abanarRabo() {
        echo "<p>Abanando o rabo</p>";
    }
}
