<html>
    <body>
        <form action="./EJ1_PDF3.php" method="POST">
            Nombre:<input type="text" name="nombre">
            <br>
            Empresa:<input type="text" name="empresa">
            <br>
            Telefono:<input type="text" name="tlf">
            <br>
            <input type="submit" value="Enviar">
        </form>

        <?php
        $nombre=$_POST["nombre"];
        $empresa=$_POST["empresa"];
        $tlf=$_POST["tlf"];


        if (empty($nombre) && empty($empresa) && empty($tlf)){
          echo "No se han establecido valores";
        } elseif (empty($nombre)){
            echo "No se ha establecido un nombre";
        } elseif (empty($empresa)){
            echo "No se ha establecido un nombre de empresa";
        } elseif (empty($tlf)){
            echo "No se ha establecido un numero de telefono";
        } else {
            echo "Se ha implementado el usuario correctamente";
        }
    

        ?>
    </body>
</html>