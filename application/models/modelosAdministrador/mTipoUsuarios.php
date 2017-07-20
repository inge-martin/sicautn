<?php
class MTipoUsuarios
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

			$stm = $this->pdo->prepare("SELECT * FROM tipo_usuarios");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new cTipoUsuarios();

				$alm->__SET('id_tipo_usuarios', $r->id_tipo_usuarios);
				$alm->__SET('descripcion_usuario', $r->descripcion_usuario);

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
			          ->prepare("SELECT * FROM tipo_usuarios WHERE id_tipo_usuarios = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new cTipoUsuarios();

			$alm->__SET('id_tipo_usuarios', $r->id_tipo_usuarios);
			$alm->__SET('descripcion_usuario', $r->descripcion_usuario);


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
			          ->prepare("DELETE FROM tipo_usuarios WHERE id_tipo_usuarios = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(cTipoUsuarios $data)
	{
		try 
		{
			$sql = "UPDATE tipo_usuarios SET 
						descripcion_usuario = ?
				    WHERE id_tipo_usuarios = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					 
					$data->__GET('descripcion_usuario'),
					$data->__GET('id_tipo_usuarios')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cTipoUsuarios $data)
	{
		try 
		{
		$sql = "INSERT INTO tipo_usuarios (id_tipo_usuarios,descripcion_usuario) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('id_tipo_usuarios'), 
				$data->__GET('descripcion_usuario')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}