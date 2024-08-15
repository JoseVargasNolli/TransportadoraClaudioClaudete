<?php

require_once('..\View\ViewBase.php');

class ViewDestino extends ViewBase {


    public  function getTitulo() {
        return '<tr><th>Código</th><th>Descrição</th><tr>';
    }
}