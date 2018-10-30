/*FUNCION PARA ABRIR DIALOG BOOSTRAP*/
function OpenDialogo(id, callBackOpen, callBackPorCerrar, callBackClose) {
    $('#' + id).off('shown.bs.modal hide.bs.modal hidden.bs.modal')
        .on('shown.bs.modal', function (e) {
            //CUANDO EL DIALOGO YA SE MOSTRÓ
            if (typeof callBackOpen != 'undefined')
                callBackOpen();
        }).on('hide.bs.modal', function (e) {
            //CUANDO EL DIALOGO SE ESTÁ CERRANDO
            if (typeof callBackPorCerrar != 'undefined')
                callBackPorCerrar(e);
        }).on('hidden.bs.modal', function (e) {
            //CUANDO EL DIALOGO YA SE OCULTÓ
            if (typeof callBackClose != 'undefined')
                callBackClose();
        }).modal({
            keyboard: false,
            backdrop: 'static'
        });
}


/*FUNCION QUE DEVUELVE UNA CADENA ALEATORIA DE N LOGITUD*/
function GenerarStringAleatorio(longitud) {
    var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
    var cadena = "";
    for (var i = 0; i < longitud; i++)
        cadena += caracteres.charAt(Math.floor(Math.random() * caracteres.length));
    return cadena;
}

