<?php 
$p="";
if(basename(__DIR__)!="bhai"){
	     $p="../";
	}  
session_start();	
if(isset($_SESSION['user']) && ($_SESSION['userType']==3)){include($p."Templates/admin_loggedin_header.php");}
 else {header('Location:login/login_admin.php');}
  
//require("product.php"); 
  //require("db/dbcon.php");
if(isset($_POST["update"])){
//print_r($_POST);
$product = new Product();
$product->addLog($_SESSION['user'],"Product Updated",$_POST["txtupdateId"]);
	$imageResult=$product->fileUpload();
		
	    if($imageResult[0]){
$product->updateProduct($_POST['product_name'],$_POST['product_price'],$_POST['product_description'],$_POST['dropdownPacking'],$_POST['dropdownCategory'],$_POST['dropdownUnit'],$imageResult[1],$_POST["txtupdateId"]);
echo "<script>window.location.replace('delete_product.php');</script>";
}	
	else {
		echo "Image not uploaded";
	}
}

?>



<!DOCTYPE html>

<html>

    
<!-- Mirrored from velikorodnov.com/html/homeshop/create_an_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
<head>
        <script src="js/validation.js"></script>
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
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			
		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    <?php   

?>
    
    <body>
    
   	
   <form method="post" enctype="multipart/form-data">	
	 <input type="text" name="txtupdateId" id="txtupdateId" value="<?php echo $_POST["txtId"];?>" hidden>
	
		
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="admin_panel.php">Home</a> <i class="icons icon-right-dir"></i> Update Product</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                    
                    
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Update Product</h4>
                            </div>
                            
                            <div class="page-content">
							<?php if(isset($_POST["txtId"])){ ?>
                            	<div class="row">
                                	
                                    
                             <?php  
									//print_r($_POST);
									
                                    $product=new Product();
									$result=$product->getSpecificProduct($_POST["txtId"]);
									//print_r($result);
                                              
                                  ?>  <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Product Name</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" value="<?php echo $result[0]["product_name"];  ?>" name="product_name" onKeyPress="return isCharacter(event)">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Price</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" value="<?php echo $result[0]["product_price"];  ?>" name="product_price" onKeyPress="return isNumber(event)">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Description</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<textarea rows="4" cols="50"  name="product_description" onKeyPress="return isCharacter(event)"><?php echo $result[0]["product_description"];  ?> </textarea>
                                    </div>	
                                    
                                </div>
                                </br>
                                <div class="row">
                                 
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Category</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<select name="dropdownCategory" value="<?php echo $result[0]["product_category"];  ?>">
										  	<?php
										           $product=new Product();
											        $categoryList=$product->category();
											            //print_r($categoryList);
											        	foreach($categoryList as $category){
										     ?>
										     <option value="<?php echo $category["category_id"];?>"><?php echo $category["category_name"] ?> </option>     
										  <?php } ?>
										</select>
                                    </div>	
										
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Packing</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<select name="dropdownPacking">
								             <?php 
											   $product=new Product();
											   $packingList=$product->getPacking();
											      foreach($packingList as $packing){
											  ?>
										     <option value="<?php echo $packing["packing_id"] ;?>"><?php echo $packing["packing_name"];?></option><?php } ?>
										</select>
                                    </div>	
                                    
                                </div>								
								
								<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4">
									<p>Unit</p>
								</div>
									<div class="col-lg-8 col-md-8 col-sm-8">
										<select name="dropdownUnit">
											<option name="kg" value="KG">KG</option>
											<option name="dozen" value="Dozen">Dozen</option>
											<option name="liter" value="Liter">Liter</option>
										
										</select>
									</div>
								
							</div>	
								
								<div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Image Link</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	 					
								<input  type="file" class="form-control"    name="image"    />
                                    </div>	
                                    
                                </div>
								
								
                                
                              
                                
                               <div class="row">
                                    
                               
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<input class="big" type="submit" value="Update" name="update">
                                        <input class="big" type="reset" value="Cancel">
                                    </div> 
                                    
                                </div>
							<?php } ?>
                            </div>
                            
                    	</div>
                          
                    </div>
                        
                    
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
					<?php include("Templates/admin_sidebar.php"); ?>
					<!-- /Categories -->
                    
                    
                    
                    <!-- Compare Products -->
					
					<!-- /Compare Products -->
					
					
					<!-- Carousel -->
					
					<!-- /Carousel -->
					
					
					<!-- Bestsellers -->
					
					<!-- /Bestsellers -->
					
                    
				</aside>
                <!-- /Sidebar -->
                
			</div>
			<!-- /Content -->
			
			
			


			
			<!-- Banner -->
			<section class="banner">
				
				<div class="left-side-banner banner-item icon-on-right gray">
					<h4>8(802)234-5678</h4>
					<p>Monday - Saturday: 8am - 5pm PST</p>
					<i class="icons icon-phone-outline"></i>
				</div>
				
				<a href="#">
				<div class="middle-banner banner-item icon-on-left light-blue">
					<h4>Free shipping</h4>
					<p>on all orders over $99</p>
                    <span class="button">Learn more</span>
					<i class="icons icon-truck-1"></i>
				</div>
				</a>
				
				<a href="#">
				<div class="right-side-banner banner-item orange">
					<h4>Crazy sale!</h4>
					<p>on selected items</p>
                    <span class="button">Shop now</span>
				</div>
				</a>
				
			</section>
			<!-- /Banner -->
			
			

			
			<!-- Footer -->
			<footer id="footer" class="row">
				
				<!-- Upper Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="upper-footer">
					
						<div class="row">
							
							<!-- Newsletter -->
							<div class="col-lg-7 col-md-7 col-sm-7">
								<form id="newsletter" action="http://velikorodnov.com/html/homeshop/php/newsletter.php">
									<h4>Newsletter Sign Up</h4>
									<input type="text" name="newsletter-email" placeholder="Enter your email address">
									<input type="submit" name="newsletter-submit" value="Submit">
								</form>
							</div>
							<!-- /Newsletter -->
							
							
							<!-- Social Media -->
							<div class="col-lg-5 col-md-5 col-sm-5 social-media">
								<h4>Stay Connected</h4>
								<ul>
									<li class="social-googleplus tooltip-hover" data-toggle="tooltip" data-placement="top" title="Google+"><a href="#"></a></li>
									<li class="social-facebook tooltip-hover" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="#"></a></li>
									<li class="social-pinterest tooltip-hover" data-toggle="tooltip" data-placement="top" title="Pinterest"><a href="#"></a></li>
									<li class="social-twitter tooltip-hover" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="#"></a></li>
									<li class="social-youtube tooltip-hover" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="#"></a></li>
								</ul>
							</div>
							<!-- /Social Media -->
							
						</div>
					
					</div>
					
				</div>
				<!-- /Upper Footer -->
				
				
				
				<!-- Main Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="main-footer">
					
						<div class="row">
							
							<!-- Like us on Twitter -->
							<div class="col-lg-3 col-md-3 col-sm-6 twitter-widget">
								<h4>From Twitter</h4>
								<div id="twitter-widget">
                                
								</div>
                                <a href="#" class="button blue small">Follow us</a>
							</div>
							<!-- /Like us on Twitter -->
							
							
							<!-- Like us on Facebook -->
							<div class="col-lg-3 col-md-3 col-sm-6 facebook-iframe">
								<h4>Like us on Facebook</h4>
                                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=270&amp;height=250&amp;colorscheme=light&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; height:290px;"></iframe>
							</div>
							<!-- /Like us on Facebook -->
							
							
							<!-- Information -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>Information</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> About Us</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> New Collection</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Bestsellers</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Manufacturers</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Privacy Policy</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Terms &amp; Conditions</a></li>
								</ul>
							</div>
							<!-- /Information -->
							
							
							<!-- Contact Us -->
							<div class="col-lg-3 col-md-3 col-sm-6 contact-footer-info">
								<h4>Contact Us</h4>
								<ul>
									<li><i class="icons icon-location"></i> 8901 Marmora Road,<br>Glasgow, D04 89GR.</li>
                                    <li><i class="icons icon-phone"></i> +1 800 603 6035</li>
									<li><i class="icons icon-mail-alt"></i><a href="mailto:mail@company.com"> mail@companyname.com</a></li>
									<li><i class="icons icon-skype"></i> homeshop</li>
								</ul>
							</div>
							<!-- /Contact Us -->
							
						</div>
						
					</div>
					
				</div>
				<!-- /Main Footer -->
				
				
				
				<!-- Lower Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="lower-footer">
					
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<p class="copyright">Copyright 2014 <a href="#">HomeShop</a>. All Rights Reserved.</p>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<ul class="payment-list">
									<li class="payment1"></li>
									<li class="payment2"></li>
									<li class="payment3"></li>
									<li class="payment4"></li>
									<li class="payment5"></li>
								</ul>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<!-- /Lower Footer -->
				
			</footer>
			<!-- Footer -->
			
            
            <div id="back-to-top">
            	<i class="icon-up-dir"></i>
            </div>
            
		</div>
    	<!-- Container -->
		</form>
		
		
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
    

<!-- Mirrored from velikorodnov.com/html/homeshop/create_an_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
</html>