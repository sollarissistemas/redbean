<?php
    require_once '../../controller/PessoaController.php'; 
    $pessoa = new Pessoa();
    $pessoacontroller = new PessoaController($pessoa);
    $result = $pessoacontroller->consultar();
    var_dump($result);
    