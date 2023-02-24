<?php
session_start();

unset($_SESSION['consulta']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>FAQ</title>
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

        <script src="librerias/jquery.min.js"></script>
        <script src="js/funciones.js"></script>
        <script src="librerias/bootstrap/js/bootstrap.js"></script>
        <script src="librerias/alertifyjs/alertify.js"></script>
        <script src="librerias/select2/js/select2.js"></script>


    </head>
    <style>
            #form1 {

                float: left;
                bottom: -50%;
            }
            #form2 {
                float: right;

            }
            .container {
                justify-content: space-between;
                flex-direction: column;
                height: 100vh;
                display: flex;
            }
            .container .btn-holder {
                justify-content: flex-end;
                display: flex;
            }

            table {
                border-collapse: collapse;
                width: 80%;
            }
            th, td {
                text-align: left;
                padding: 4px;
            }
            tr:nth-child(even){
                background-color: #f2f2f2
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
            .main-wrapper{
                width:80%;

                background:#E0E4E5;
                border:1px solid #292929;
                padding:25px;
                margin:auto;
                font-size:20px;
            }
            hr {
                margin-top: 5px;
                margin-bottom: 5px;
                border: 0;
                border-top: 1px solid #eee;
            }
            h2{
                font-size:24px;
            }
        </style>
    <body>
        <div class="main-wrapper">
            <h2><center>Preguntas y respuestas</center></h2> 
                    <div id="buscador"></div>
                    <div id="tabla"></div>
            <!-- Pop-up insertar -->


            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Agregar un nuevo registro</h4>
                        </div>
                        <div class="modal-body">
                            <label>Pregunta</label>
                            <textarea id="preguntas" rows="4" cols="55"></textarea><br>
                            <label>Respuesta</label>
                            <textarea id="respuestas" rows="4" cols="55"></textarea><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="insert">
                                Agregar
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Pop up update-->

            <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                        </div>
                        <div class="modal-body">
                            <textarea hidden="" id="idupdate"> </textarea>
                            <label>Pregunta:</label><br>
                            <textarea id="preguntasupdate" rows="4" cols="55"></textarea><br>
                            <label>Respuesta</label><br>
                            <textarea id="respuestasupdate" rows="4" cols="55"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" id="update" data-dismiss="modal">Actualizar</button>

                        </div>
                    </div>
                </div>
            </div>

    </body>
    </div>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla').load('componentes/tabla.php');
        $('#buscador').load('componentes/buscador.php');
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#insert').click(function () {
            preguntas = $('#preguntas').val();
            respuestas = $('#respuestas').val();
            insertar(preguntas, respuestas);
        });



        $('#update').click(function () {
            update();
        });

    });
</script>
