<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "flwbmkwa_janzen", "09173797840JanzenGo", "aggtedeck_products");
		return $this->con;
	}
}

?>