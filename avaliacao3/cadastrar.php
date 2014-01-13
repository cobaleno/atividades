<?php
    require_once("menu.php"); 

    session_start();
    
        $nomeProduto = $_REQUEST["nomeProduto"];
        $produtoNovo = $_REQUEST["produtoNovo"];
        $cor = $_REQUEST["cor"];
        $prazo = $_REQUEST["prazo"];
        $detalhe = $_REQUEST["detalhe"];
        
    
    if(!isset($_SESSION["cadastroProduto"])){
        $_SESSION["cadastroProduto"] = array();
    }
   
    /*obter os dados do formulário*/
    $produto = array("nomeProduto" => $nomeProduto
                    , "produtoNovo" => $produtoNovo
                        , "cor" => $cor
                        , "prazo" => $prazo
                        , "detalhe" => $detalhe);
    
    array_push($_SESSION["cadastroProduto"], $produto);
    /*FIM - Obter os dados do formulário*/
    
    echo "Cadastro de Produto Efetuado Com Sucesso!";
    
?>
