<?php

require_once('..\Controller\ControllerCadastro.php');
require_once('..\Controller\ControllerCarga.php');
require_once('..\Controller\ControllerCliente.php');
require_once('..\Controller\ControllerDestino.php');
require_once('..\Controller\ControllerFuncionario.php');
require_once('..\Controller\ControllerGastos.php');
require_once('..\Controller\ControllerVeiculo.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_POST['busca']) {
       
        default:
            return 'Requisição sem Retorno';
            break;
    }
}