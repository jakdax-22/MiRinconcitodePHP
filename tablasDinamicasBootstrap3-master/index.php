<?php
session_start();

unset($_SESSION['consulta']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Tabla dinamica</title>
        <script src="librerias/jquery-3.6.0.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/funciones.js"></script>
        <script src="librerias/bootstrap/js/bootstrap.js"></script>
        <script src="librerias/alertifyjs/alertify.js"></script>
        <script src="librerias/select2/js/select2.js"></script>
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
       
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
    <body>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch static backdrop modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>       
        <br>
        <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
                    </div>
                    <div class="modal-body">
                        <label>Nombre</label>
                        <input type="text" name="" id="nombre" class="form-control input-sm">
                        <label>Apellido</label>
                        <input type="text" name="" id="apellido" class="form-control input-sm">
                        <label>Email</label>
                        <input type="text" name="" id="email" class="form-control input-sm">
                        <label>telefono</label>
                        <input type="text" name="" id="telefono" class="form-control input-sm">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
                            Agregar
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <div class="main-wrapper">
            <a name="arriba"></a> 
            <h2><center>Preguntas y respuestas</center></h2>  

            <div id="form1">


                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevo">
                    Nuevo
                </button>                
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
            <?php
            @session_start();
            require_once "php/conexion.php";
            $conexion = conexion();
            ?>
            <table border="1" width="100%">
                <tr>
                    <th width="41%">Preguntas</th>
                    <th width="46%">Respuestas</th>
                    <th width="13%">Opcion</th>
                </tr>


                <?php
                if (isset($_SESSION['consulta'])) {
                    if ($_SESSION['consulta'] > 0) {
                        $idp = $_SESSION['consulta'];
                        $sql = "SELECT * 
						from preguntasrespuestas where id='$idp'";
                    } else {
                        $sql = "SELECT * 
						from preguntasrespuestas";
                    }
                } else {
                    $sql = "SELECT * 
						from preguntasrespuestas";
                }

                $result = mysqli_query($conexion, $sql);
                while ($arr = mysqli_fetch_row($result)) {

                    $datos = $arr[0] . "||" .
                            $arr[1] . "||" .
                            $arr[2] . "||";
                    ?>

                    <tr>
                        <td><?php echo $arr[1] ?></td>
                        <td><?php echo $arr[2] ?></td>
                        <td>
                            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#Modal2" onclick="agregaform('<?php echo $datos ?>')">
                                Editar	
                            </button>
                            <br><br>
                            <button class="btn btn-outline-danger" 
                                    onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
                                Borrar	
                            </button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>        
    </div>

</div>

<!--        <div class="container">
            <div id="buscador"></div>
            <div id="tabla"></div>
        </div>

         Modal para registros nuevos 


        <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
                    </div>
                    <div class="modal-body">
                        <label>Nombre</label>
                        <input type="text" name="" id="nombre" class="form-control input-sm">
                        <label>Apellido</label>
                        <input type="text" name="" id="apellido" class="form-control input-sm">
                        <label>Email</label>
                        <input type="text" name="" id="email" class="form-control input-sm">
                        <label>telefono</label>
                        <input type="text" name="" id="telefono" class="form-control input-sm">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
                            Agregar
                        </button>

                    </div>
                </div>
            </div>
        </div>

         Modal para edicion de datos 

        <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                    </div>
                    <div class="modal-body">
                        <input type="text" hidden="" id="idpersona" name="">
                        <label>Nombre</label>
                        <input type="text" name="" id="nombreu" class="form-control input-sm">
                        <label>Apellido</label>
                        <input type="text" name="" id="apellidou" class="form-control input-sm">
                        <label>Email</label>
                        <input type="text" name="" id="emailu" class="form-control input-sm">
                        <label>telefono</label>
                        <input type="text" name="" id="telefonou" class="form-control input-sm">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>

                    </div>
                </div>
            </div>
        </div>-->

</body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla').load('componentes/tabla.php');
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#guardarnuevo').click(function () {
            nombre = $('#nombre').val();
            apellido = $('#apellido').val();
            email = $('#email').val();
            telefono = $('#telefono').val();
            agregardatos(nombre, apellido, email, telefono);
        });



        $('#actualizadatos').click(function () {
            actualizaDatos();
        });

    });
</script>