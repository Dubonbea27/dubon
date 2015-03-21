<html>
<body>
<?php
@$nombre = $_post ["nombre"];
@$edad = $_post["edad"];
@$municipio = $_post["municipio"];
@$telefono = $_post["telefono"];
@$casa = $_post["casa"];
@$celular = $_post["celular"];
$respuesta=$nombre+$edad+$municipio+$telefono+$casa+$celular;


?>

<form method "post" name "ejercico9" action ejercicio#9.php><br></p>
<p> Nombre:
 
 <input type "text" name="nombre"><br></p>

<p> Edad:
 
 <input type "text" name="edad"><br></p>

<p>Municipio:
 
 <input type "text" name="municipio"><br></p>

<p>Telefono: 

<input type "text" name= "telefono"><br></p>

<p>Casa:

<input type "text" name="casa"><br></p>

<p>Celular: 

<input type "text" name="celular"><br></p>

<input type "submit" value="enviar">

?>
</body>
</html>
