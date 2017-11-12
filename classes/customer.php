<?php

require("user.php");
class Customer extends User {
	
	private $type;
	private $description;
	private $customerId;
	private $bhaiId;
	private $orderId;
	private $stars;
		
		
		public function __construct(){
			$this->db=new databaseManager();
			
		}
		


	public function giveFeedBackToBhai($type,$description,$customerId,$bhaiId,$orderId,$stars){
		    $this->type = $type;
			$this->customerId=$customerId;
			$this->description = $description;
			$this->bhaiId = $bhaiId;
			$this->orderId = $orderId;
			$this->stars = $stars;
	 	
	      $this->query="insert into feedback(feedback_type,feedback_description,customer_id,bhai_id,order_id,rating) values(?,?,?,?,?,?)";
		
			$result=$this->db->executeQuery($this->query,array($this->type,$this->description,$this->customerId,$this->bhaiId,$this->orderId,$this->stars),"create");
			
			if($result>0){
				echo "insert feedback Succeccfull";
				
				}
			else{
				
				echo "Not insert";
			}	
		
	}
}	
	
//$customer=new Customer();
//$customer->giveFeedBackToBhai(1,"good",51,52,53,1);	



?>