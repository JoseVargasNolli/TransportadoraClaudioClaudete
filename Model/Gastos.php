<?php
require_once('..\Model\ModelBase.php');

class Gastos extends ModelBase {

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
    

    public function getKm()
    {
        return $this->iKm;
    }

    public function setKm($iKm): self
    {
        $this->iKm = $iKm;

        return $this;
    }


    public function toModel($iCodigo, $sDescricao, $iValor, $sData, $iTipo, $iOrigem, $iKm) {
        $this->setCodigo($iCodigo);
        $this->setDescricao($sDescricao);
        $this->setValor($iValor);
        $this->setData($sData);
        $this->setTipo($iTipo);
        $this->setOrigem($iOrigem);
        $this->setKm($iKm);
    }

    public function getArray() {
        return [$this->getCodigo(), $this->getDescricao(), $this->getValor(), $this->getData(), $this->getTipo(), $this->getOrigem(), $this->getKm()];
    }


    public function fromModel()  {
        return '<tr><td>' . $this->getCodigo() . '</td><td>' . $this->getDescricao() . '</td><td>' . $this->getValor() . '</td><td>' . $this->getData() . '</td><td>' . $this->getTipo() . '</td><td>' . $this->getOrigem() . '</td><td>' . $this->getKm() . '</td></tr>'; 
    }
}