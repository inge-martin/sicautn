<?php
class MPenalizaciones{
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

			$stm = $this->pdo->prepare("SELECT * FROM penalizaciones");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new cPenalizaciones();

				$alm->__SET('id_penalizaciones', $r->id_penalizaciones);
				$alm->__SET('motivo', $r->motivo);
				$alm->__SET('descripcion', $r->descripcion);
				$alm->__SET('sancion', $r->sancion);
		

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
			          ->prepare("SELECT * FROM penalizaciones WHERE id_penalizaciones = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new cPenalizaciones();
                $alm->__SET('id_penalizaciones', $r->id_penalizaciones);
				$alm->__SET('motivo', $r->motivo);
				$alm->__SET('descripcion', $r->descripcion);
				$alm->__SET('sancion', $r->sancion);
		


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
			          ->prepare("DELETE FROM penalizaciones WHERE id_penalizaciones = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(cPenalizaciones $data)
	{
		try 
		{
			$sql = "UPDATE penalizaciones SET 
						motivo = ?,
						descripcion = ?,
						sancion = ?
				    WHERE id_penalizaciones = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					 
					$data->__GET('motivo'),
					$data->__GET('descripcion'),
                    $data->__GET('sancion'),

					$data->__GET('id_penalizaciones')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cPenalizaciones $data)
	{
		try 
		{
		$sql = "INSERT INTO penalizaciones (id_penalizaciones,motivo,descripcion ,sancion ) 
		        VALUES (?, ?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				    $data->__GET('id_penalizaciones'),
				    $data->__GET('motivo'),
					$data->__GET('descripcion'),
                    $data->__GET('sancion')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}