<?php


class Destino {

    private $iCodigo;
    private $sNome;


    


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
     * Get the value of sNome
     */
    public function getNome()
    {
        return $this->sNome;
    }

    /**
     * Set the value of sNome
     */
    public function setNome($sNome): self
    {
        $this->sNome = $sNome;

        return $this;
    }
}