<?php
//configuraçoes do banco de dados

define('SERVIDOR','localhost');
define('USUARIO','root');
define('SENHA','');
define('BANCO','login-poo');

function limpaPost($dados){
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}

?>