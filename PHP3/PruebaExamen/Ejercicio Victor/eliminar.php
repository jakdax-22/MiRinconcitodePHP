<html>
    <h2>ELIMINACION EN TABLAS</h2>
    <form name="alumno" action="eliminar.php" action="POST">
    <table>
        <th>Tabla Alumno</th>
        <tr><td>Nombre</td><td><input type="text" name="nombre" value=""></td></tr>
    <tr><td>Apellido </td><td><input type="text" name="nombre" value=""></td></tr>
    <tr><td><input type="submit" name="submit" value="Borrar"></tr></td>
    </table>
    </form>
    
    <form name="notas" action="eliminar.php" action="POST">
        <table>
            <tr><td>Alumno:</td><td><select name="alumno" id="alumno"></td></tr>
            
                
                
                
            </select>  
        </table>
    </form>
</html>
<?php



