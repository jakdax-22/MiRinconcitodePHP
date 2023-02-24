
<?php
session_start();
require_once "../php/conn.php";
$conn = conexion();
?>
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
        <div class="main-wrapper">            
            <div id="form1">
                
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    Nuevo
                </button>
                </div>
            <br>
        <table border="1" width="100%">
            <tr>
                <th width="41%"><center>Preguntas</center></th>
        <th width="46%"><center>Respuestas</center></th>
                <th width="13%"colspan="2"><center>Opción</center></th>
            </tr>

            <?php
            if (isset($_SESSION['consulta'])) {
                if ($_SESSION['consulta'] > 0) {
                    $id = $_SESSION['consulta'];
                    $sql = "SELECT id,preguntas,respuestas 
						from preguntasrespuestas where id='$id'";
                } else {
                    $sql = "SELECT id,preguntas,respuestas 
						from preguntasrespuestas";
                }
            } else {
                $sql = "SELECT id,preguntas,respuestas 
						from preguntasrespuestas";
            }

            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_row($result)) {

                $datos = $row[0] . "||" .
                        $row[1] . "||" .
                        $row[2];
                ?>

                <tr>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td>
                <center> <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditar" onclick="agregaform('<?php echo $datos ?>')">
                        Editar
                    </button>
                </center>
                </td>
                <td>
                <center><button class="btn btn-danger" 
                                onclick="pregunta('<?php echo $row[0] ?>')">
                        Borrar
                    </button>
                </center>
                </td>
                </tr>
                <?php
            }
            ?>
        </table>
        </div>
   