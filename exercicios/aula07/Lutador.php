<?php


class Lutador {
    //atributos
   private $nome;
   private $nacionalidade;
   private $idade;
   private $altura;
   private $peso;
   private $categoria;
   private $vitorias;
   private $derrotas;
   private $empates;
   
   //Métodos
   public function apresentar(){
       echo "<p>---------------------------------------------------------</p>";
       echo "<p>---------------------CHEGOU A HORA!----------------------<br/>";
       echo " O lutador " . $this->getNome();
       echo " Veio diretamente de " . $this->getNacionalidade();
       echo " tem ". $this->getIdade() . " anos e pesa ". $this->getPeso() . " Kg";
       echo "<br/> Ele tem ". $this->getVitorias(). " Vitorias ";
       echo $this->getDerrotas(). " Derrotas e ". $this->getEmpates(). " Empates</p>";
   }
   public function status(){
       echo "<p>---------------------------------------------------------</p>";
       echo "<p>".$this->getNome(). " é um peso ". $this->getCategoria();
       echo "<br/>e já ganhou ". $this->getVitorias(). "vezes";
       echo "<br/> Perdeu ". $this->getDerrotas(). "vezes e ";
       echo "<br/> empatou ". $this->getEmpates(). "vezes!</p>";
   }
   public function ganharLuta(){
       $this->setVitorias($this->getVitorias() + 1);
   }
   public function perderLuta(){
       $this->setDerrotas($this->getDerrotas() + 1);
   }
   public function empatarLuta(){
       $this->setEmpates($this->getEmpates() + 1);
   }
   public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
       $this->setNome($no);
       $this->setNacionalidade($na);
       $this->setIdade($id);
       $this->setAltura($al);
       $this->setPeso($pe);
       $this->setVitorias($vi);
       $this->setDerrotas($de);
       $this->setEmpates($em);
       
   }
   public function getNome() {
       return $this->nome;
   }
   public function getNacionalidade() {
       return $this->nacionalidade;
   }
   public function getIdade() {
       return $this->idade;
   }
   public function getAltura() {
       return $this->altura;
   }
   public function getPeso() {
       return $this->peso;
   }
   public function getCategoria() {
       return $this->categoria;
   }
   public function getVitorias() {
       return $this->vitorias;
   }
   public function getDerrotas() {
       return $this->derrotas;
   }
   public function getEmpates() {
       return $this->empates;
   }
   public function setNome($nome): void {
       $this->nome = $nome;
   }
   public function setNacionalidade($nacionalidade): void {
       $this->nacionalidade = $nacionalidade;
   }
   public function setIdade($idade): void {
       $this->idade = $idade;
   }
   public function setAltura($altura): void {
       $this->altura = $altura;
   }
   public function setPeso($peso): void {
       $this->peso = $peso;
       $this->setCategoria();
   }
   private function setCategoria(): void {
       if($this->peso < 52.2){
           $this->categoria="Inválido";           
       }elseif($this->peso<=70.3){
           $this->categoria="Leve";
       }elseif($this->peso<=83.9){
           $this->categoria="Médio";
       }elseif($this->peso<=120.2){
           $this->categoria="Pesado";
       }else{
           $this->categoria="Inválido";
       }
   }
   public function setVitorias($vitorias): void {
       $this->vitorias = $vitorias;
   }
   public function setDerrotas($derrotas): void {
       $this->derrotas = $derrotas;
   }
   public function setEmpates($empates): void {
       $this->empates = $empates;
   }



}
