<?php

require_once('..\Controller\ControllerDestino.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo (new ControllerDestino())->insert($_POST['codigo'], $_POST['nome']);
    //switch ($_POST['busca']) {
       
      //  default:
        //    return 'Requisição sem Retorno';
          //  break;
    //}
}