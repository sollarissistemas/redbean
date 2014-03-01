<?php
require_once 'rb.php';
require_once 'IModel.php';

class ItemNotaFiscal implements IModel{
    var $tabela = 'tblitemnota';
    var $descricao;
    var $quantidade;
    var $valorunitario;
    var $valortotal;
    var $iditemnota = 0;
    var $idnota =0;
    
    public function __construct() {
      //R::setup('mysql:host=localhost;dbname=livraria','root','');
    }
    
    public function alterar() {
        
    }

    public function consultarItem($idnota, $iditemnota=0) {
        
        if ($idnota > 0){
            $result = R::find($this->tabela, ' id = ?',array($idnota));            
            return $result;
        }else{
            $result = R::find($this->tabela, 'tblnotafiscal_id = ?',array($iditemnota));
            return $result;
        }
    }

    public function excluir() {
        
    }

    public function inserir() {
        
    }

    public function consultar() {
        
    }

}
