<?php
require_once 'model/Usuarios.php';

class SuperUsuario extends usuario{
	

	function __construct(){
		
		parent::__construct();

		$this->campos = array("Cedula", "Nombre", "Apellido", "Fecha_nac", "Correo", "Tlf", "Cargo", "Condicion_l", "Area", "Rol", "Nombre_usuario", "Contraseña");
		$this->tabla = "usuario";
	}

    
}

?>