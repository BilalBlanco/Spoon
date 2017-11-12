<?php
	//include("db/dbcon.php");
	
	class OrderLineItems{
		private $query;
		private $db;
		
		public function __construct(){
			$this->db=new databaseManager();
		}
				
		public function addLineItem(){
			$this->query="insert into order ";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		
		
	}
	/*
	$a = new Product();
	echo "<pre>";
	 print_r($a->viewProducts());
     echo "</pre>";*/
?>