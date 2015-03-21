<html>
    <head>
    	<meta charset="utf_8">
    	<title>Formulario de Captura de datos</title>
    </head>
    <body>
    	<form action="manejadorAlumno.php" method="post">
    		<tr>
    			<td>
    				carnet:
    			</td>
    			<td>
    				<input type="text" name="carnet">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				nombre:
    			</td>
    			<td>
    				<input type="text" name="nombre">
    			</td>
    		</tr>
    		<tr>
    		    <td>
    		        apellido:
    		    </td>
    		    <td>
    		        <input type="text" name="apellido">
    		    </td>
    		</tr>
    		<tr>
    		    <td>
    		       fecha de nacimiento:
    		    </td>
    		    <td>
    		        <input type="text" name="fecha de nacimiento">
    		    </td>
    		</tr>
    		<tr>
    		    <td>
    		       direccion:
    		    </td>
    		    <td>
    		        <input type="text" name="direccion">
    		    </td>  
    		</tr>
    		<tr>
    			<td>
    				seccion:
    		    </td>
    		    <td>
    		    	<select name='seccion'>
    		    		<option value=""></option>
    		    		<option value="Sistemas">Sistemas</option>
    		    		<option value="manto">Mantenimiento</option>
    		        </select>
    		    </td>
    		</tr>
    		<tr>
    			<td colspan="2">
    				<input type="submit" name='bot' value='Enviar'>
                </td>
            </tr>
    	</form>	
    </body>
</html>	