

function buscarTela(iBusca) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            $('body').get(0).innerHTML = xhr.response;
        }
    };

    var encodedBusca    = encodeURIComponent(iBusca);

    xhr.open('POST', '../Controller/ControllerAjax.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.send('busca=' + encodedBusca);
}

function insertTela(icodigo, sNome) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            if(xhr.response == 1) {
                alert('Bdeuboa');
            }
        }
    };

    var encodedCodigo    = encodeURIComponent(icodigo);
    var encodedNome   = encodeURIComponent(sNome);

    xhr.open('POST', '../Controller/ControllerAjaxInsert.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.send('codigo=' + encodedCodigo + '&nome=' + encodedNome);
}
