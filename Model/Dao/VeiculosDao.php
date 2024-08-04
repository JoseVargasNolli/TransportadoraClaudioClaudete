<?php

require_once('..\Model\Dao\Dao.php');
require_once('..\Model\Veiculos.php');

class VeiculosDao extends Dao {


    public function getSelectAll() {
        $aRetorno = [];
        $sSql     = 'SELECT cod_vei, marca_vei, cor_vei, placa_vei, chassi_vei, tipo_consumo_vei FROM Veiculos';
        $oResult  = $this->getConexao()->executeQuery($sSql);
        while ($sfetch = $this->getConexao()->fetch($oResult)) {
            $oModel = New Veiculos();
            $oModel->toModel($sfetch['cod_vei'], $sfetch['marca_vei'], $sfetch['cor_vei'], $sfetch['placa_vei'], $sfetch['chassi_vei'], $sfetch['tipo_consumo_vei']);
            $aRetorno[] =  $oModel;
        } 
        return $aRetorno;
    }
    
    public function insertModel(ModelBase $oModel) {
        $sql = "INSERT INTO Veiculos (cod_vei, marca_vei, cor_vei, placa_vei, chassi_vei, tipo_consumo_vei)	VALUES (?, ?, ?, ?, ?, ?);"; 
        $this->getConexao()->executeInsert($sql, $oModel->getArray());
    } 
}
