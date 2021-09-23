<?php

function lerArquivo($nomeArquivo) {

    //lê o arquivo como string
    $arquivo = file_get_contents($nomeArquivo); 

    //decodifica o arquivo, transformado-o em array
    $jsonArray = json_decode($arquivo);

    //devolve o array
    return $jsonArray; 
}


/* Parâmetros da função
1 - usuário vindo do form
2 - senha vinda do form
3 - dados do arquivo json usuário e senha
*/

function realizarLogin($usuario, $senha, $dados) {

    foreach ($dados as $dado) {

        if ($dado->usuario == $usuario && $dado->senha == $senha) {
            
            //variáveis de sessão
            $_SESSION["usuario"] = $dado->usuario;
            $_SESSION["id"] = session_id();
            $_SESSION["data-hora"] = date("d/m/Y - h:i:s");

            header("location: area_restrita.php");
            exit;

        } else {
            header("location: index.php");
        }
    }
    exit;
}