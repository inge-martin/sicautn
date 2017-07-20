<?php

class MAcceso
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

	public function Listar($id_usu){
		try{
			$result = array();
			$sql  = " SELECT acceso.entrada, acceso.salida, acceso.fecha, ";
			$sql .= " estacionamiento.nave, estacionamiento.lugar ";
			$sql .= " from acceso, estacionamiento ";
			$sql .= " WHERE acceso.id_estacionamiento = estacionamiento.id_estacionamiento ";
			$sql .= " and acceso.id_usuario = ? ";
			$sql .= " ORDER BY acceso.fecha DESC";
			$stm = $this->pdo->prepare($sql);
			$stm->execute(array($id_usu));

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new CAcceso();

				$alm->__SET('entrada', $r->entrada);
				$alm->__SET('salida', $r->salida);
				$alm->__SET('fecha', $r->fecha);
				$alm->__SET('id_acceso', $r->nave);
				$alm->__SET('id_usuario', $r->lugar);

				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM acceso WHERE id_acceso = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new cAcceso();

			    $alm->__SET('id_acceso', $r->id_acceso);
				$alm->__SET('entrada', $r->entrada);
				$alm->__SET('salida', $r->salida);
				$alm->__SET('fecha', $r->fecha);
				$alm->__SET('id_usuario', $r->id_usuario);


			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM acceso WHERE id_acceso = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(cAcceso $data)
	{
		try 
		{
			$sql = "UPDATE acceso SET 
						entrada = ?,
						salida = ?,
						fecha = ?,
						id_usuario = ?
				    WHERE id_acceso = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					 
					$data->__GET('entrada'),
					$data->__GET('salida'),
					$data->__GET('fecha'),
					$data->__GET('id_usuario'),

					$data->__GET('id_acceso')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cAcceso $data)
	{
		try 
		{
		$sql = "INSERT INTO acceso (id_acceso,entrada,salida,fecha,id_usuario) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
					$data->__GET('id_acceso'),
				    $data->__GET('entrada'),
					$data->__GET('salida'),
					$data->__GET('fecha'),
					$data->__GET('id_usuario')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}