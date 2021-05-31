<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "flwbmkwa_janzen", "0917379784009173797840", "flwbmkwa_aggte");
		return $this->con;
	}
}

?>