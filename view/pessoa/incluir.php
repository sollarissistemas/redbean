<?php 

require_once '../../controller/PessoaController.php'; 


$pessoa = new Pessoa();
$pessoa->id = 0;
$pessoa->nome = 'jose da silva';
$pessoa->cnpj = '400';
$pessoacontroller = new PessoaController($pessoa);
$pessoacontroller->salvar();
