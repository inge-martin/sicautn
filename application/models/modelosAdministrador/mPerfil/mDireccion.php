<?php
class MDireccion{
	private $pdo;

	public function __CONSTRUCT(){
		// require_once 'application/config/mysql-login.php';
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
		try
		{
			$result = array();
			$sql  = "SELECT direccion.calle, direccion.numero, direccion.manzana, direccion.lote, ";
			$sql .= "direccion.cp, estados.nombre id_estado, municipios.nombre id_municipio, ";
			$sql .= "localidades.nombre id_localidad, direccion.id_direccion ";
			$sql .= "FROM direccion, estados, municipios, localidades ";
			$sql .= "WHERE direccion.id_estado = estados.id_estado ";
			$sql .= "AND direccion.id_municipio = municipios.id_municipio ";
			$sql .= "AND direccion.id_localidad = localidades.id_localidad ";
			$sql .= "AND id_direccion = ?";

			$stm = $this->pdo->prepare($sql);
			$stm->execute(array($id_usu));

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new cDireccion();
				$alm->__SET('id_direccion', $r->id_direccion);
				$alm->__SET('calle',      $r->calle);
				$alm->__SET('numero',      $r->numero);
				$alm->__SET('manzana',       $r->manzana);
				$alm->__SET('lote', $r->lote);
				$alm->__SET('cp',         $r->cp);
				$alm->__SET('id_estado', $r->id_estado);
				$alm->__SET('id_municipio', $r->id_municipio);
				$alm->__SET('id_localidad', $r->id_localidad);
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
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM direccion WHERE id_direccion = ?");
			          
			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new cDireccion();
		    $alm->__SET('id_direccion', $r->id_direccion);
			$alm->__SET('calle',      $r->calle);
			$alm->__SET('numero',      $r->numero);
			$alm->__SET('manzana',       $r->manzana);
			$alm->__SET('lote', $r->lote);
			$alm->__SET('cp',         $r->cp);
			$alm->__SET('id_estado', $r->id_estado);
			$alm->__SET('id_municipio', $r->id_municipio);
			$alm->__SET('id_localidad', $r->id_localidad);
			return $alm;
		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Eliminar($id){
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM direccion WHERE id_direccion = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(cDireccion $data)
	{
		try 
		{
			$sql = "UPDATE direccion SET 
						calle = ?,
						numero = ?,
						manzana = ?,
						lote = ?,
						cp = ?,
						id_estado = ?,
						id_municipio = ?,
						id_localidad = ?
				    WHERE id_direccion = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('calle'),
					$data->__GET('numero'),
					$data->__GET('manzana'),
					$data->__GET('lote'),
					$data->__GET('cp'),
					$data->__GET('id_estado'),
					$data->__GET('id_municipio'),
					$data->__GET('id_localidad'),
					$data->__GET('id_direccion')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cDireccion $data){
		try 
		{
		$sql = "INSERT INTO direccion (id_direccion,calle,numero,manzana,lote,cp,id_estado,
				id_municipio,id_localidad) 
		        VALUES (?, ?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(

				    $data->__GET('id_direccion'),
				    $data->__GET('calle'),
					$data->__GET('numero'),
					$data->__GET('manzana'),
					$data->__GET('lote'),
					$data->__GET('cp'),
					$data->__GET('id_estado'),
					$data->__GET('id_municipio'),
					$data->__GET('id_localidad')
					
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}