<?php
require_once 'rb.php';
require_once 'IModel.php';
require_once 'ItemNotaFiscal.php';

class NotaFiscal implements IModel{
    var $tabela = 'tblnotafiscal';
    var $id = 0;
    var $data;
    var $numero;
    var $remetente_id;
    var $destinatario_id;
    var $itemnota = array();
    
    public function __construct() {
        R::setup('mysql:host=localhost;dbname=livraria','root','');
    }
    
    public function alterar() {
        
    }

    public function consultar() {
        $result = R::findAll($this->tabela);
        return $result;
    }
    
    
    public function consultarItemNota($idnota){
        $itemnota = new ItemNotaFiscal();
        $result = $itemnota->consultarItem($idnota);
        return $result;
    }

    public function excluir() {
        
    }

    public function inserir() {
        
        R::freeze(true);
        R::begin();
        
        try{ 
            $notafiscal = R::dispense($this->tabela);
            $notafiscal->data = $this->data;
            $notafiscal->numero = $this->numero;
            $notafiscal->remetente_id = $this->remetente_id;
            $notafiscal->destinatario_id = $this->destinatario_id;
            
            $lista = array();
            for ($i =0 ; $i < count($this->itemnota);$i++){
                $itemnota = R::dispense($this->itemnota[$i]->tabela);

                $itemnota->descricao = $this->itemnota[$i]->descricao;
                $itemnota->quantidade = $this->itemnota[$i]->quantidade;
                $itemnota->valorunitario = $this->itemnota[$i]->valorunitario;
                $itemnota->valortotal = $this->itemnota[$i]->valortotal;
                
                $lista[] = $itemnota;
                
            }
            
            $notafiscal->ownItemnota =  $lista;
            $this->id = R::store($notafiscal);            
            
            R::commit();

        }  catch (Exception $e){
            R::rollback();
            echo $e;
        }

       
       return $this->id;
    }

}
