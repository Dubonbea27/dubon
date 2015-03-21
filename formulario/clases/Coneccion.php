<?php
class Coneccion {
	private $usuario = 'root';
	private $clave = 'prueba';
	private $host = 'localhost';
}

public function conectar() {

}

error_reporting(0);
$coneccion = mysql_connect ($this->host, $this->usuario. $this->clave);
if($coneccion) {
	return '1';
}else{
	return "Error al conectar # de error:" .\mysql_errno();
}