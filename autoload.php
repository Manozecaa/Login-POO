<?php

function autoload($nomeClasse){
    $pasta = __DIR__.'/class/'.$nomeClasse.'.php';
    if(isset_file($arquivo)){
        require_once ($arquivo);
    }
}

spl_autoload_register('autoload');

?>