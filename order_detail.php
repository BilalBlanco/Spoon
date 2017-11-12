<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/main.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

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
		<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
   		<link rel="stylesheet" href="css/animation.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/chosen.css">
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
		
		
		
		 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<form method="post" name="form1" id="form1">
<?php   
$p="";
if(basename(__DIR__)!="bhai"){
	     $p="../";
	}  
session_start();	
if(isset($_SESSION['user']) && $_SESSION['userType']==2){include($p."Templates/admin_loggedin_header.php");}
 else {header('Location:login/login_bhai.php');}
 //require("classes/order.php");
 /*include("cart1.php");
 $shCart= new ShoppingCart();
 $shCart->getCartItems();*/
  
  
?>


<div id="wrapper">

<!--<div class="col-md-2"> </br><?php //include($p."Templates/admin_sidebar.php"); ?></div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<input type="text" id="quantity1" name="setquantity" hidden/>
<input type="text" id="p_id" name="txtIdAddToCart" hidden/>
	 
		
    <!-- Heading -->
		<div id="" class="col-md-12">
		
           </br>
            <!-- /.row -->
           <?php include("bhai_index.php");?>
           <!-- Main Content -->
		   <?php $asd=0; if(!empty($_POST["orderId"])){$asd=$_POST["orderId"];}?>
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
                  <form method="post">  
                    <?php if(!empty($asd)){ ?>
                    <div class="row">
                    	<div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="bhai_panel.php">Home</a> <i class="icons icon-right-dir"></i> Order Details</p>
                    </div>
                </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="carousel-heading">
                                <h4>Order Information</h4>
                                <div class="carousel-arrows">
									<a href="#"><i class="icons icon-reply"></i></a>
								</div>
                            </div>
                            <?php 
							$order = new Order();
							//echo $_POST["textId12345"];
							$orderInfo=$order->getOrderDetails($asd);
							
							foreach($orderInfo as $data){
							?>
                            <table class="orderinfo-table">
                            	
                                <tr>
                                	<th>Order number</th>
                                    <td><?php echo $asd; ?></td>
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
                        
                    </div>
                    
                    <div class="row">
					 <?php
							   if(!empty($_SESSION["user"])){
							   $order=new Order();
							   $result=$order->getOrderPersonDetails($asd);
							   //print_r($result)
							   ?>
                    	
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
                                    <td><?php if($result[0]["cgender"]=="Male" || $result[0]["cgender"]=="MALE"){echo "Mr.";}else if($result[0]["cgender"]=="Female" || $result[0]["cgender"]=="FEMALE"){echo "Miss/Mrs.";}else if($result[0]["cgender"]=="Other"){echo "Other.";}else{echo "--";}?></td>
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
					<?php }else {?><<script>window.location.replace("bhai_panel.php");</script><?php } ?> 
                    </form>
				</section>
				<!-- /Main Content -->
                
        
        </div>
	
        <!-- /#page-wrapper -->
                     
        
									    
    
</div>   
                                  
									<!-- /Carousel Item -->

<!-- InstanceEndEditable -->
<?php include($p."Templates/footer.php")?>

</form>
</body>
<script type=text/javascript>
function setQuantity(id){

var quantity=$("#"+id).val();

$('#quantity1').val(quantity);
//window.location.replace("addtocart.php");
}
function setId(id){
	$("#p_id").val(id);
	
$("#form1").attr("action","addtocart.php");

	
	
	
  
  
  $("#form1").submit();
}
</script>



<!-- InstanceEnd --></html>



