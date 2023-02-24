<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insertar, Editar, Eliminar Registros  </title>
        <link type="text/css" href="librerias/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="librerias/alertify.css" rel="stylesheet">
        <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="librerias/jquery-3.6.0.min.js"></script>
        <script src="librerias/alertify.js"></script>


        <style>
            #form1 {
                float: left;
                bottom: -50%;
            }


            #form2 {
                float: right;
            }
            #main-container {
                float: left;
                position: relative;
                left: 45%;
            }
            #fixer-container {
                float: left;
                position: relative;
                left: -50%;
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
            <br><br>
            <div id="form1">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nuevo
                </button>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Añadir un registro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="insertar.php" id="insertarajax" method="post">
                                <div class="modal-body">                                
                                    <div class="col-xs-3">
                                        <textarea rows="5" cols="60" name="preguntas" placeholder="Pregunta"></textarea>
                                    </div>
                                    <div class="col-xs-3">
                                        <textarea rows="5" cols="60" name="respuestas" placeholder="Respuesta"></textarea>
                                    </div>                                      
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="insertar" id="insertar" class="btn btn-primary">Aceptar</button>


                                </div>
                            </form>
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
                    </div>
                    <div class="col-xs-3">
                        Respuesta <input type ="radio" name="busqueda" value="respuesta"/>
                    </div>
                    <table border="0">
                        <tr><td><input class="form-control" name="busca" type=text placeholder="Texto a buscar"/></td>
                            <td><input type="submit" class="btn btn-primary" value="Buscar" name="bot_env2" /></td><td>
                    </table>
                </form>
            </div>
            <div id="main-container">
                <div id="fixer-container">
                    <form name="form_faq3" action="index.php">
                        <div class="col-xs-3">
                            <input type="submit" class="btn btn-info" value="Ver todas las preguntas y respuestas" name="bot_env3" />
                        </div>
                    </form>
                </div>
            </div>
            <table border="1" width="100%">
                <tr>
                    <th width="41%">Preguntas</th>
                    <th width="46%">Respuestas</th>
                    <th width="13%">Opcion</th>
                </tr>
                <?php
                @$option = $_POST['busqueda'];
                @$search = $_POST['busca'];
                if (empty($option) || empty($search)) {
                    
                } else {
                    if (@$option == "respuesta") {
                        $sql = "Select * from preguntasrespuestas WHERE respuestas LIKE '%$search%' ";
                    } elseif (@$option == "pregunta") {
                        $sql = "Select * from preguntasrespuestas WHERE preguntas LIKE '%$search%'";
                    } else {
                        
                    }
                    @$result = db_query($sql);
                    while ($row = mysqli_fetch_object($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row->preguntas; ?></td>
                            <td><?php echo $row->respuestas; ?></td>
                            <td>

                                <a class="btn btn-outline-primary" href="editar2.php?id=<?php echo $row->id; ?>">Editar</a><br>
                                <br><a class="btn btn-outline-danger" href="borrar2.php?id=<?php echo $row->id; ?>">Borrar</a>
                        </tr>


                    <?php } ?>
                </table>
                <br>
                <div class="d-grid gap-2">             
                    <a class="btn btn-light" a href="#arriba">Volver arriba</a>
                </div>
            </div>
        </body>
    </html>
    <?php
}

