<?php
	class mregvehiculo extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		public function guardarVehiculo($paramVehiculo){
			$campos = array(
				'placas' 		=> $paramVehiculo['placas'],
				'modelo' 		=> $paramVehiculo['modelo'],
				'foto_vehiculo'	=> $paramVehiculo['foto_vehiculo'],
				'color' 		=> $paramVehiculo['color'],
				'descripcion' 	=> $paramVehiculo['descripcion'],
				'ano' 			=> $paramVehiculo['ano'],
				'id_persona' 	=> $paramVehiculo['id_persona']
			);
			$idPer = $paramVehiculo['id_persona'];
			$this->db->insert('vehiculo',$campos);
			// return $this->db->insert_id();
			$idVehi = $this->db->insert_id();

			$updateVehiculo = "UPDATE personal SET id_vehiculo = '$idVehi' WHERE id_persona = '$idPer'";
			$this->db->query($updateVehiculo);

		}//fin guardar
	}

?>