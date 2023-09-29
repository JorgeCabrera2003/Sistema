<?php 

    require_once('model/conexion.php');

    class CRUD extends Conexion
    {
        protected $campos;
	    protected $tabla;
        protected $conex;

        public function __construct() {
            $this->conex = new Conexion();
            $this->conex = $this->conex->Conex();
        }

        public function Create($data,$key,$Vkey){
			
			$con = $this->conex->prepare("SELECT * FROM $this->tabla WHERE $key=?");
			$con->execute([$Vkey]);
		    $valid = $con->fetch();
			
			if (!$valid) {
				$sql = "INSERT INTO $this->tabla() VALUES(";

				$datos = array();
				foreach ($this->campos as $dato => $value) {
					$datos[] = $data[$value];
					$sql = $sql.'?';
					if ($value!=end($this->campos)) {
						$sql = $sql.', ';
					}
				}

				$sql = $sql.')';

				$registro = $this->conex->prepare($sql);
				return $registro->execute($datos);
			} else {
				return false;
			}
			
        }
    }
    




?>