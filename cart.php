

<!DOCTYPE html>

<html>

    
<!-- Mirrored from velikorodnov.com/html/homeshop/order_info.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
<head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>HomeShop - HTML Template</title>
        
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
		
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/perfect-scrollbar.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/fontello.css">
   		<link rel="stylesheet" href="css/animation.css">
		<link rel="stylesheet" href="css/chosen.css">
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			
			<!-- /Header -->
			<?php   
			$p="";
			if(basename(__DIR__)!="bhai"){
					 $p="../";
				}  
			session_start();
			if(isset($_SESSION['user']) && $_SESSION['userType']==1){include($p."Templates/loggedin_header.php");}
 else {header('Location:login/login.php');}
			//if(isset($_SESSION['user'])){include($p."Templates/loggedin_header.php");}
			 //else {include($p."Templates/header.php");}			  
			?>
			<!-- /Header -->
			
			<?php						
                              //require("classes/cart1.php");
									if(isset($_POST["place"])){
										$cart=new ShoppingCart();
										$cart->placeOrder(strtoupper($_POST["ship_name"]),$_POST["ship_phone"],strtoupper($_POST["ship_address"]),$_POST["ship_gender"]);
										unset($_SESSION["ca"]);
										unset($_SESSION["total"]);
										$clear=0;
										?><script> location.replace("main1.php"); </script><?php
									}
									if(isset($_POST["ok"])){
										unset($_SESSION["ca"]);
										unset($_SESSION["total"]);
										$clear=0;
										?><script> location.replace("cart.php"); </script><?php
									}
									?>
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="main1.php">Home</a> <i class="icons icon-right-dir"></i> Cart</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                  <form method="post" >  
                    
                 
                    
                    <div class="row">
                    	 <?php
							   if(!empty($_SESSION["user"])){
							   $user=new User();
							   $result=$user->viewUser($_SESSION["user"]);
							   
							   ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	
                            <div class="carousel-heading">
                                <h4>Bill to</h4>
                            </div>
                            
                            <table class="orderinfo-table">
                            	
                              
                             
                                
                                <tr>
                                	<th>Title</th>
                                    <td><input type="text" value="<?php if($result[0]["user_gender"]=="Male" || $result[0]["user_gender"]=="MALE"){echo "Mr.";}else if($result[0]["user_gender"]=="Female" || $result[0]["user_gender"]=="FEMALE"){echo "Miss/Mrs.";}else{echo "Other";}?>" readonly /></td>
                                </tr>
                                
                                <tr>
                                	<th>Name</th>
                                    <td><input type="text" value="<?php echo $result[0]["user_name"];?>" readonly /></td>
                                </tr>
                                
                                <tr>
                                	<th>Phone</th>
                                    <td><input type="text" value="<?php echo $result[0]["user_phone"];?>" readonly /></td>
                                </tr> 
                                
                                <tr>
                                	<th>Address </th>
                                    <td><input type="text" value="<?php echo $result[0]["user_comAddress"];?>" readonly /></td>
                                </tr>  
                                
                               
                                
                                                 
                                
                            </table>
                            
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	
                            <div class="carousel-heading">
                                <h4>Deliver to</h4>
                            </div>
                            
                            <table class="orderinfo-table">
                                
                              
                                <tr>
                                	<th>Title</th>
                                    <td><input type="text"  name="ship_gender" value="<?php if($result[0]["user_gender"]=="Male" || $result[0]["user_gender"]=="MALE"){echo "Mr.";}else if($result[0]["user_gender"]=="Female" || $result[0]["user_gender"]=="FEMALE"){echo "Miss/Mrs.";}else{echo "Other";}?>"></td>
                                </tr>
                                <tr>
                                	<th>Name</th>
                                    <td><input type="text" name="ship_name" value="<?php echo $result[0]["user_name"];?>"></td>
                                </tr>
                                
                                 <tr>
                                	<th>Phone</th>
                                    <td><input type="text" name="ship_phone" value="<?php echo $result[0]["user_phone"];?>"></td>
                                </tr> 
								
                                <tr>
                                	<th>Address </th>
                                    <td><input type="text" name="ship_address" value="<?php echo $result[0]["user_comAddress"];?>"></td>
                                </tr>  
                                
                               
                                                 
                                
                            </table>
                          
                        </div>
                          <?php } ?>
                         <div class="col-lg-12 col-md-12 col-sm-12">
							
							
							<div class="tabs">
                            
                                <div class="tab-heading margin-heading">
                                    <a href="#tab1" class="button big">Order Items</a>
                                    
                                </div>
                                
                                <div class="tab-content no-padding">
                                	
                                    <div id="tab1">
									

                                    	<table class="orderinfo-table">
										
											<tr>
												<th>SKU</th>
												<!--<th>Image</th>-->
												<th>Product name</th>												
												<th>Unit Price</th>
												<th>Quatity</th>
												<th>XPrice</th>
												
												<th>Option</th>
												
												
											</tr> 
															<?php 
											//require("cart1.php");
											$clear=1;	
										if((!empty($_SESSION["ca"])) && ($clear!=0)){	
											$shoppingCart=new ShoppingCart();
											$shoppingCart->getCartItems();
											for($i=0;$i<=$_SESSION["count"];$i++){
											
											?>
											<tr>
												<td></br><?php echo $cart[$i]["product_id"]; ?></td>	
												<!--<td><img src="<?php //echo $cart[$i]["image_src"]; ?>" alt="product" height="100%" width="80%"></td>-->
												<td></br><?php echo $cart[$i]["product_name"]; ?></td>												
												<td></br><?php echo $cart[$i]["product_price"]; ?></td>
												<td></br><?php echo  $_SESSION["p_quantity"]=$cart[$i]["quantity"] ;?></td>
												<td></br><?php echo $cart[$i]["quantity"]*$cart[$i]["product_price"]; ?></td>												
												<td></br><a  onclick="window.location.href='addtocart.php?removename=<?php  echo $cart[$i]["product_id"]; ?>'" class="parent-color">Remove</a></td>
												
												<?php ?>
											</tr>
											<?php } }?>
											
											<tr>
												<td class="align-right" colspan="6"><span class="price big">Total</span></td>
												<!--<td><strong>$22.00</strong></td>
												<td><strong>$-32.00</strong></td>-->
										<td><span class="price big"><?php if(!empty($_SESSION["ca"])){echo $_SESSION["total"].".00 PKR";}else if(empty($_SESSION["total"])){echo "0.00 PKR";}?></span></td>
											</tr>
											
									
										
										</table>
									
                                    </div>
									
									
								</div>
								
                            
                            </div>
							
                        </div>
                        
                    </div>
                        
									<div class="align-right">
										<input type="submit"  name="place"  value="Place Order"/>
										<input type="submit" name="ok" value="Clear Cart">
									</div>
									</form> 
									</br></br>
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
					<?php include($p."Templates/sidebar.php"); ?>
					<!-- /Categories -->
					
					
					<!-- Compare Products -->
					
					<!-- /Compare Products -->
					
					
			
					
					
					<!-- Bestsellers -->
				
					<!-- /Bestsellers -->
                    
				</aside>
                <!-- /Sidebar -->
                
			</div>
			<!-- /Content -->
			
			
			


			
			<!-- Banner -->
			<?php include($p."Templates/footer.php")?>
			<!-- Footer -->
			
            
            <div id="back-to-top">
            	<i class="icon-up-dir"></i>
            </div>
            
		</div>
    	<!-- Container -->
		
		
		
		<!-- JavaScript -->
		<script src="js/modernizr.min.js"></script>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.raty.min.js"></script>
		
		<!-- Scroll Bar -->
		<script src="js/perfect-scrollbar.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="js/zoomsl-3.0.min.js"></script>
		
		<!-- FancyBox -->
		<script src="js/jquery.fancybox.pack.js"></script>
		
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

		<!-- FlexSlider -->
		<script defer src="js/flexslider.min.js"></script>
		
		<!-- IOS Slider -->
		<script src = "js/jquery.iosslider.min.js"></script>
		
		<!-- noUi Slider -->
		<script src="js/jquery.nouislider.min.js"></script>
		
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="js/zoomsl-3.0.min.js"></script>
		
		<!-- SelectJS -->
        <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
        
        <!-- Main JS -->
        <script defer src="js/bootstrap.min.js"></script>
        <script src="js/main-script.js"></script>

		
    </body>
    

<!-- Mirrored from velikorodnov.com/html/homeshop/order_info.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
</html>