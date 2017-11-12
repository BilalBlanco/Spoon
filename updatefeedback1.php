<?php 
   require("classes/customer.php");
   require("db/dbcon.php");
	if($_POST["actionName"]=="updateFeedback"){
		session_start();
		$bhaiId=$_SESSION["user"];
		
		$stars=$_POST["starvalue"];
		$comment=$_POST["comment"];
		$orderId=$_POST["id"];
		$customerId=$_POST["userID"];
		$customer=new Customer();
		$customer->giveFeedBackToBhai(2,$comment,$customerId,$bhaiId,$orderId,$stars);	
	}
	
	
	
?>