<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insertar, Editar, Eliminar Registros  </title>
        <link type="text/css" href="librerias/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="librerias/alertify.css" rel="stylesheet">
        <link type="text/css" href="librerias/default.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="librerias/jquery-3.6.0.min.js"></script>
        <script type="module" src="function.js"></script>

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
                width: 100%;
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

    </head>
    <?php
    include("function.php");
    ?>

    <body>  
        <a name="arriba"></a> 
        <div class="main-wrapper">
            <h2><center>Preguntas y respuestas</center></h2>  
            <br>
            <div id="form1">


                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Nuevo
                </button>


                <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Añadir un registro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">                                
                                <div class="col-xs-3">
                                    <textarea rows="5" cols="60" name="preguntas" id="preguntas" placeholder="Pregunta"></textarea>
                                </div>
                                <div class="col-xs-3">
                                    <textarea rows="5" cols="60" name="respuestas" id="respuestas" placeholder="Respuesta"></textarea>
                                </div>                                      
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" name="insertar" id="insertar" data-bs-dismiss="modal" class="btn btn-primary">Aceptar</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <script type="text/javascript">
                $(document).ready(function () {
                    $('#insertar').click(function () {
                        var datos = $('#insertarajax').serialize();
                        $.ajax({
                            type: "POST",
                            url: "insertar.php",
                            data: datos,
                            success: function (r) {
                                if (r === 1) {
                                    alert("Valor insertado con éxito");
                                } else {
                                    alert("Valor insertado con éxito");
                                }

                            }

                        });
                        return false;
                    });
                });
            </script>-->
            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">                                
                            <div class="col-xs-3">
                                <textarea rows="5" cols="60" name="preguntas" id="editpreguntas"></textarea>
                            </div>
                            <div class="col-xs-3">
                                <textarea rows="5" cols="60" name="respuestas" id="editrespuestas"></textarea>
                            </div>                                      
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" name="editar" id="insertar" data-bs-dismiss="editar" class="btn btn-primary">Aceptar</button>


                        </div>
                    </div>
                </div>
            </div>
            <div id="form2">
                <form name="form_faq2" action="index2.php" method="post">
                    <div class="col-xs-3">
                        <b>Buscar por:</b><br>   
                    </div>
                    <div class="col-xs-3">

                        Pregunta <input type ="radio" name="busqueda" value="pregunta"/>


                        Respuesta <input type ="radio" name="busqueda" value="respuesta"/>

                    </div>
                    <table border="0">
                        <tr><td><input class="form-control" name="busca" type=text placeholder="Texto a buscar"/></td>
                            <td><input type="submit" class="btn btn-primary" value="Buscar" name="bot_env2" /></td><td>
                    </table>                                             
                </form>
            </div>
            <br>
            <table border="1" width="100%">
                <tr>
                    <th width="41%">Preguntas</th>
                    <th width="46%">Respuestas</th>
                    <th width="13%">Opcion</th>
                </tr>
                <?php
                if (isset($_POST['mas'])) {
                    $file = 'file.txt';
                    if (!file_exists($file)) {
                        file_put_contents($file, 0);
                    }
                    $count = file_get_contents($file) + 1;
                    file_put_contents($file, $count);
                    $i = 100 * $count;
                    $sql = "select * from preguntasrespuestas LIMIT 0, " . 100 + $i;
                } else {
                    @unlink('file.txt');
                    $sql = "select * from preguntasrespuestas LIMIT 0, 100";
                }
                $result = db_query($sql);
                while ($row = mysqli_fetch_object($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row->preguntas; ?></td>
                        <td><?php echo $row->respuestas; ?></td>
                        <td>

                            <button class="btn btn-outline-primary" id="editar" data-bs-toggle="modal" data-bs-target="#Modal2">Editar</button><br>

                            <br><a class="btn btn-outline-danger" id="borrar" href="borrar.php?id=<?php echo $row->id; ?>">Borrar</a>
                    </tr>                    
                <?php }
                ?>
                <a name ="final"></a>
            </table>
            <br>
            <div class="d-grid gap-2">
                <form action="" method="post">
                    <button name="mas" class="btn btn-primary" type="submit">Ver más</button>

                    <a class="btn btn-light" a href="#arriba">Volver arriba</a>
                </form>

            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $('#insertar').click(function () {
            preguntas = $('#preguntas').val();
            respuestas = $('#respuestas').val();

            insertar(preguntas, respuestas);
        });
    });
</script>

