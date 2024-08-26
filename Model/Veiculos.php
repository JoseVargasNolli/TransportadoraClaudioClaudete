<?php

require_once('..\Model\ModelBase.php');
class Veiculos extends ModelBase {

    private $iCodigo;
    private $sPlaca;
    



    /**
     * Get the value of iCodigo
     */
    public function getCodigo()
    {
        return $this->iCodigo;
    }

    /**
     * Set the value of iCodigo
     */
    public function setCodigo($iCodigo): self
    {
        $this->iCodigo = $iCodigo;

        return $this;
    }


    /**
     * Get the value of sPlaca
     */
    public function getPlaca()
    {
        return $this->sPlaca;
    }

    /**
     * Set the value of sPlaca
     */
    public function setPlaca($sPlaca): self
    {
        $this->sPlaca = $sPlaca;

        return $this;
    }


       
    public function toModel($iCodigo, $sMarca, $sCor, $sPlaca, $sChassi, $sTipoConsumo) {
        $this->setCodigo($iCodigo);
        $this->setPlaca($sPlaca);

    }

    public function getArray() {
        return [$this->getCodigo(), $this->getPlaca(),];
    }


    public function fromModel()  {
        return '<tr><td>' . $this->getCodigo() . '</td><td>' . $this->getPlaca() . '</td></tr>';
    }
}