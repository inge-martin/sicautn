<?php
class MVehiculo
{
	private $pdo;

	public function __CONSTRUCT()
	{
		require_once 'application/config/mysql-login.php';
		try
		{	
			$hostname = 'localhost';
			$database = 'eshos_18585009_sicautn';
			$username = 'root';
			$password = 'root'; 
			//$hostname = 'sql308.eshost.com.ar';
			// $database = 'eshos_18585009_sicautn';
			// $username = 'eshos_18585009';
			// $password = 'martin1037'; 	
			$this->pdo = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password,array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar($id_usu)
	{
		try{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM vehiculo where id_persona = ?");
			$stm->execute(array($id_usu));

			// if($stm->num_rows() == 0){
			// 	// no tiene vehiculo registrado
			// 	return 0;
			// }else{
				//ya cuenta con vehiculo
				foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r){
					$alm = new cVehiculo();
					$alm->__SET('id_vehiculo', $r->id_vehiculo);
					$alm->__SET('placas',      $r->placas);
					$alm->__SET('modelo',      $r->modelo);
					$alm->__SET('color',       $r->color);
					$alm->__SET('descripcion', $r->descripcion);
					$alm->__SET('ano',         $r->ano);
					$alm->__SET('foto_vehiculo', $r->foto_vehiculo);
					$result[] = $alm;
				}
				return $result;
			// }
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Obtener($id){
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM vehiculo WHERE id_vehiculo = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new cVehiculo();

			    $alm->__SET('id_vehiculo', $r->id_vehiculo);
				$alm->__SET('placas', $r->placas);
				$alm->__SET('modelo', $r->modelo);
				$alm->__SET('color', $r->color);
				$alm->__SET('descripcion', $r->descripcion);
				$alm->__SET('ano', $r->ano);
				$alm->__SET('foto_vehiculo', $r->foto_vehiculo);


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
			          ->prepare("DELETE FROM vehiculo WHERE id_vehiculo = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(cVehiculo $data){
		try 
		{
			$sql = "UPDATE vehiculo SET 
						placas = ?,
						modelo = ?,
						color = ?,
						descripcion = ?,
						ano = ?,
						foto_vehiculo = ?
				    WHERE id_vehiculo = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					 
					$data->__GET('placas'),
					$data->__GET('modelo'),
					$data->__GET('color'),
					$data->__GET('descripcion'),
					$data->__GET('ano'),
					$data->__GET('foto_vehiculo'),
					$data->__GET('id_vehiculo')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cVehiculo $data){
		try 
		{
		$sql = "INSERT INTO vehiculo (id_vehiculo,placas,modelo,color,descripcion,ano,foto_vehiculo) 
		        VALUES (?, ?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				    $data->__GET('id_vehiculo'),
				    $data->__GET('placas'),
					$data->__GET('modelo'),
					$data->__GET('color'),
					$data->__GET('descripcion'),
					$data->__GET('ano'),
					$data->__GET('foto_vehiculo')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}