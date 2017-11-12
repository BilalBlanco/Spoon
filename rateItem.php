<?php
	session_start();
	require("db/dbcon.php");
	require("classes/product.php");
	
	if(isset($_POST["itemId"]) && isset($_POST["rateValue"])){
		$itemId=$_POST["itemId"];
		$rateValue=$_POST["rateValue"];
		
			if(!empty($itemId) && !empty($rateValue)){
		
					$product=new Product();
					$product->rateItems($_SESSION["user"],$itemId,$rateValue);
			}
		
		
	}

?>