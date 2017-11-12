<?php
//require("../db/dbcon.php");
//require("user.php");
class Administrator extends User{
	private $deliveryBoy;
	
	function __construct(){
		parent::__construct();
		
	}


	public function viewCustomerFeedbacks(){
		$this->query="select u.user_name'customer',uu.user_name'bhai',f.feedback_description'feedback',f.order_id'order_id' from user as u,user as uu,feedback as f where u.user_id=f.customer_id and uu.user_id=f.bhai_id and f.feedback_type='1' ";
		$data=$this->db->executeQuery($this->query,array(),"sread");
		return $data;		
	}
	
	public function viewBhaiFeedbacks(){
		$this->query="select u.user_name'customer',uu.user_name'bhai',f.feedback_description'feedback',f.rating'rating',f.order_id'order_id' from user as u,user as uu,feedback as f where u.user_id=f.customer_id and uu.user_id=f.bhai_id and f.feedback_type='2' ";
		$data=$this->db->executeQuery($this->query,array(),"sread");
		return $data;		
	}
	
	function  viewSpecificUser($userId){
	    $this->query="select * from user where user_id=?";
		$result=$this->db->executeQuery($this->query,array($userId),"cread");
		return $result;
	}
	
	public function viewAllUsers(){
		$this->query="select * from user where user_type=1";
		$data=$this->db->executeQuery($this->query,array(),"sread");
		return $data;		
	}
	
	public function viewAllDeliveryBoys(){
		$this->query="select * from user where user_type=2";
		$data=$this->db->executeQuery($this->query,array(),"sread");
		return $data;		
	}
	
	
	public function checkDeliveryBoyStatus($deliveryBoy){	
		$this->deliveryBoy = $deliveryBoy;
		$this->query="select u.user_name'customer',uu.user_name'bhai',f.feedback_description,f.order_id from user as u,user as uu,feedback as f where u.user_id=f.customer_id and uu.user_id=?";
		$data=$this->db->executeQuery($this->query,array($this->deliveryBoy),"cread");
		return $data;		
	}
}

//$user = new Administrator();
//$data =$user->viewNewFeedbacks();
//print_r($data);

?>