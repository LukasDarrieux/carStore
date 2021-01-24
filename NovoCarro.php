<?php

    require "vendor/autoload.php";

    use \App\model\Carro;
    use \App\controller\CarroDAO;

    define("TITULO", "Cadastrar Carro");

    $mensagem = "";

    if(isset($_GET["retorno"]) == "erro") {

        if (!isset($_POST["txtMarca"]))       $mensagem = "Informe a marca do carro";
        else if (!isset($_POST["txtModelo"])) $mensagem = "Informe o modelo do carro";
        else if (!isset($_POST["txtVersao"])) $mensagem = "Informe a vesão do carro";
        else if (!isset($_POST["txtAno"]))    $mensagem = "Informe o ano do carro";
        else if (!isset($_POST["txtPlaca"]))  $mensagem = "Informe a placa do carro";
        else if (!isset($_POST["txtFipe"]))   $mensagem = "Informe a fipe do carro";
        else if (!isset($_POST["txtPreco"]))  $mensagem = "Informe o preço do carro";
        
    }

    include_once("includes/header.php");
    
    if (strlen(trim($mensagem)) > 0) {
        echo "<div class='alert alert-warning mt-3'>".$mensagem."</div>";
    } else { 
        
        if(!empty($_POST["txtMarca"])  && !empty($_POST["txtModelo"]) && !empty($_POST["txtVersao"]) 
        && !empty($_POST["txtAno"])   && !empty($_POST["txtPlaca"])   && !empty($_POST["txtFipe"])   
        && !empty($_POST["txtPreco"])) {

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
    }
    
    include_once("includes/cadastroCarro.php");
    include_once("includes/footer.php");