<html>
<body>
<table>
<form name="GeneraContraseña" action="GeneraContraseñaFuncion.php" method="POST">
<tr><td>Long. de Básicos</td> <td><input type="text" name="Basicos" value="" size="20" /></td></tr>
<tr><td>Long. de Especiales</td> <td><input type="text" name="Especiales" value="" size="20" /></td></tr>
</table>
<p/>
<input type="radio" name="opcion" value="Basicos" checked="checked" />
Carácteres Básicos - Carácteres Especiales <br/>
<input type="radio" name="opcion" value="Basicos" />
Carácteres Especiales - Carácteres básicos <br/>
<input type="submit" value="Enviar" name="Env" />
</form>       
</body>
</html>
