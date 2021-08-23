<?php

require_once 'Aluno.php';
class Tecnico extends Aluno {
    //Atributos
    private $registroProfissional;
    //Método
    public function praticar(){
        echo "<p>Praticado com sucesso!</p>";
    }
    //Métodos especiais
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional): void {
        $this->registroProfissional = $registroProfissional;
    }


}
