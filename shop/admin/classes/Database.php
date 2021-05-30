<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "flwbmkwa_janzen", "P@ssw0rd#####", "flwbmkwa_aggte");
		return $this->con;
	}
}

?>