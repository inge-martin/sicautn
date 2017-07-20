<?php
class MPenalizaciones
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
		try
		{
			$result = array();
			$sql  = " SELECT id_detalle, personal.nombre, penalizaciones.motivo, penalizaciones.sancion, descripcion, fecha_inicio, fecha_fin, status  ";
			$sql .= " FROM pp_detalle, penalizaciones, personal  ";
			$sql .= " WHERE personal.id_persona = pp_detalle.id_persona ";
			$sql .= " AND penalizaciones.id_penalizaciones = pp_detalle.id_penalizaciones ";
			$sql .= " AND pp_detalle.status = 1 ";
			$sql .= " AND pp_detalle.id_persona = ? ";
			$stm = $this->pdo->prepare($sql);
			$stm->execute(array($id_usu));

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r){
				$alm = new cPenalizaciones();

				$alm->__SET('id_detalle', $r->id_detalle);
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('motivo', $r->motivo);
				$alm->__SET('sancion', $r->sancion);
				$alm->__SET('descripcion', $r->descripcion);
				$alm->__SET('fecha_inicio', $r->fecha_inicio);
				$alm->__SET('fecha_fin', $r->fecha_fin);
				$alm->__SET('status', $r->status);

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