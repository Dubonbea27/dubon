<?php
include './clases/Coneccion.php';
include './clases/AlumnoControlador.php';

$con = new Coneccion ();
$alumnoA = new AlumnoControlador();
if ($con->conectar()) {

}  else{
	print $con->conectar();
}
if(isset ($_REQUEST['bot'])) {

}else{
	print 'No se ha enviado datos';
}
$alumnoA->setId('NULL');
$alumnoA->setNombre($_REQUEST['nombre']);
$alumnoA->setApellido($_REQUEST['apellido']);
$alumnoA->setCarnet($_REQUEST['carnet']);
$alumnoA->setDir($_REQUEST['dir']);
$alumnoA->setFechaNac($_REQUEST['fechaNac']);
$alumnoA->setSeccion($_REQUEST['seccion']);

$datosObj=array($alumnoA->getId()
                $alumnoA->getNombre(),
                $alumnoA->getApellido(),
                $alumnoA->getFechaNac(),
                $alumnoA->getDir(),
                $alumnoA->getCarnet()
                );

print $alumnoA->guardarDatos($datosObj);