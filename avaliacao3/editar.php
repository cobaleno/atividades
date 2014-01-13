<?php
    require_once("menu.php"); 

    session_start();
    
    $id = $_REQUEST["id"];
    $produtoNovo = $_REQUEST["nome"];
    
    if(!isset($_SESSION["cadastroProduto"])){
       echo "Não Existem Produtos Para Editar";
    }
   else{
        $cadastroProduto = $_SESSION["cadastroProduto"];
        $produto = array("nome" => $produtoNovo);
        $cadastroProduto[$id] = $Produto;
   }
   echo "Edição Efetuada com Sucesso!";

?>
