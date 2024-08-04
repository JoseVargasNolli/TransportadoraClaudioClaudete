<?php 
require_once('..\Model\Dao\Dao.php');
require_once('..\Model\Carga.php');

class CargaDao extends Dao {

public function getSelectAll() {
    $aRetorno = [];
    $sSql     = 'SELECT cod_car, peso_car, valor_car, destino, cliente, veiculo, funcionario, distancia FROM "Carga"';
    $oResult  = $this->getConexao()->executeQuery($sSql);
    while ($sfetch = $this->getConexao()->fetch($oResult)) {
        $oModel = New Carga();
        $oModel->toModel($sfetch['cod_car'], $sfetch['peso_car'], $sfetch['valor_car'], $sfetch['destino'], $sfetch['veiculo'], $sfetch['cliente'], $sfetch['funcionario'], $sfetch['distancia']);
        $aRetorno[] =  $oModel;
    } 
    return $aRetorno;
}

public function insertModel(ModelBase $oModel) {
    $sql = "INSERT INTO Carga (cod_car, peso_car, valor_car, destino, cliente, veiculo, funcionario, distancia) VALUES (?, ?, ?, ?, ?, ?, ?, ?);"; 
    $this->getConexao()->executeInsert($sql, $oModel->getArray());
} 
}