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
            $_SESSION["data_hora"] = date("d/m/Y - h:i:s");

            header("location: area_restrita.php");
            exit;

        } 
    }
    header("location: index.php");
}


//Função de verificação de login (verifica se o usuário passou pelo processo de login):

function verificarLogin() {

    if ($_SESSION["id"] != session_id() || (empty($_SESSION["id"]))) {

        header("location: index.php");
    }

}


//Função de finalização de login:
//efetua a ação de sair do usuário destruindo a sessão

function finalizarLogin() {

    session_unset(); //limpa aa variáveis de sessão
    session_destroy(); //destrói a sessão ativa

    header("location: index.php");

}