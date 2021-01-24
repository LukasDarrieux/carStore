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

        function __construct(){

        }

        function getId(){
            return $this->id;
        }
        function setId($id){
            $this->id = $id;
        }

        function getMarca(){
            return $this->marca;
        }
        function setMarca($marca){
            $this->marca = $marca;
        }

        function getModelo(){
            return $this->modelo;
        }
        function setModelo($modelo){
            $this->modelo = $modelo;
        }

        function getVersao(){
            return $this->versao;
        }
        function setVersao($versao){
            $this->versao = $versao;
        }

        function getAno(){
            return $this->ano;
        }
        function setAno($ano){
            $this->ano = $ano;
        }

        function getPlaca(){
            return $this->placa;
        }   
        function setPlaca($placa){
            $this->placa = $placa;
        }

        function getFipe(){
            return $this->fipe;
        }   
        function setFipe($fipe){
            $this->fipe = $fipe;
        }

        function getPreco(){
            return $this->preco;
        }   
        function setPreco($preco){
            $this->preco = $preco;
        }
    }