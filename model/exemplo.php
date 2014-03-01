<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=livraria','root','');

//incluir
$remetente = R::dispense('tblremententedestinatario');
$remetente->cnpj = '86613403000121';
$remetente->nome = 'Empresa xpto';
$codigo = R::store($remetente);
echo $codigo;


//alterar
//$cad = R::load('tblremententedestinatario', 5);
//$cad->nome = 'Empresa xyz';
//R::store($cad);
//
////excluir
//$cad = R::load('tblremententedestinatario', 5);
//R::trash($cad);
//$cad = R::getAll('select * from tblremententedestinatario');
//var_dump($cad);
//$result = R::wipe('tblremententedestinatario');//deleta tudo!!!

//consultar
//$cad = R::findAll('tblremententedestinatario');
//var_dump($cad);
//$bla =R::load('tblremententedestinatario',$cad[3]->id);
//$bla->nome = 'xixicocomelquinha';
//R::store($bla);
//var_dump($bla);

//$data = R::getAll('select * from tblremententedestinatario');
//var_dump($data);


//$data = R::getRow("select * from tblremententedestinatario where id = ?",array(3));
//$data = R::getRow("select * from tblremententedestinatario where id = :id",array(':id' => 3));

//$data = R::exec('DELETE FROM tblremententedestinatario where id = ?',array(9));
//var_dump($data);