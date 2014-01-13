<?php
    require_once("menu.php"); 

    session_start();
    
    $id = $_REQUEST["id"];
    
    if(!isset($_SESSION["cadastroProduto"])){
       echo "Não Existem Produtos Para Remover";
    }
   else{
        $cadastroProduto =& $_SESSION["cadastroProduto"];
        $cadastroProduto[$id] = null;
        
    }
        
            echo "Remoção Efetuada Com Sucesso!";    
?>
