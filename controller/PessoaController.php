<?php
require_once '../../model/Pessoa.php';
require_once 'IController.php';


class PessoaController implements IController{
    var $model;
    
    public function __construct($model) {

        $this->model = $model;
    }

    public function consultar() {
        $result = $this->model->consultar();
        return $result;
    }

    public function excluir() {
       $result =  $this->model->excluir();
       echo $result;
    }

    public function salvar() {
            
        if ($this->model->id == 0){
            $result = $this->model->inserir();
            echo $result;
        }else{
            $result = $this->model->alterar();
            echo $result;
        }        
    }

}