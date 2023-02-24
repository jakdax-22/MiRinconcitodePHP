<!DOCTYPE html>
<!--

-->
 <?php
 include './datPersonalesAlumnosBucle.php';
 $numAlumnos=3;
 ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">Datos Personales Alumnos</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <=$numAlumnos; $i++) 
                {
                // creamos una cadena variable para cada dato
                $vbleNom='nom_'.$i;
                $vbleApe='ape_'.$i;
                $vbleEdad='edad_'.$i;
                $vbleTlf='tlfMov_'.$i;
//                echo $vbleNom;
//                echo $$vbleNom;
                
//                $nombre=$nom_.$i;
//                $ape='ape_'.$i;
//                $edad='edad_'.$i;
//                $tlf='tlfMov_'.$i;
                     
                ?>
                <tr>
                    <td>Nombre</td>
                    <td>
                         <?php echo $$vbleNom;?>
                    </td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                     <td>
                         <?php echo $$vbleApe;?>
                    </td>
                </tr>
              
                <tr>
                   <td>Edad</td>
                    <td>
                         <?php echo $$vbleEdad;?>
                    </td>
                </tr>
                <tr>
                    <td>Tlf Móvil</td>
                    
                    <td>
                         <?php echo $$vbleTlf;?>
                    </td>
                </tr>
                
                 <tr >
                    <td colspan="2"><div align="center">=========</div></td>
                </tr>
                    
                <?php 
                 };
                ?>
            </tbody>
        </table>

    </body>
</html>
