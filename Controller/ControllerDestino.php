<?php

$sServer = $_SERVER['DOCUMENT_ROOT'];
require_once($sServer. '/Claudio/View/ViewDestino.php');
require_once($sServer. '/Claudio/Model/Destino.php');
require_once($sServer. '/Claudio/Model/Dao/DestinoDao.php');

class ControllerDestino {
    


    public function getDestinoTable() {
        $oDestino = new DestinoDao();
        $oViewDestino = new ViewDestino();

        return $oViewDestino->getTable($oDestino->getSelectAll());
    }


    public function insert($iCodigo, $sNome) {
        $oDestino = new DestinoDao();
        $oModel =  new Destino();

        $oModel->setCodigo($iCodigo);
        $oModel->setNome($sNome);

        $oDestino->insertModel($oModel);
        return true;
    }
    
}