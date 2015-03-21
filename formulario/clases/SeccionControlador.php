<?php
class SeccionControlador extends Seccion {
	
}

public function guardarDatos($objSeccion) {
	$variableSql = "INSERT INTO alumno.seccion";
	$variableSql .="(id,nombre,escuela,";
	$variableSql .="VALUES" (";
	$variableSql .="'".$objSeccion[0]."',";
	$variableSql .="'".$objSeccion[1]."',";
	$variableSql .="'".$objSeccion[2]."');";
}

$bandera = mysql_query($variableSql);

if($bandera){
	$msg ="Datos almacenados";

}else{
	$msg = "Error al almacenar los datos # de error: ";
	$msg .=mysql_errno();
	$msg .="<br>";
	$msg .=mysql_error();
}
return $msg;
?>