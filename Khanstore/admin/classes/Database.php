<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "flwbmkwa_root", "FLg-oggtq3Oh", "flwbmkwa_khanstore");
		return $this->con;
	}
}

?>