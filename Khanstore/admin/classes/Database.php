<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "0917379784009173797840", "khanstore");
		return $this->con;
	}
}

?>