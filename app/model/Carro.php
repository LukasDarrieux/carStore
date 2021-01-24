<?php

    namespace App\model;

    class Carro{
        
        private $id;
        private $marca;
        private $modelo;
        private $versao;
        private $ano;
        private $placa;
        private $fipe;
        private $preco;

        public function __construct(){

        }

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getVersao(){
            return $this->versao;
        }
        public function setVersao($versao){
            $this->versao = $versao;
        }

        public function getAno(){
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }

        public function getPlaca(){
            return $this->placa;
        }   
        public function setPlaca($placa){
            $this->placa = $placa;
        }

        public function getFipe(){
            return $this->fipe;
        }   
        public function setFipe($fipe){
            $this->fipe = $fipe;
        }

        public function getPreco(){
            return $this->preco;
        }   
        public function setPreco($preco){
            $this->preco = $preco;
        }
    }