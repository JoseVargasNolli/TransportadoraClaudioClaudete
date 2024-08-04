<?php

require_once('..\Model\Dao\Dao.php');
require_once('..\Model\Gastos.php');


class GastosDao extends Dao {

    public function getSelectAll() {
        $aRetorno = [];
        $sSql     = 'SELECT cod_gasto, desc_gasto, valor_gasto, data_gasto, tipo_gasto, origem_gasto, km_gasto FROM Gastos';
        $oResult  = $this->getConexao()->executeQuery($sSql);
        while ($sfetch = $this->getConexao()->fetch($oResult)) {
            $oModel = New Gastos();
            $oModel->toModel($sfetch['cod_gasto'], $sfetch['desc_gasto'], $sfetch['valor_gasto'], $sfetch['data_gasto'], $sfetch['tipo_gasto'], $sfetch['origem_gasto'], $sfetch['km_gasto']);
            $aRetorno[] =  $oModel;
        } 
        return $aRetorno;


    }

    public function insertModel(ModelBase $oModel) {
        $sSql = "INSERT INTO Gastos (cod_gasto, desc_gasto, valor_gasto, data_gasto, tipo_gasto, origem_gasto, km_gasto) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $this->getConexao()->executeInsert($sSql, $oModel->getArray());

    }
    

    
}
