<?php

require_once('..\Model\Dao\Dao.php');
require_once('..\Model\Destino.php');

class DestinoDao extends Dao {

    public function getSelectAll() {
        $aRetorno = [];
        $sSql     = 'SELECT cod_destino, nome_destino  FROM "Destino"';
        $oResult  = $this->getConexao()->executeQuery($sSql);
        while ($sfetch = $this->getConexao()->fetch($oResult)) {
            $oModel = New Destino();
            $oModel->toModel($sfetch['cod_destino'], $sfetch['nome_destino']);
            $aRetorno[] =  $oModel;
        } 
        return $aRetorno;
    }

    public function insertModel($oModel) {
        $sSql = "INSERT INTO public.\"Destino\"(cod_destino, nome_destino) VALUES ({$oModel->getCodigo()}, '{$oModel->getNome()}')";
        $this->getConexao()->executeInsert($sSql);

    }
}