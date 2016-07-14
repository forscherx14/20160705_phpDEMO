<?php

class dbCon{

	private $db;
	private $servername;// = "localhost";
	private $username;// 	= 'root';
	private $password;//	= '';
	private $dbname;//   	= 'olsen_section2_demo';

	public function __construct( $servername, $username, $password, $dbname ){

		$this->servername 	= $servername;
		$this->username 	= $username;
		$this->password 	= $password;
		$this->dbname 		= $dbname; 

		$this->db = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		// Check connection
		 if ($this->db->connect_error) {
     		die("Connection failed: " . $conn->connect_error);
		 }else{
		 	//echo "Successfully connected";
		 }
	}

	public function test(){
		echo "hello world!";
	}

	public function insertRecords( $tbl, $key, $value ){
		$SQL = "INSERT INTO ".$tbl."( fieldKey, fieldValue ) VALUES('".$key."', '".$value."')";

		$this->db->query($SQL);
		
		return $SQL;
	}


}

?>