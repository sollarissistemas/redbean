<?php 

require_once '../../controller/PessoaController.php'; 


$pessoa = new Pessoa();
$pessoa->id = 17;

$pessoacontroller = new PessoaController($pessoa);

$pessoacontroller->excluir();
