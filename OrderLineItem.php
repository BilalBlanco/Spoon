<?php


class OrderLineItems{
	
	   function addToCart(){
	        
	           if(isset($_GET["name"])){
	                    $itemArr=$product->getSpecificProduct($_GET["name"]);
	                    $cart=unserialize(serialize($_SESSION["cart"]));
			            $flag = false;	
						for($i=0;$i<count($cart);$i++){
							if($cart[$i][0]["product_id"]==$_GET["name"]){
					             $cart[$i][0]["category_id"]=$cart[$i][0]["category_id"]+1;
								  $_SESSION["cart"]=$cart;
								  echo "already exist";
								  $flag = true;
								  break;
				              }	
						}
	                  
	                    if($flag){}
						else{$_SESSION["cart"][]=$itemArr;}
				}
	
	    }







}

?>