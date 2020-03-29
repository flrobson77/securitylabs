<?php
    class Caneta {
        private $modelo;
        private $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

//Metodos construtores

        public function Caneta($m, $c ,$p) {   //Metodo construtor igual classe
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }
        /*
        public function Caneta() {   //Metodo construtor igual classe
            $this->cor = "Preta";
            $this->ponta = "1.0";
            $this->tampar();
        }
        */

        /*
        public function __construct() {
            $this->cor = "Preta";
            $this->ponta = "1.0";
            $this->tampar();
        }
        */

        public function getModelo(){
            return $this->modelo;
        }
        
        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getCor(){
            return $this->cor;
        }
        
        public function setCor($c){
            $this->cor = $c;
        }
        
        public function getPonta(){
            return $this->ponta;
        }
        
        public function setPonta($p){
            $this->ponta = $p;
        }
  
        public function rabiscar() {
            if ($this->tampada == true) {
                echo ("<p> ERRO!! - Caneta tampada </p>");
            }
            else {
                echo ("<p> Estou rabiscando </p>");
            }
        }
       
        public function tampar() {
            $this->tampada = true;
        }
        
        public function destampar() {
            $this->tampada = false;
        }
    }