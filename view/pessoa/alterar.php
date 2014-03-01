<?php 

require_once '../../controller/PessoaController.php'; 


$pessoa = new Pessoa();
$pessoa->id = 18;
$pessoa->nome = 'jose da silva';
$pessoa->cnpj = '556677';

$pessoacontroller = new PessoaController($pessoa);

$pessoacontroller->salvar();
