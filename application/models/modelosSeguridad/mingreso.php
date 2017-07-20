<?php 

class Mingreso extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	public function evaluaDisponibilidad(){
		$sql = "SELECT * FROM estacionamiento WHERE status = 0 and id_estacionamiento > 0";
		$query = $this->db->query($sql);
		if($query->num_rows() > 1){
			//si el query trae algun registro, entoces SI tiene lugares disponibles 
			return 1;
		}else{
			//si no trae registro, entoces NO tiene lugares disponibles 
			return 0;
		}
	}	

	public function asignarCajon(){

		//Buscar el lugar disponible
		$sql =  'SELECT * FROM estacionamiento WHERE status  = 0 and id_estacionamiento > 0 ' .
				'ORDER BY id_estacionamiento ASC LIMIT 1';

		//Ejecutamos la consulta
		$query = $this->db->query($sql);
		$r = $query->row();
		$id = $r->id_estacionamiento;
		
		//actualizar el status del lugar
		$update = 'UPDATE estacionamiento SET status = 1 WHERE id_estacionamiento = ' . $id ;
		$this->db->query($update);

		//Guardamos las variables para retornarlas
		$estacionamiento = array(
			'id_estacionamiento' 	=> $r->id_estacionamiento,
			'nave'					=> $r->nave,
			'lugar'					=> $r->lugar
		);

		return $estacionamiento;
	}

	public function registrarEntrada($paramEntrada){

		$timezone = "America/Mexico_City";
		date_default_timezone_set($timezone);
		$entrada = date("H:i:s");
		$salida = '00:00:00';
		$fecha = date("Y-m-d");

		$acceso = array(
			'entrada' 				=> $entrada,
			'salida' 				=> $salida,
			'fecha' 				=> $fecha,
			'id_usuario' 			=> $paramEntrada['id_usuario'],
			'id_estacionamiento'	=> $paramEntrada['id_estacionamiento']
		);

		$this->db->insert('acceso',$acceso);
	}

	public function registrarSalida($paramSalida){

		$timezone = "America/Mexico_City";
		date_default_timezone_set($timezone);
		$salida = date("H:i:s");
		$fecha = date("Y-m-d");

		$id_usu = $paramSalida['id_usuario'];

		$sql = "SELECT * FROM acceso WHERE salida = '00:00:00' and id_usuario = '$id_usu' and fecha = '$fecha' LIMIT 1";
		//Ejecutamos la consulta
		$query = $this->db->query($sql);
		$r = $query->row();
		//de la consulta sacamos los parametros para actualizar la tabla
		$id_acceso = $r->id_acceso;
		$id_usuario = $r->id_usuario;
		$id_estacionamiento = $r->id_estacionamiento;

		$updateAcceso = "UPDATE acceso SET salida = '$salida' WHERE id_acceso = '$id_acceso' and id_usuario = '$id_usuario' ";
		$this->db->query($updateAcceso);

		$updateEstacionamiento = 'UPDATE estacionamiento SET status = 0 WHERE id_estacionamiento = ' . $id_estacionamiento ;
		$this->db->query($updateEstacionamiento);
	}

	public function validarMatricula($paramMatricula){
		$matricula = $paramMatricula['matricula'];

		$sql  = " SELECT ";
		$sql .= " usuarios.id_usuario, personal.foto, personal.nombre, personal.ap_paterno, personal.ap_materno, ";
		$sql .= " vehiculo.foto_vehiculo, vehiculo.placas, vehiculo.modelo, vehiculo.color ";
		$sql .= " FROM personal, vehiculo, usuarios ";
		$sql .= " WHERE personal.id_vehiculo = vehiculo.id_vehiculo ";
		$sql .= " AND personal.id_persona = usuarios.id_persona ";
		$sql .= " AND personal.matricula = '$matricula'"; 

		$query = $this->db->query($sql);

		if($query->num_rows() == 0){
			//No encontro la matricula			
			return 0;
		}else{
			//Existe la matricula
			//Guardamos las variables para retornarlas
			$r = $query->row();
			$validados = array(
				'id_usuario' 	=> $r->id_usuario,
				'foto' 			=> $r->foto,
				'nombre'		=> $r->nombre,
				'ap_paterno'	=> $r->ap_paterno,
				'ap_materno'	=> $r->ap_materno,
				'foto_vehiculo'	=> $r->foto_vehiculo,
				'placas'		=> $r->placas,
				'modelo'		=> $r->modelo,
				'color'			=> $r->color
			);

			return $validados;
		}
	}

	public function evaluaCamino($paramCamino){

		$id_usuario = $paramCamino['id_usuario'];

		$sql  = " SELECT id_acceso, salida, fecha, id_usuario, id_estacionamiento FROM acceso ";
		$sql .= " WHERE salida = '00:00:00' AND id_usuario = '$id_usuario' ";

		$query = $this->db->query($sql);

		if($query->num_rows() == 0){
			//si no trae registro, tiene que registrar la entrada
			return 0;			
		}else{
			//si el query trae algun registro, entoces tiene que registrar salida 
			return 1;
		}
	}

	public function muestraPenalizaciones($paramPenal){
		$id_usuario = $paramPenal['id_usuario'];

		$sql  = " SELECT id_detalle, nombre, motivo, sancion, descripcion, fecha_inicio, fecha_fin, status  ";
		$sql .= " FROM pp_detalle, penalizaciones, personal  ";
		$sql .= " WHERE personal.id_persona = pp_detalle.id_persona ";
		$sql .= " AND penalizaciones.id_penalizaciones = pp_detalle.id_penalizaciones ";
		$sql .= " AND pp_detalle.status = 1 ";
		$sql .= " AND pp_detalle.id_persona = '$id_usuario' ";

		$query = $this->db->query($sql);

		if($query->num_rows() == 0){
			//si no trae registro, tiene que registrar la entrada
			return 0;			
		}else{
			//si el query trae algun registro, entoces tiene que registrar salida 
			$r = $query->row();
			$penalizaciones = array(
				'id_detalle' 	=> $r->id_detalle,
				'nombre'		=> $r->nombre,
				'motivo'		=> $r->motivo,
				'sancion'		=> $r->sancion,
				'descripcion' 	=> $r->descripcion,
				'fecha_inicio'	=> $r->fecha_inicio,
				'fecha_fin'		=> $r->fecha_fin,
				'status'		=> $r->status
			);

			return $penalizaciones;
		}				
	}
}
?>