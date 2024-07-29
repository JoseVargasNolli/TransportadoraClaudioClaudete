<?php 
require_once('..\Model\Dao\Dao.php');

class CargaDao extends Dao {



public function getSelectAll() {
    $aRetorno = [];
    $sSql     = 'SELECT cod_car, peso_car, valor_car, destino, cliente, veiculo, funcionario, distancia FROM "Carga"';
    $oResult  = $this->getConexao()->executeQuery($sSql);
    while ($sfetch = $this->getConexao()->fetch($oResult)) {
        
        $aRetorno =  
    } 
}

public function insertModel(ModelBase $oModel) {

}


}