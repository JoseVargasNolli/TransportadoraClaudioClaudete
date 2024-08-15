<?php

abstract class ViewBase {

    public function getTable($aModel) {
        $sRetorno = '<table>';
        $sRetorno .= $this->getTitulo();
        foreach ($aModel as $oModel) {
            $sRetorno .= $oModel->fromModel();
        }

        $sRetorno .= '</table>';
        return $sRetorno;
    }

    abstract function getTitulo();
}