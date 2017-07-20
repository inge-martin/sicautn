<?php
/**
* 
*/
class mestacionamiento extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getLugares(){
		$query = $this -> db -> get('estacionamiento');
		return $query -> result();
	}
}