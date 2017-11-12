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
   <link rel="stylesheet" type="text/css" href="css/customrating.css" /> 
	<script src="js/jquery.min.js"></script>

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
		
		<?php   
$p="";
if(basename(__DIR__)!="bhai"){
	     $p="../";
	}  
session_start();	
if(isset($_SESSION['user']) && $_SESSION['userType']==2){include($p."Templates/admin_loggedin_header.php");}
 else {header('Location:login/login_bhai.php');}
 //require_once("db/dbcon.php");
 //require_once("classes/order.php");
//require_once("classes/product.php");
$order= new Order();
?>
			
			
			<!-- /Header -->

			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="bhai_panel.php">Home</a> <i class="icons icon-right-dir"></i> Submit Feedback </p>
                    </div>
                </div>
               <?php// include("bhai_index.php");?>
				<!-- Main Content -->
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
                  <form method="post">  
                    <?php if(!empty($_POST["txtId123456"])){ ?>
                    <div class="row">
                    	<?php $asd=0; if(!empty($_POST["txtId123456"])){$asd=$_POST["txtId123456"];}?>
                        <div class="col-lg-12 col-md-12 col-sm-12" >
                        	
                            <div class="carousel-heading">
                                <h4>Order Information</h4>
                                <div class="carousel-arrows">
									<a href="#"><i class="icons icon-reply"></i></a>
								</div>
                            </div>
                            <?php 
							
							$order = new Order();
							//echo $_POST["textId12345"];
							$orderInfo=$order->getOrderDetails($_POST['txtId123456']);
							foreach($orderInfo as $data){
							?>
                            <table class="orderinfo-table">
                            	
                                <tr>
                                	<th>Order number</th>
                                    <td id="orderIdColumn"><?php echo $asd; ?></td>
                                </tr> 
                                
                                <tr>
                                	<th>Order date </th>
                                    <td><?php echo $data["time"]; ?></td>
                                </tr>
                                
                                <tr>
                                	<th>Order status</th>
                                    <td><?php if($data["status"]==1){echo "Delivered";} elseif($data["status"]==0){echo "Not Delivered";} ?></td>
                                </tr>
								
                                
								<tr>
                                	<th>Payment Mode</th>
                                    <td>Delivery on Cash</td>
                                </tr>
								
                                <tr>
                                	<th>Total</th>
                                    <td><span class="price"><?php echo $data["price"]." PKR"; ?></span></td>
                                </tr>                    
                                
                            </table>
                            <?php  } ?>
                        </div>
                        
						
						<div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="carousel-heading">
                                <h4>Submit Feedback</h4>
                                <div class="carousel-arrows">
									<a href="#"><i class="icons icon-reply"></i></a>
								</div>
                            </div>
                            <?php
							   if(!empty($_SESSION["user"])){
							   $order=new Order();
							   $result=$order->getOrderPersonDetails($asd);
							   }
							 ?>
                           
                            <?php 
							
							//$order = new Order();
							//echo $_POST["textId12345"];
							$orderInfor=$order->getDeliveryboyName($asd);
							foreach($orderInfor as $data1){
							?>
                           
                           
                            <table class="orderinfo-table">
                            	 
                                <tr>
                                	<th>Delivery Boy</th>
                                    <td>&nbsp&nbsp&nbsp<?php echo $data1["bhai"]; ?> </td>
									<td id="bhaiId"><?php echo $data1["id"]; ?></td>
                               		<div >	
                               			<td style="display:none;" id="userId"><?php echo $result[0]["uId"]; ?></td>
                                	</div>
                                </tr> 
                               
										<?php require("bhai_feedback.php"); ?>
							
								
                            </table>
                            <?php  } //print_r($orderInfor);?>
                        </div>
                    </div>
                    
                    <div class="row">
					 
                    	
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	
                            <div class="carousel-heading">
                                <h4>Bill to</h4>
                            </div>
                            
                            <table class="orderinfo-table">
                      
                                <tr>
                                	<th>Title</th>
                                    <td><?php if($result[0]["ugender"]=="Male"){echo "Mr.";}else if($result[0]["ugender"]=="Female"){echo "Miss/Mrs.";}else{echo "Other";}?></td>
                                </tr>
                                
                                <tr>
                                	<th>Name</th>
                                    <td><?php echo $result[0]["uname"];?></td>
                                </tr>
                                
                                <tr>
                                	<th>Phone</th>
                                    <td><?php echo $result[0]["uphone"];?></td>
                                </tr> 
                                
                                <tr>
                                	<th>Address </th>
                                    <td><?php echo $result[0]["uaddress"];?></td>
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
                                    <td><?php if($result[0]["cgender"]=="Male"){echo "Mr.";}else if($result[0]["cgender"]=="Female"){echo "Miss/Mrs.";}else if($result[0]["cgender"]=="Other"){echo "Other.";}else{echo "--";}?></td>
                                </tr>
                                <tr>
                                	<th>Name</th>
                                    <td><?php echo $result[0]["cname"];?></td>
                                </tr>
                                
                                 <tr>
                                	<th>Phone</th>
                                    <td><?php echo $result[0]["cphone"];?></td>
                                </tr> 
								
                                <tr>
                                	<th>Address </th>
                                    <td><?php echo $result[0]["caddress"];?></td>
                                </tr>  
                                
                               
                                                 
                                
                            </table>
                          
                        </div>
                        
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
												
												<th>Product name</th>												
												<th>Unit Price</th>
												<th>Quatity</th>
												<th>XPrice</th>
												
												
											</tr> 
													<?php $product=new Product();
											$productInfo=$product->viewOrderDetails($asd);
											foreach($productInfo as $data){
											?>
											<tr>
												<td></br><?php echo $data["SKU"];?></td>
												
												<td></br><?php echo $data["Product"];?></td>												
												<td></br><?php echo $data["Unit Price"];?></td>
												<td></br><?php echo $data["Quantity"];?></td>
												<td></br><?php echo $data["XPrice"];?></td>												
												<?php $abc=$data["Total Price"];?>
											</tr>
											<?php }?>
											
											<tr>
												<td class="align-right" colspan="5"><span class="price big">Total</span></td>
												<!--<td><strong>$22.00</strong></td>
												<td><strong>$-32.00</strong></td>-->
												<td><span class="price big"><?php if(!empty($abc)){echo $abc." PKR";} ?></span></td>
											</tr>
											
										</table>
										
                                    </div>
									
									
									
									
								</div>
								
                            
                            </div>
							
                        </div>
                        
                    </div>
					</br></br>
                    <?php }else{?><script>window.location.replace("feedback_to_customer.php");</script><?php } ?>    
                    </form>
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					
					
					
					<!-- Compare Products -->
				
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