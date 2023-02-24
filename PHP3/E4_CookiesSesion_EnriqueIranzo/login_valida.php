<?php
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
$userid = $_POST['userid'];
$password = $_POST['password'];

$hostname = 'localhost';
$user_bd = 'root';
$pass_bd = 'root';
$database="bd1_iaw";

$link = mysqli_connect($hostname, $user_bd, $pass_bd, $database);
if (!link)
{
echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
echo "errno de depuración: " . mysqli_connect_errno() . "<br>";
}
else{
    echo "Conexión exitosa<br>";
    $query= 'select * from usuarios'
            . "where user='$userid' "
            ." and pass=$password'";
    $result = mysqli_query($link, $query);
    $numfilas= mysqli_affected_rows($link);
    
    if ($numfilas>0)
    {
      $_SESSION['valid_user'] = $userid;
      echo "Usuario Existente<br>";
      mysqli_close($link);
    }
}
}
?>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Página Inicial</h1>
        <?php
        if (isset($_SESSION['valid_user']))
        {
            echo "Estas conectado como : " . $_SESSION['valid_user'] . "<br><br>";
            echo '<a href = "logout.php">Salir (Log out)</a><br>';
            
        }
        else
        {
            if (isset($userid))
                echo "No se ha podido realizar la conexión";
         else
             echo "No estas conectado .<br>";
        
echo '<form method="post" action="login_alumno.php">';
echo '<table>';
echo '<tr><td>Usuario:</td>';
echo '<td><input type="text" name="userid"></td></tr>';
echo '<tr><td>Password:</td>';
echo '<td><input type="password" name="password"></td></tr>';
echo '<tr><td colspan="2" align="center">';
echo '<input type="submit" value="Conectar"></td></tr>';
echo '</table></form>';
        }
?>
<br>
<a href="members_only.php">Sección Privada</a>       
</body>
</html>