<?php
//cod_car, peso_car, valor_car, destino, veiculo, cliente, funcionario, distancia

class Carga {


    private $iCodigo;
    private $iPeso;
    private $iValor;
    private $iDestino;
    private $iVeiculo;
    private $iCliente;
    private $iFuncionario;
    private $iDistancia;

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
     * Get the value of iPeso
     */
    public function getPeso()
    {
        return $this->iPeso;
    }

    /**
     * Set the value of iPeso
     */
    public function setPeso($iPeso): self
    {
        $this->iPeso = $iPeso;

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
     * Get the value of iDestino
     */
    public function getDestino()
    {
        return $this->iDestino;
    }

    /**
     * Set the value of iDestino
     */
    public function setDestino($iDestino): self
    {
        $this->iDestino = $iDestino;

        return $this;
    }

    /**
     * Get the value of iVeiculo
     */
    public function getVeiculo()
    {
        return $this->iVeiculo;
    }

    /**
     * Set the value of iVeiculo
     */
    public function setVeiculo($iVeiculo): self
    {
        $this->iVeiculo = $iVeiculo;

        return $this;
    }

    /**
     * Get the value of iCliente
     */
    public function getCliente()
    {
        return $this->iCliente;
    }

    /**
     * Set the value of iCliente
     */
    public function setCliente($iCliente): self
    {
        $this->iCliente = $iCliente;

        return $this;
    }

    /**
     * Get the value of iFuncionario
     */
    public function getFuncionario()
    {
        return $this->iFuncionario;
    }

    /**
     * Set the value of iFuncionario
     */
    public function setFuncionario($iFuncionario): self
    {
        $this->iFuncionario = $iFuncionario;

        return $this;
    }

    /**
     * Get the value of iDistancia
     */
    public function getDistancia()
    {
        return $this->iDistancia;
    }

    /**
     * Set the value of iDistancia
     */
    public function setDistancia($iDistancia): self
    {
        $this->iDistancia = $iDistancia;

        return $this;
    }
}