<?php 

    require_once('model/conexion.php');

    class Usuario extends conexion{

        protected $cedula;
        protected $nombre;
        protected $apellido;
        protected $correo;
        protected $Fecha_nac;
        protected $telefono;
        protected $cargo;
        protected $condicion;
        protected $usuario;
        protected $contraseña;
        protected $rol;
        protected $area;

        function __construct()
        {
            parent::__construct();
            $this->conex = parent::Conex();

            //$this->conex = new Conexion();
            //$this->conex = $this->conex->Conex();
        }

        function set_cedula($cedula){
            $this->cedula = $cedula;
        }

        function get_cedula(){
            return $this->cedula;
        }

           function set_nombre($nombre){
            $this->nombre = $nombre;
        }

        function get_nombre(){
            return $this->nombre;
        }

        function set_apellido($apellido){
            $this->apellido = $apellido;
        }

        function get_apellido(){
            return $this->apellido;
        }

        function set_telefono($telefono){
            $this->telefono = $telefono;
        }

        function get_telefono(){
            return $this->telefono;
        }

       function set_FechaNacimiento($fecha_nacimiento){
            $this->fecha_nacimiento = $fecha_nacimiento;
        }

        function get_FechaNacimiento(){
            return $this->fecha_nacimiendo;
        }

        function set_cargo($cargo){
            $this->cargo = $cargo;
        }

        function get_cargo(){
            return $this->cargo;
        }

        function set_condicion($condicion){
            $this->condicion = $condicion_laboral;
        }

        function get_condicion(){
            return $this->condicion;
        }

        function set_usuario($usuario){
            $this->usuario = $usuario;
        }

        function get_usuario(){
            return $this->usuario;
        }

        function set_contraseña($contraseña){
            $this->contraseña = $contraseña;
        }

        function get_contraseña(){
            return $this->contraseña;
        }

        function set_rol($rol){
            $this->rol = $rol;
        }

        function get_rol(){
            return $this->rol;
        }

        function set_IDArea($ID_area){
            $this->ID_area = $ID_area;
        }

        function get_IDArea(){
            return $this->ID_area;
        }

        function ingresar(){
            $sql = "INSERT INTO usuario() VALUES(:Cedula,:nombre,:apellido,:correo,:Fecha_nac,:Foto,:telefono,:cargo,:condicion,:usuario,:contraseña,:rol,:area)";
            $registro = $this->conex->prepare($sql);

            $registro->bindParam(':Cedula',$this->cedula);
            $registro->bindParam(':nombre',$this->nombre);
            $registro->bindParam(':Cedula',$this->apellido);
            $registro->bindParam(':correo',$this->correo);
            $registro->bindParam(':Fecha_nac',$this->Fecha_nac);
            $registro->bindParam(':Foto',$this->foto);
            $registro->bindParam(':telefono',$this->telefono);
            $registro->bindParam(':cargo',$this->cargo);
            $registro->bindParam(':condicion',$this->condicion);
            $registro->bindParam(':usuario',$this->usuario);
            $registro->bindParam(':contraseña',$this->contraseña);
            $registro->bindParam(':rol',$this->rol);
            $registro->bindParam(':area',$this->area);

            return $registro->execute();

        }

        function consultar(){

        $registro="select * from usuario";
          $consulta = $this->conex->prepare($registro);
            $resul = $consulta->execute();
            $datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
             if ($resul) {
                 return $datos;
            }else{
                return $res = 0;
            }  
        }


        public function eliminar($cedulaE){
            $registro = $this->conex->prepare("DELETE FROM cliente WHERE cedula = :cedula");
            $cedula = $cedulaE;
            $registro->bindValue(":cedula",$cedula);
            $registro->execute();
        }


        /*public function modificar(){
            $registro = $this->conex->prepare("UPDATE cliente SET cedula = :cedula WHERE id = :id");
            $registro->bindValue(":cedula","cedula");
            $registro->bindValue(":id","id");
        }*/

       public function modificar($CedulaM){
            $registro = $this->conex->prepare("UPDATE cliente SET nombre = :nombre, telefono = :telefono, fecha_nacimiento = :fecha_nacimiento, cargo = :cargo, condicion_laboral = :condicion_laboral WHERE cedula = :cedula");
            var_dump($CedulaM);
            $registro->bindValue(':cedula',$CedulaM);
            $registro->bindParam(':nombre',$this->nombre);
            $registro->bindParam(':telefono',$this->telefono);
            $registro->bindParam(':fecha_nacimiento',$this->fecha_nacimiento);
            $registro->bindParam(':cargo',$this->cargo);
            $registro->bindParam(':condicion_laboral',$this->condicion_laboral);
            $registro->execute();
        }
        
    }
 ?>