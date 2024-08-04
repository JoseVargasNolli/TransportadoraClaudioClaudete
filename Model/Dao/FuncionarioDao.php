<?php

require_once('..\Model\Dao\Dao.php');
require_once('..\Model\CFuncionario.php');



class FuncionarioDao extends Dao {


    public function getSelectAll() {
        $aRetorno = [];
        $sSql     = 'SELECT cod_func, sal_func, cpf, nome_func, cnh_func FROM Funcionario';
        $oResult  = $this->getConexao()->executeQuery($sSql);
        while ($sfetch = $this->getConexao()->fetch($oResult)) {
            $oModel = New Funcionario();
            $oModel->toModel($sfetch['cod_func'], $sfetch['sal_func'], $sfetch['cpf'], $sfetch['nome_func'], $sfetch['cnh_func']);
            $aRetorno[] =  $oModel;
        } 
        return $aRetorno;


    }

    public function insertModel(ModelBase $oModel) {
        $sSql = "INSERT INTO Funcionario (cod_func, sal_func, cpf, nome_func, cnh_func)	VALUES (?, ?, ?, ?, ?)";
        $this->getConexao()->executeInsert($sSql, $oModel->getArray());

    }
}