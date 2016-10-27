<?php

require_once("controllers/controller.php");

$mvc = new mvc_controller();

if(isset($_POST['formulario']) && $_POST['formulario'] == 'registrar_cliente'){
	$mvc->ingresarCliente($_POST['run'],$_POST['nombre'],$_POST['paterno'],$_POST['materno'],$_POST['nacimiento'],$_POST['correo'],$_POST['telefono'],$_POST['clave1']);
}else if(isset($_POST['formulario']) && $_POST['formulario'] == 'iniciar_sesion'){
	$mvc->iniciarSesion($_POST['run'],$_POST['clave1']);
}else if(isset($_GET['accion'])){
	$mvc->cargarPagina($_GET['accion'],'');
} else{
	$mvc->cargarPagina('content');
}

?>