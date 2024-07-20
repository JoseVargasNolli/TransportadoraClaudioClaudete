<?php
// cod_gasto, desc_gasto, Valor_gasto, Data_gasto, tipo_gasto, origem_gasto

class Gastos {

    private $iCodigo;
    private $sDescricao;
    private $iValor;
    private $sData;
    private $iTipo;
    private $iOrigem;
    private $iKm;

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
     * Get the value of sDescricao
     */
    public function getDescricao()
    {
        return $this->sDescricao;
    }

    /**
     * Set the value of sDescricao
     */
    public function setDescricao($sDescricao): self
    {
        $this->sDescricao = $sDescricao;

        return $this;
    }

    /**
     * Get the value of iValor
     */
    public function getValor()
    {
        return $this->iValor;
    }

    /**
     * Set the value of iValor
     */
    public function setValor($iValor): self
    {
        $this->iValor = $iValor;

        return $this;
    }

    /**
     * Get the value of sData
     */
    public function getData()
    {
        return $this->sData;
    }

    /**
     * Set the value of sData
     */
    public function setData($sData): self
    {
        $this->sData = $sData;

        return $this;
    }

    /**
     * Get the value of iTipo
     */
    public function getTipo()
    {
        return $this->iTipo;
    }

    /**
     * Set the value of iTipo
     */
    public function setTipo($iTipo): self
    {
        $this->iTipo = $iTipo;

        return $this;
    }

    /**
     * Get the value of iOrigem
     */
    public function getOrigem()
    {
        return $this->iOrigem;
    }

    /**
     * Set the value of iOrigem
     */
    public function setOrigem($iOrigem): self
    {
        $this->iOrigem = $iOrigem;

        return $this;
    }
}