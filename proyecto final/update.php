<h3>Modificar fila</h3>
<form name="form_faq" action="update.php">
    Introduce el número de la pregunta a modificar <input type ="text" name="numero" value=""/>        
    <br>
    Introduce la nueva pregunta <input type ="text" name="pregunta" value=""/>
    <br> 
    Introduce la nueva respuestas <input type ="text" name="respuesta" value=""/>
    <input type="submit" value="actualizar" name="bot_env" />
</form>
<?php
$id = @$_GET['numero'];
$pregunta = @$_GET['pregunta'];
$respuesta = @$_GET['respuesta'];
$server = "localhost";
$user = "root";
$pass = "";
$db = "preguntasrespuestas";
$conn = mysqli_connect($server, $user, $pass, $db);
$sql = "UPDATE preguntasrespuestas SET preguntas='$pregunta', respuestas='$respuesta' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Valor actualizado con éxito";
    } else {
        echo "error:" . mysqli_error($conn);
    }
    @mysqli_close($conn);
    
