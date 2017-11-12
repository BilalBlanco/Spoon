<?php 
   require("classes/customer.php");
   require("db/dbcon.php");
	if($_POST["actionName"]=="updateFeedback"){
		session_start();
		$customerId=$_SESSION["user"];
		
		$stars=$_POST["starvalue"];
		$comment=$_POST["comment"];
		$orderId=$_POST["id"];
		$bhaiId=$_POST["bhai"];

		$customer=new Customer();
		$customer->giveFeedBackToBhai(1,$comment,$customerId,$bhaiId,$orderId,$stars);	
	}
	
	
	
?>