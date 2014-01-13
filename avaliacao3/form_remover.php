<html>
    
    <head>
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>    
            <form action="remover.php" method="post">
                <label>Digite o Código do Produto Para Remover:</label>
                <input type="text" name="id" />
                <input type="submit" value="remover" />
            </form>
    </body>
</html>

<?php
    session_start();
    
    if(isset($_SESSION["cadastroProduto"])){
        $cadastroProduto = $_SESSION["cadastroProduto"];
        
        foreach($cadastroProduto as $produto){
           if($produto != null){
        
            echo ($produto["nomeProduto"]) . "<br/>";
           }
        }
    }
    else{
            echo "Não Existem Produtos Cadastrados";
    }
?>
