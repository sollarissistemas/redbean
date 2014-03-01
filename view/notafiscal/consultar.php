<?php

require_once '../../controller/NotaFiscalController.php'; 
$notafiscalcontroller = new NotaFiscalController();
$result = $notafiscalcontroller->consultar();

echo 'consultando os itens de uma nota fiscal';

$result2 = $notafiscalcontroller->consultarItemNota(61);

var_dump($result2);

echo 'conultando todas as notas \n';
var_dump($result);



