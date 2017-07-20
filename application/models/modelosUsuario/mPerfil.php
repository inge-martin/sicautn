<?php
class MPerfil{
	private $pdo;

	public function __CONSTRUCT(){
		require_once 'application/config/mysql-login.php';
		try
		{	
			$this->pdo = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password,array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar($id_usu){
		try{
			$result = array();
			$sql = "SELECT ";
			$sql .= "personal.id_persona, personal.matricula, personal.turno, personal.nombre nombrePersonal, personal.ap_paterno, ";
			$sql .= "personal.ap_materno, personal.fecha_nacimiento, personal.sexo, personal.curp, personal.telefonoCasa, ";
			$sql .= "personal.telefonoCelular, personal.email, personal.licencia, personal.foto, carreras.nombre nombreCarrera, usuarios.usuario ";
			// $sql .= "direccion.calle, direccion.numero, direccion.manzana, direccion.lote,direccion.cp, estados.nombre nombreEstado, ";
			// $sql .= "municipios.nombre nombreMunicipio, localidades.nombre nombreLocalidades, tipo_usuarios.descripcion_usuario, vehiculo.placas, ";
			// $sql .= "vehiculo.modelo, vehiculo.foto_vehiculo, vehiculo.color, vehiculo.descripcion, vehiculo.ano, usuarios.usuario ";
			$sql .= "FROM personal, carreras, usuarios ";
			$sql .= "WHERE personal.id_carreras = carreras.id_carreras ";
			// $sql .= "AND personal.id_direccion = direccion.id_direccion ";
			// $sql .= "AND direccion.id_estado = estados.id_estado ";
			// $sql .= "AND direccion.id_municipio = municipios.id_municipio ";
			// $sql .= "AND direccion.id_localidad = localidades.id_localidad ";
			// $sql .= "AND personal.id_tipo_usuarios = tipo_usuarios.id_tipo_usuarios ";
			// $sql .= "AND personal.id_vehiculo = vehiculo.id_vehiculo ";
			$sql .= "AND personal.id_persona = usuarios.id_persona ";
			$sql .= "AND personal.id_persona = ?";
			$stm = $this->pdo->prepare($sql);
			$stm->execute(array($id_usu));

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new cPerfil();

				$alm->__SET('id_persona', $r->id_persona);
				$alm->__SET('matricula',      $r->matricula);
				$alm->__SET('turno',      $r->turno);
				$alm->__SET('nombre',       $r->nombrePersonal);
				$alm->__SET('ap_paterno', $r->ap_paterno);
				$alm->__SET('ap_materno',         $r->ap_materno);
			    $alm->__SET('fecha_nacimiento',         $r->fecha_nacimiento);
				$alm->__SET('sexo', $r->sexo);
				$alm->__SET('curp', $r->curp);
				$alm->__SET('telefonoCasa',      $r->telefonoCasa);
				$alm->__SET('telefonoCelular',      $r->telefonoCelular);
				$alm->__SET('email',       $r->email);
				$alm->__SET('licencia', $r->licencia);
				$alm->__SET('foto',         $r->foto);
				$alm->__SET('id_tipo_usuarios', $r->usuario);
				$alm->__SET('id_carreras',      $r->nombreCarrera);
				// $alm->__SET('id_penalizaciones',       $r->id_penalizaciones);
				// $alm->__SET('id_vehiculo', $r->id_vehiculo);
				// $alm->__SET('id_direccion',         $r->id_direccion);
				


				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id){
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM personal WHERE id_persona = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new cPerfil();

			   $alm->__SET('id_persona', $r->id_persona);
				$alm->__SET('matricula',      $r->matricula);
				$alm->__SET('turno',      $r->turno);
				$alm->__SET('nombre',       $r->nombre);
				$alm->__SET('ap_paterno', $r->ap_paterno);
				$alm->__SET('ap_materno',         $r->ap_materno);
			    $alm->__SET('fecha_nacimiento',         $r->fecha_nacimiento);
				$alm->__SET('sexo', $r->sexo);
				$alm->__SET('curp', $r->curp);
				$alm->__SET('telefonoCasa',      $r->telefonoCasa);
				$alm->__SET('telefonoCelular',      $r->telefonoCelular);
				$alm->__SET('email',       $r->email);
				$alm->__SET('licencia', $r->licencia);
				$alm->__SET('foto',         $r->foto);
				$alm->__SET('id_tipo_usuarios', $r->id_tipo_usuarios);
				$alm->__SET('id_carreras',      $r->id_carreras);
				$alm->__SET('id_penalizaciones',       $r->id_penalizaciones);
				$alm->__SET('id_vehiculo', $r->id_vehiculo);
				$alm->__SET('id_direccion',         $r->id_direccion);
				


			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id){
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM personal WHERE id_persona = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(cPerfil $data){
		try 
		{
			$sql = "UPDATE personal SET 
						matricula = ?,
						turno = ?,
						nombre = ?,
						ap_paterno = ?,
						ap_materno = ?,
						fecha_nacimiento = ?,
						sexo = ?,
						curp = ?,
						telefonoCasa = ?,
						telefonoCelular = ?,
						email = ?,
						licencia = ?,
						foto = ?,
						id_tipo_usuarios = ?,
						id_carreras = ?,
						id_penalizaciones = ?,
						id_vehiculo = ?,
						id_direccion = ?
				    WHERE id_persona = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					 
				
                       $data->__GET('matricula'),
						$data->__GET('turno'),
						$data->__GET('nombre'),
						$data->__GET('ap_paterno'),
						$data->__GET('ap_materno'),
						$data->__GET('fecha_nacimiento') ,
						$data->__GET('sexo') ,
						$data->__GET('curp') ,
						$data->__GET('telefonoCasa'),
						$data->__GET('telefonoCelular'),
						$data->__GET('email'),
						$data->__GET('licencia') ,
						$data->__GET('foto') ,
						$data->__GET('id_tipo_usuarios') ,
						$data->__GET('id_carreras'),
						$data->__GET('id_penalizaciones'),
						$data->__GET('id_vehiculo'),
						$data->__GET('id_direccion'),
                        $data->__GET('id_persona')



					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cPerfil $data){
		try 
		{
		$sql = "INSERT INTO personal (id_persona,matricula ,
						turno ,
						nombre ,
						ap_paterno ,
						ap_materno ,
						fecha_nacimiento ,
						sexo ,
						curp ,
						telefonoCasa ,
						telefonoCelular ,
						email ,
						licencia ,
						foto ,
						id_tipo_usuarios ,
						id_carreras ,
						id_penalizaciones ,
						id_vehiculo ,
						id_direccion  ) 
		        VALUES (?, ?,?,?,?,?,?,?, ?,?,?,?,?,?,?, ?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				        $data->__GET('id_persona'),
				        $data->__GET('matricula'),
						$data->__GET('turno'),
						$data->__GET('nombre'),
						$data->__GET('ap_paterno'),
						$data->__GET('ap_materno'),
						$data->__GET('fecha_nacimiento') ,
						$data->__GET('sexo') ,
						$data->__GET('curp') ,
						$data->__GET('telefonoCasa'),
						$data->__GET('telefonoCelular'),
						$data->__GET('email'),
						$data->__GET('licencia') ,
						$data->__GET('foto') ,
						$data->__GET('id_tipo_usuarios') ,
						$data->__GET('id_carreras'),
						$data->__GET('id_penalizaciones'),
						$data->__GET('id_vehiculo'),
						$data->__GET('id_direccion')
                        
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}