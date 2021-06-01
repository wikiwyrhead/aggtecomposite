<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "flwbmkwa_user1", ")pDhvm(T}O_x", "flwbmkwa_aggteprod");
		return $this->con;
	}
}

?>