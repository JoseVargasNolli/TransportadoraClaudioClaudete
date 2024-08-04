<?php
require_once('..\Model\Dao\Dao.php');
require_once('..\Model\Cliente.php');



class ClienteDao extends Dao {

    public function getSelectAll() {
        $aRetorno = [];
        $sSql     = 'SELECT cod_cli, nome_cli FROM "Cliente"';
        $oResult  = $this->getConexao()->executeQuery($sSql);
        while ($sfetch = $this->getConexao()->fetch($oResult)) {
            $oModel = New Cliente();
            $oModel->toModel($sfetch['cod_cli'], $sfetch['nome_cli']);
            $aRetorno[] =  $oModel;
        } 
        return $aRetorno;


    }

    public function insertModel(ModelBase $oModel) {
        $sSql = "INSERT INTO Cliente (cod_cli, nome_cli) VALUES (?, ?)";
        $this->getConexao()->executeInsert($sSql, $oModel->getArray());

    }
    

    
}

