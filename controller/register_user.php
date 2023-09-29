<?php 
	if (!empty($_GET['page'])) {
		$page = $_GET['page'];
	}

	if (is_file("view/".$page.".php")) {
		require_once "model/superusuario.php";
		if ($_POST) {
		$super = new superusuario();

		$data = array();
        $data['Tlf'] = "";

		foreach ($_POST as $Dato => $value) {

			if ($Dato == 'particle' || $Dato == 'phone') {
                $data['Tlf'] = $data['Tlf'].$value;
			} else { if ($Dato != 'Foto') 
				$data[$Dato] = $value;
			}
			
		}

        require_once('model/superusuario.php');
    	$objcliente = new usuario();

    	if (isset($_POST['enviar'])) {

    		print_r($_POST);
	        $cedula = $_POST['cedula'];
	        $nombre = $_POST['nombre'];
	        $apellidp = $_POST['apellido'];
	        $correo = $_POST['correo'];
	        $direccion = $_POST['direccion'];
	        $Fecha_nac = $_POST['fecha_nac'];
	        $telefono = $_POST['telefono'];
	        $cargo = $_POST['cargo'];
	        $condicion = $_POST['condicion'];
	        $usuario = $_POST['usuario'];
	        $contraseña = $_POST['contraseña'];
	        $rol = $_POST['rol'];
	        $area = $_POST['area'];

	        $super->set_cedula($cedula);
	        $super->set_nombre($nombre);
	        $super->set_apellido($apellido);
	        $super->set_correo($correo);
	        $super->set_FechaNacimiento($Fecha_nac);
	        $super->set_telefono($telefono);
	        $super->set_cargo($condicion);
	        $super->set_condicion($condicion);
	        $super->set_usuario($usuario);
	        $super->set_contraseña($contraseña);
	        $super->set_rol($rol);
	        $super->set_area($area);
	        $result = $super->ingresar();
        if ($result == 1) {
            require_once("RegistrarCliente.php");
            echo "<script>alert('Cliente Registrado')</script>";
        }
        else{
            echo "<script>alert('Cliente Fallo')</script>";   
        }

    }else if(isset($_POST['mostrar'])){
        $registro = $objcliente->consultar();
        require_once ("MostrarCliente.php");
    }
    elseif (isset($_POST['Registrar'])) {
        $registro = $objcliente->modificar();
        require_once ("ModificarCliente.php");
    }
        }
		require_once "view/$page.php";
	} else {
		require_once "view/404.php";
	}
 ?>