<?php

require_once 'rb.php';

Abstract class AModel {
    var $tabela = '';
    
    public function __construct() {
        R::setup('mysql:host=localhost;dbname=livraria','root',''); 
    } 
    
    public function criarObjeto(){
        return R::dispense('tblremententedestinatario');
    }
    
    public function inserir($objeto) {
        $id = R::store($objeto);
        return $id;
    }
    
    public function alterar($objeto){
    
    }
    
    public function excluir($objeto) {

    }
    
    public function excluirTudo() {
        
    }
    
    public function consultar() {
        R::setup('mysql:host=localhost;dbname=livraria','root',''); 
        $result = R::findAll('tblremententedestinatario');
        var_dump($result);
        exit;
        return $result;
    }
        
}