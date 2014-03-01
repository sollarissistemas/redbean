<?php
require_once '../../model/NotaFiscal.php';
require_once '../../model/ItemNotaFiscal.php';


require_once 'IController.php';

class NotaFiscalController implements IController{
    var $notafiscal;
    
    public function __construct() {
        $this->notafiscal = new NotaFiscal();
       
        $this->notafiscal->data = '2014-01-01';
        $this->notafiscal->numero = 1344;
        $this->notafiscal->remetente_id = 3;
        $this->notafiscal->destinatario_id = 4;
        
        $itemnota = new ItemNotaFiscal();
        $itemnota->descricao = 'Produto A';
        $itemnota->quantidade = 1000;
        $itemnota->valorunitario = 1.01;
        $itemnota->valortotal = 101000;
        
        $this->notafiscal->itemnota[] = $itemnota;

        $itemnota = new ItemNotaFiscal();
        $itemnota->descricao = 'Produto B';
        $itemnota->quantidade = 550;
        $itemnota->valorunitario = 1.01;
        $itemnota->valortotal = 5505.50;
        
        $this->notafiscal->itemnota[] = $itemnota;
        
        
    }
    
    public function consultar() {
        $result = $this->notafiscal->consultar();
        return $result;
    }

    public function consultarItemNota($idnota){
        $result = $this->notafiscal->consultarItemNota($idnota);
        return $result;
    }
    public function excluir() {
        
    }

    public function salvar() {
        if ($this->notafiscal->id == 0){
            $result = $this->notafiscal->inserir();
            echo $result;
        }else{
            $result = $this->notafiscal->alterar();
            echo $result;
        }
    }


}
