<?php

//require_once('..\Controller\ControllerCadastro.php');
//require_once('..\Controller\ControllerCarga.php');
//require_once('..\Controller\ControllerCliente.php');
require_once('..\Controller\ControllerDestino.php');
//require_once('..\Controller\ControllerFuncionario.php');
//require_once('..\Controller\ControllerGastos.php');
//require_once('..\Controller\ControllerVeiculo.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_POST['busca']) {
        case 1:
            echo (new ControllerDestino())->getDestinoTable();
            break;
        case 2:
            echo (new ControllerVeiculo())->getVeiculoTable();
            break;
        case 3:
            echo (new ControllerGastos())->getGastosTable();
            break;
        case 4:
            echo (new ControllerFuncionario())->getFuncionarioTable();
            break;
        case 5:
            echo (new ControllerCliente())->getClienteTable();
            break;
        case 6:
            echo (new ControllerCarga())->getCargaTable();
            break;
        case 7:
            echo (new ControllerCadastro())->getCadastros();
            break;
        default:
            return 'Requisição sem Retorno';
            break;
    }
}