<h3>Insertar nueva fila</h3>
<form name="form_faq" action="insert.php">
    Introduce la pregunta a insertar <input type ="text" name="pregunta" value=""/>        
    <br>
    Introduce la respuesta a insertar <input type ="text" name="respuesta" value=""/>        
    <br>
    <input type="submit" value="Insertar" name="bot_env" />
</form>
<?php
$preguntas = @$_GET['pregunta'];
$respuestas = @$_GET['respuesta'];

if (empty($preguntas) || empty($respuestas)) {
    echo "Debes rellenar todos los campos ";
} else {
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "preguntasrespuestas";
    $conn = mysqli_connect($server, $user, $pass, $db);
    $sql = "INSERT INTO preguntasrespuestas (preguntas,respuestas) VALUES ('$preguntas', '$respuestas')";

    if (mysqli_query($conn, $sql)) {
        echo "Valor introducido con éxito";
    } else {
        echo "error:" . mysqli_error($conn);
    }
    @mysqli_close($conn);
}

