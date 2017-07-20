<?php 

class Maddpenalizacion extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	public function validarMatricula($paramMatricula){
		$matricula = $paramMatricula['matricula'];

		$sql  = " SELECT usuarios.id_usuario ";
		$sql .= " FROM personal, usuarios ";
		$sql .= " WHERE personal.id_persona = usuarios.id_persona ";
		$sql .= " AND personal.matricula = '$matricula'"; 

		$query = $this->db->query($sql);

		if($query->num_rows() == 0){
			//No encontro la matricula			
			return 0;
		}else{
			// Existe la matricula
			//Guardamos las variables para retornarlas
			$r = $query->row();
			$id_usuario = $r->id_usuario;

			return $id_usuario;
		}
	}

	public function registrarPenalizacion($paramPenal){
		$timezone = "America/Mexico_City";
		date_default_timezone_set($timezone);
		$fecha_inicio = date("Y-m-d");

		$datos = array(
			'id_persona' 		=> $paramPenal['id_persona'],
			'id_penalizaciones' => $paramPenal['id_penalizaciones'],
			'fecha_inicio' 		=> $fecha_inicio,
			'fecha_fin' 		=> $paramPenal['fecha_fin'],
			'descripcion' 		=> $paramPenal['descripcion'],
			'status'			=> $paramPenal['status']
		);

		$this->db->insert('pp_detalle',$datos);
	}	
}
?>