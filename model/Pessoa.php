<?php
require_once 'rb.php';
//require_once 'AModel.php';

class Pessoa {
    var $id;
    var $nome;
    var $cnpj;
    
    
    public function __construct() {
        $this->tabela = 'tblremententedestinatario';
        R::setup('mysql:host=localhost;dbname=livraria','root','');
        
    }
    
    public function inserir() {
        
        $objeto = R::dispense($this->tabela);
        $objeto->nome = $this->nome;
        $objeto->cnpj = $this->cnpj;
        $this->id = R::store($objeto);
        return $this->id;
    }
    
    public function alterar() {
        $result = R::load($this->tabela, $this->id);
        $result->nome = $this->nome;
        $result->cnpj = $this->cnpj;        
        $this->id = R::store($result);
        return $this->id;
    }
    
    
    public function consultar(){
        $data = R::findAll($this->tabela);
        return $data;
    }
    
    public function excluir() {
        
        $result = R::load($this->tabela, $this->id);
        return R::trash($result); 
    }
}
