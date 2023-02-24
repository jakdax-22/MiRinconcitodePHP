

function insertar(preguntas, respuestas) {

    cadena = "preguntas=" + preguntas + "&respuestas=" + respuestas;
    $.ajax({
        type: "POST",
        url: "php/insert.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
                $('#buscador').load('componentes/buscador.php');
                alertify.success("Registro agregado");
                $('#modalNuevo')[0].reset();
            } else {
                alertify.error("Hubo algún fallo");
            }
        }
    });

}

function agregaform(datos) {

    array = datos.split('||');

    $('#idupdate').val(array[0]);
    $('#preguntasupdate').val(array[1]);
    $('#respuestasupdate').val(array[2]);

}

function update() {
    idupdate = $('#idupdate').val();
    preguntasupdate = $('#preguntasupdate').val();
    respuestasupdate = $('#respuestasupdate').val();

    cadenaupdate = "idupdate=" + idupdate + 
            "&preguntasupdate=" + preguntasupdate +
            "&respuestasupdate=" + respuestasupdate;

    $.ajax({
        type: "POST",
        url: "php/update.php",
        data: cadenaupdate,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
                $('#buscador').load('componentes/buscador.php');
                alertify.success("Registro actualizado");
            } else {
                alertify.error("Hubo algún fallo");
            }
        }
    });

}

function pregunta(id) {
    alertify.confirm('Eliminar Registro', '¿Esta seguro de eliminar este registro?',
            function () {
                deleted(id)
            }
    , function () {
        alertify.error('Cancelado')
    });
}

function deleted(iddelete) {

    cadenadelete = "iddelete=" + iddelete;

    $.ajax({
        type: "POST",
        url: "php/delete.php",
        data: cadenadelete,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
                $('#buscador').load('componentes/buscador.php');
                alertify.success("Registro eliminado");
            } else {
                alertify.error("Hubo algún fallo");
            }
        }
    });
}