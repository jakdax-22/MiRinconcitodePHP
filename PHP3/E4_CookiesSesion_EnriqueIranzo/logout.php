<?php
session_start();
$old_user = $_SESSION['valid_user'];
unset($_SESSION['valid_user']);
session_destroy();
?>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Desconexión (Log out)</h1>
    <?php
    if (!empty($old_user))
    {
    echo '<b>Desconectando usuario</b><br><br>';
    }
    else
    {
     echo 'No estabas conectado <br>';
    }
    ?>
        <a href="login_valida.php">Volver a página Pincipal</a>
    </body>
</html>

