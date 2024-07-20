<?php


class Veiculos {

    private $iCodigo;
    private $sMarca;
    private $sCor;
    private $sPlaca;
    private $sChassi;
    private $sTipoConsumo;



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
     * Get the value of sMarca
     */
    public function getMarca()
    {
        return $this->sMarca;
    }

    /**
     * Set the value of sMarca
     */
    public function setMarca($sMarca): self
    {
        $this->sMarca = $sMarca;

        return $this;
    }

    /**
     * Get the value of sCor
     */
    public function getCor()
    {
        return $this->sCor;
    }

    /**
     * Set the value of sCor
     */
    public function setCor($sCor): self
    {
        $this->sCor = $sCor;

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

    /**
     * Get the value of sChassi
     */
    public function getChassi()
    {
        return $this->sChassi;
    }

    /**
     * Set the value of sChassi
     */
    public function setChassi($sChassi): self
    {
        $this->sChassi = $sChassi;

        return $this;
    }

    /**
     * Get the value of sTipoConsumo
     */
    public function getTipoConsumo()
    {
        return $this->sTipoConsumo;
    }

    /**
     * Set the value of sTipoConsumo
     */
    public function setTipoConsumo($sTipoConsumo): self
    {
        $this->sTipoConsumo = $sTipoConsumo;

        return $this;
    }
}