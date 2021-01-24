<?php

    require "vendor/autoload.php";

    use \App\model\Carro;
    use \App\controller\CarroDAO;

    define("TITULO", "Cadastrar Carro");

    include_once("includes/header.php");
        
    if (isset($_POST["txtMarca"], $_POST["txtModelo"], $_POST["txtVersao"],$_POST["txtAno"],
        $_POST["txtPlaca"], $_POST["txtFipe"] ,$_POST["txtPreco"])) {

        $carro = new Carro;
        $carro->setMarca($_POST["txtMarca"]);
        $carro->setModelo($_POST["txtModelo"]);
        $carro->setVersao($_POST["txtVersao"]);
        $carro->setAno($_POST["txtAno"]);
        $carro->setPlaca($_POST["txtPlaca"]);
        $carro->setFipe($_POST["txtFipe"]);
        $carro->setPreco($_POST["txtPreco"]);

        $carroDAO = new CarroDAO;
        if(!$carroDAO->inserir($carro)){
            echo "<div class='alert alert-warning mt-3'>Erro ao cadastrar carro</div>";
        } else {
            header("Location: index.php?tipo=1&status=success");
        }
    }
    
    include_once("includes/cadastroCarro.php");
    include_once("includes/footer.php");