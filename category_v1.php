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
		<link rel="stylesheet" href="css/pagination.css">
		
			<!-- JavaScript -->
		<script src="js/modernizr.min.js"></script>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/jquery.raty.min.js"></script>
		
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
		
		<script src="js/validation.js"></script>

</head>

<body>
<form method="post" name="form1" id="form1">
<?php   
$p="";
if(basename(__DIR__)!="bhai"){
	     $p="../";
	}  
session_start();	
if(isset($_SESSION['user'])){include($p."Templates/loggedin_header.php");}
 else {include($p."Templates/header.php");}
  
  
?>

<div class="col-md-3"> <?php include($p."Templates/sidebar.php"); ?></div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<input type="text" id="quantity1" name="setquantity" hidden/>
<input type="text" id="p_id" name="txtIdAddToCart" hidden/>
<div class="col-md-9"> 
 <br>
                   

   <div class="row">
    <!-- Heading -->
		<div class="col-lg-12 col-md-12 col-sm-12"></br>							
			<div class="carousel-heading">
				<h4>Recent Items</h4>
			</div>
							
		</div>
	<!-- /Heading --> 
        <?php  //require("product.php"); 
	if(!isset($_GET["pageNo"])){	
	    $_GET["pageNo"]=1;}
		$productInfo=null;
	    $count=0;
	    $product=new Product();
	    if(!empty($_POST["category_id"])){ $productInfo=$product->getProductByCategory($_POST["category_id"],$_POST["category_id"]);}	  
		else if(isset($_POST["search_submit"])){								 
		    if(empty($_POST["search_input"])){$productInfo=$product->getProductsByCategory($_POST["category_ui"],$_POST["category_ui"]);}								
			else{$productInfo=$product->getProductsByName($_POST["search_input"]);}
		}	                  
	    else{  $productInfo=$product->getRecordByPaging($_GET["pageNo"],15);
				} 
							?>			
									      <div class="row"> 
                        <!-- Product Item -->
						<?php  //require("product.php"); 
										$count=0;
                                      $product=new Product();
									   $productInfo=$product->viewRecentProducts(); 
										foreach($productInfo as $data){ ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 product">
                            
                            <div class="product-image" onclick="window.location.href='productdetail.php?name=<?php echo $data["product_id"]; ?>'">
                                <img src="<?php echo $data["img_src"];  ?>" alt="images/Grapes.jpg" onerror="this.src='images/Grapes.jpg';">
                                <a href="products_page_v1.html" class="product-hover">
														<i class="icons icon-eye-1"></i> Quick View
													</a>
                            </div>
                            
                            <div class="product-info" >
                                <h5><a href="products_page_v1.html"><?php echo $data["product_name"];  ?></a></h5>
                                <span class="price"><?php echo "Estimated PKR: ".$data["product_price"];  ?><?php echo "/".$data["product_unit"]; ?></span>
                                <div class="rating readonly-rating" data-score="4"></div>
								<div class="col-md-12">
															<tr>
																<td>Quantity:</td>
																<td>
																	<div class="numeric-input">
																		<input type="text"  name="quantity"  onblur="setQuantity(this.id)" onkeypress="return isNumber(event)" id="quantity<?php echo $data["product_id"] ?>" />
																		<span class="arrow-up"><i class="icons icon-up-dir"></i></span>
																		<span class="arrow-down"><i class="icons icon-down-dir"></i></span>
																	</div>
																	
																</td>
															</tr>
														</div>
                            </div>
                    	<div class="product-actions" >
													<span class="add-to-cart" onclick="setId(<?php echo $data["product_id"]; ?>)"                         
                                                    >
														<span class="action-wrapper" >
														
															
															<div class="action-name " style="font-size:16px; text-align:center;" ><i class="icons icon-basket-2" ></i>Add to cart</div>
														
														</span >
													</span>
												</div>
                            
                        </div>
						<?php $count++;if($count==20){break;}}?>	
                        
             
					
					
					
				</section>
				<!-- /Main Content -->
				
				
				
			
				
			</div>
                        
    </div>              
    <center>
    <class="row">
	<div class="col-lg-8 col-md-8 col-sm-8">
                           <br>
                           
                 <div class="pagination">
                                  <?php //require("classes/product.php");
			 				$product=new Product();     
							
                         	echo $product->generateLinks($product->getProductCount(),15);   
			 
			 			?>
                    <br>
				</div>
	</div>   </class>                      
       <br>             
									<!-- /Carousel Item -->

<!-- InstanceEndEditable -->
</body>


<?php include($p."Templates/footer.php")?>

</form>
</body>
<script>
function setQuantity(id){
var quantity=$('#'+id).val();
//alert(quantity);
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



