<?php


require_once('..\Model\ModelBase.php');
class Funcionario  extends ModelBase {

    /** @var Integer  */
    private $iCodigo;
    /** @var Float  */
    private $iSalario;
    /** @var String  */
    private $sCpf;
    /** @var String  */
    private $Nome;
    /** @var String  */
    private $sCnh;


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
     * Get the value of iSalario
     */
    public function getSalario()
    {
        return $this->iSalario;
    }

    /**
     * Set the value of iSalario
     */
    public function setSalario($iSalario): self
    {
        $this->iSalario = $iSalario;

        return $this;
    }

    /**
     * Get the value of sCpf
     */
    public function getCpf()
    {
        return $this->sCpf;
    }

    /**
     * Set the value of sCpf
     */
    public function setCpf($sCpf): self
    {
        $this->sCpf = $sCpf;

        return $this;
    }

    /**
     * Get the value of Nome
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Set the value of Nome
     */
    public function setNome($Nome): self
    {
        $this->Nome = $Nome;

        return $this;
    }

    /**
     * Get the value of sCnh
     */
    public function getCnh()
    {
        return $this->sCnh;
    }

    /**
     * Set the value of sCnh
     */
    public function setCnh($sCnh): self
    {
        $this->sCnh = $sCnh;

        return $this;
    }

    
    public function toModel($iCodigo, $iSalario, $sCpf, $Nome, $sCnh) {
        $this->setCodigo($iCodigo);
        $this->setSalario($iSalario);
        $this->setCpf($sCpf);
        $this->setNome($Nome);
        $this->setCnh($sCnh);
    }

    public function getArray() {
        return [$this->getCodigo(), $this->getSalario(), $this->getCpf(), $this->getNome(), $this->getCnh()];
    }


    public function fromModel()  {
        return '<tr><td>' . $this->getCodigo() . '</td><td>' . $this->getSalario() . '</td><td>' . $this->getCpf() . '</td><td>' . $this->getNome() . '</td><td>' . $this->getCnh() . '</td><tr>';
    }
}