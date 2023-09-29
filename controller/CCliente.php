<?php 

    require_once('model/Usuario.php');
    $objcliente = new usuario();
    if (isset($_POST['enviar'])) {
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $contacto = $_POST['contacto'];
        $direccion = $_POST['direccion'];
        $estado = $_POST['Estado'];
        $foto = $_POST['foto'];
        $objcliente->set_cedula($cedula);
        $objcliente->set_nombre($nombre);
        $objcliente->set_contacto($contacto);
        $objcliente->set_direccion($direccion);
        $objcliente->set_estado($estado);
        $objcliente->set_foto($foto);
        $result = $objcliente->incluir();
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

    

 ?>