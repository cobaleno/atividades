<?php

function validaPessoa($nome, $cpf, $nascimento, $sexo, $estado, $telefone, $observacoes){

    $formValido = true;
    
    $nome = trim($nome);
    if(empty($nome)){
        echo "Por Favor Digite o Nome.";
        echo"</br>";
        $formValido = false;
    }
    else if(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉíÍìÌôÔõÕóÓúÚùÙûÛçÇ\s]+$/", $nome)){
        echo "Formato Inválido Para o Campo Nome";
        echo"</br>";
        $formValido = false;
    }
    
    $cpf = trim($cpf);
    if(empty($cpf)){
        echo "O Campo CPF é Obrigatório <br/>";
        $formValido = false;
    }
    else if(!preg_match("/^\d{3}\\.\d{3}\\.\d{3}\\-\d{2}$/", $cpf)){
        echo "Campo CPF Inválido <br/>";
        $formValido = false;
    }
    
    if(empty($nascimento)){
        echo "Por Favor, Preencher o Campo Nascimento <br/>";
        $formValido = false;
    }        
    else if(!preg_match("/^\d{2}\\/\d{2}\\/\d{4}$/", $nascimento)){
        echo "Data Inválida, Utilize o Formato dd/mm/aaaa <br/>";
        $formValido = false;
    }
    else{
        $pedacos = explode('/', $nascimento);
        $dia = $pedacos[0];
        $mes = $pedacos[1];
        $ano = $pedacos[2];
        
        if(!checkdate($dia, $mes, $ano)){
            echo"Data é Inválida <br/>";
            $formValido = false;
        }
        
        else{
            $dataYmd = $ano.$mes.$dia;
            $dataAtual = date('Ymd');
            
            if($dataAtual < $dataYmd){
                echo "Não Existe Nascimento no Futuro <br/>";
                $formValido = false;
            }
        }
    }
    
    
    $sexo = null;
    if(!isset($sexo["sexo"])){
        $sexo = $sexo["sexo"];
    }
    else{
        echo "O Campo Sexo é Obrigatório <br/>";
        $formValido = false;
    }
    
    if($estado == -1){
        echo "Por Favor Selecione Um Estado <br/>";
        $formValido = false;
    }
    
    
    $telefone = trim($telefone);
    if(empty($telefone)){
        echo "O Campo Telefone é Obrigatório <br/> ";
        $formValido = false;
    }
    if(!preg_match("/^\d{4}-\d{4}$/", $telefone) and
       (!preg_match("/^\d{3}?\s\d{4}\\-\d{4}$/" , $telefone))){
        echo "Formato inválido para o campo telefone <br/>";
        $formValido = false;
    }
    
   
     $observacoes = trim($observacoes);
        if(empty($observacoes)){
        echo "O Campo Observação é Obrigatório <br/>";
        $formValido = false;
    }
    else if (!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÒòÒúÚùÙûÛçÇ\s]+$/", $observacoes)){
        echo "Formato Inválido Para o Campo Nome <br/>";
        $formValido = false;
    }
    
    return $formValido;
}

?>
