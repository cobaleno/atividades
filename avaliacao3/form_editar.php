<html>
    <head>
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>    
            <form action="editar.php" method="post">
                <label>Digite o Código do Produto Para Editar:</label>
                <br/>
                <input type="text" name="id" />
                <br/>
                <label>Digite o Novo Nome do Produto:</label>
                <br/>
                <input type="text" name="nome" />
                <br/>
                <input type="radio" name="cor" value="amarelo" checked="checked" /><label>Amarelo</label>
                <input type="radio" name="cor" value="verde" /><label></label>Verde</label>
                <input type="radio" name="cor" value="vermelho" /><label>Vermelho</label>
                <br/>
                <input type="submit" value="Editar" />
            </form>
    </body>
</html>

<?php
    require_once("menu.php");    

    session_start();
    
    if(isset($_SESSION["cadastroProduto"])){
        $produtos = $_SESSION["cadastroProduto"];
        
        foreach($cadastro as $produto) {
           if($produto != null){
               echo "[$id] => " . $produto["nomeProduto"] . "<br/>";
           }
        }
    }
    else{
            echo "Não Existem Produtos Cadastrados";
    }

?>
