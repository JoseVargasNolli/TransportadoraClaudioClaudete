<?php
/**
 * Classe para efetuar a conexão com o banco POSTGRESS SQL 
 */
#[AllowDynamicProperties]
class SqlPostgress {

  /** @var String */
  private $endereco = '127.0.0.1';
  /** @var String */
  private $banco = 'postgres';
  /** @var String */
  private $usuario = 'postgres';
  /** @var String */
  private $senha = '123456';
  /** @var PDO */
  private $oConexao;

  /**
   * Cria a conexão com  o postgressql
   * @return PDOStatement
   */
  public function conection() {
      try {
          $this->oConexao = new PDO("pgsql:host=$this->endereco;port=5432;dbname=$this->banco", $this->usuario, $this->senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
          return $this->oConexao;
      } catch (PDOException $e) {
          echo $e->getMessage();
      }
  }

  /**
   * Executa o Sql na base do postgress
   * @param String $sSql
   * @param Mixed[] $oValores
   * @return PDOStatement
   */
  public function executeQuery($sSql, $oValores = []) {
    try {
        return $this->oConexao->query($sSql, PDO::FETCH_ASSOC);
    } catch (\Throwable $th) {
        echo $th;
    }
  }

  public function executeInsert($sSql,  $aValores = []) {
    try {
        return $this->oConexao->prepare($sSql)->execute();
    } catch (\Throwable $th) {
        echo $th;
    }
  }

  /**
   * Obtem os dados do resultado da query
   * @param PDOStatement
   * @return Array
   */
  public function fetch($oResult) {
    try {
        return $oResult->fetch(PDO::FETCH_ASSOC);
    } catch (\Throwable $th) {
        echo $th;
    }
  }
}