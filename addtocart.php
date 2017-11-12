<?php
include("cart1.php");
//session_start(); 
include("db/dbcon.php");
include("classes/product.php");
$product=new Product();
$cart=new ShoppingCart();

	$cart->addItemToCart();
	$cart->removeCartItems();
	
	header('location:main1.php');
?>
