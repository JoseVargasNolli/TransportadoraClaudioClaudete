

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
