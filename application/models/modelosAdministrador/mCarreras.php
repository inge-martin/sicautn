<?php
class MCarreras
{
	private $pdo;

	public function __CONSTRUCT()
	{
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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM carreras");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new cCarreras();

				$alm->__SET('id_carreras', $r->id_carreras);
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('descripcion', $r->descripcion);

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
			$stm = $this->pdo->prepare("SELECT * FROM carreras WHERE id_carreras = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new cCarreras();

			    $alm->__SET('id_carreras', $r->id_carreras);
				$alm->__SET('nombre',      $r->nombre);
				$alm->__SET('descripcion', $r->descripcion);

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
			          ->prepare("DELETE FROM carreras WHERE id_carreras = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(cCarreras $data)
	{
		try 
		{
			$sql = "UPDATE carreras SET 
						nombre = ?,
						descripcion = ?
				    WHERE id_carreras = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					 
					$data->__GET('nombre'),
					$data->__GET('descripcion'),
					$data->__GET('id_carreras')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cCarreras $data)
	{
		try 
		{
		$sql = "INSERT INTO carreras (id_carreras,nombre,descripcion) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
					$data->__GET('id_carreras'),
				    $data->__GET('nombre'),
					$data->__GET('descripcion')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}