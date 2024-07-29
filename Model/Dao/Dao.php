<?php
require_once('..\Estrutura\SqlPostgress.php');
require_once('..\Model\ModelBase.php');

abstract class Dao {

    protected $oConexao;

    public function getConexao() {
        if(!isset($this->oConexao)) {
            $this->oConexao  =  new SqlPostgress();
            $this->oConexao->conection();
        }
        return $this->oConexao;
    }


    public abstract function getSelectAll();
    public abstract function insertModel(ModelBase $oModel);
}