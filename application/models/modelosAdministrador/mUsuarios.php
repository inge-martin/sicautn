<?php
class MUsuarios
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

			$stm = $this->pdo->prepare("SELECT * FROM usuarios");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new CUsuarios();

				$alm->__SET('id_usuario', $r->id_usuario);
				$alm->__SET('usuario', $r->usuario);
				$alm->__SET('contrasena', $r->contrasena);
				$alm->__SET('id_persona', $r->id_persona);


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
			          ->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new CUsuarios();

			    $alm->__SET('id_usuario', $r->id_usuario);
				$alm->__SET('usuario', $r->usuario);
				$alm->__SET('contrasena', $r->contrasena);
				$alm->__SET('id_persona', $r->id_persona);

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
			          ->prepare("DELETE FROM usuarios WHERE id_usuario = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(CUsuarios $data)
	{
		try 
		{
			$sql = "UPDATE usuarios SET 
						usuario = ?,
						contrasena = ?,
						id_persona = ?
				    WHERE id_usuario = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					 
					$data->__GET('usuario'),
					$data->__GET('contrasena'),
					$data->__GET('id_persona'),

					$data->__GET('id_usuario')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(CUsuarios $data)
	{
		try 
		{
		$sql = "INSERT INTO usuarios (id_usuario,usuario,contrasena,id_persona) 
		        VALUES (?, ?, ?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
					$data->__GET('id_usuario'),
				    $data->__GET('usuario'),
					$data->__GET('contrasena'),
					$data->__GET('id_persona')
				)

			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}