<?php 
	if(!isset($_GET['name']))
	{
		header('location:main1.php');
	}
	else
	{
?>



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
		
		<script src="js/validation.js"></script>

</head>
<?php   
$p="";
if(basename(__DIR__)!="bhai"){
	     $p="../";
	}  
session_start();	
if(isset($_SESSION['user'])){include($p."Templates/loggedin_header.php");}
 else {include($p."Templates/header.php");}
  
  
?>

<body>

<div class="col-md-3"> <?php include($p."Templates/sidebar.php"); ?></div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<!-- Main Content -->
</br>
			
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
					
					
                    <div id="product-single">
					<form method="post" name="form3" id="form1">
						<!-- Product --><input type="text" id="quantity1" name="setquantity" hidden/>
			<input type="text" id="p_id" name="txtIdAddToCart" hidden/>
						<div class="product-single">
							
							<div class="row">
								
								<!-- Product Images Carousel -->
								
								<div class="col-lg-5 col-md-5 col-sm-5 product-single-image">
									<?php  //include("product.php");
									$count=0;
                                       $product=new Product();
									   $productInfo=$product->getSpecificProduct($_GET["name"]);
										if(isset($_GET["name"])){
										foreach($productInfo as $data){?>
										<div id="product-slider">
										<ul class="slides">
											<li>
												<img class="cloud-zoom" src="<?php echo $data["img_src"]  ?>" data-large="<?php echo $data["img_src"]  ?>" alt="images/NoImage.png.jpg" onerror="this.src='images/NoImage.png';" />
												<a class="fullscreen-button" href="<?php echo $data["img_src"]  ?>">
													<div class="product-fullscreen">
														<i class="icons icon-resize-full-1"></i>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<div id="product-carousel">
										<ul class="slides">
											<li>
												<a class="fancybox" rel="product-images" href="<?php echo $data["img_src"]  ?>"></a>
												<img src="<?php echo $data["img_src"]  ?>" data-large="<?php echo $data["img_src"]  ?>" alt=""/>
											</li>
											<li>
												<a class="fancybox" rel="product-images" href="<?php echo $data["img_src"]  ?>"></a>
												<img src="<?php echo $data["img_src"]  ?>" data-large="<?php echo $data["img_src"]  ?>" alt="" />
											</li>
											<li>
												<a class="fancybox" rel="product-images" href="<?php echo $data["img_src"]  ?>"></a>
												<img src="<?php echo $data["img_src"]  ?>" data-large="<?php echo $data["img_src"]  ?>" alt="" />
											</li>
											<li>
												<a class="fancybox" rel="product-images" href="<?php echo $data["img_src"]  ?>"></a>
												<img src="<?php echo $data["img_src"]  ?>" data-large="<?php echo $data["img_src"]  ?>" alt="" />
											</li>
											<li>
												<a class="fancybox" rel="product-images" href="<?php echo $data["img_src"]  ?>"></a>
												<img src="<?php echo $data["img_src"]  ?>" data-large="<?php echo $data["img_src"]  ?>" alt="" />
											</li>
										</ul>
										<div class="product-arrows">
											<div class="left-arrow">
												<i class="icons icon-left-dir"></i>
											</div>
											<div class="right-arrow">
												<i class="icons icon-right-dir"></i>
											</div>
										</div>
									</div>
									<?php	} ?>
									
								</div>
								<!-- /Product Images Carousel -->
								
								
								<div class="col-lg-7 col-md-7 col-sm-7 product-single-info">
									
									<h2><b><?php echo $data["product_name"];  ?></b></h2>
                                    
									<div class="rating-box">
										<div class="rating readonly-rating" data-score="4"></div>
										<span>3 Review(s)</span>
									</div>
                                    
									<table>
										<tr>
											<td>Manufacturer</td>
											<td><a href="#">Manufacturer 1</a></td>
										</tr>
										<tr>
											<td>Availability</td>
											<td><span class="green">in stock</span> 20 items</td>
										</tr>
										<tr>
											<td>Product code</td>
											<td>PBS173</td>
										</tr>
									</table>
									
									
									<span class="price"><!--<del>$381.00</del>--><?php echo "Estimated PKR.".$data["product_price"]; ?></span>
									
									<table class="product-actions-single">
										
										<tr>
											<td>Quantity:</td>
											<td>
												<div class="numeric-input">
																		<input type="text"  name="quantity"  onblur="setQuantity(this.id)" onkeypress="return isNumber(event)" id="quantity<?php echo $data["product_id"] ?>" maxlength="2"/>
																		<span class="arrow-up"><i class="icons icon-up-dir"></i></span>
																		<span class="arrow-down"><i class="icons icon-down-dir"></i></span>
																	</div>
												
													<span class="add-to-cart" >
														<span class="action-wrapper">
															<i class="icons icon-basket-2"></i>
														<span class="action-name" onclick="setId(<?php echo $data["product_id"]; ?>)">Add to cart</span>
														</span >
													</span>
												
											</td>
										</tr>
									</table> 
									<?php	} ?>
									
								</div>
								
							</div>
							
						</div>
						<!-- /Product -->
						
						
						
						</section>
						</form>
					</div>
                    
<!-- InstanceEndEditable -->
</body>


<?php include($p."Templates/footer.php")?>

<!-- InstanceEnd -->
<script>
function setQuantity(id){
var quantity=$('#'+id).val();
//alert(quantity);
$('#quantity1').val(quantity);
//window.location.replace("addtocart.php");
}
function setId(id){
	//alert();
	$("#p_id").val(id);
$("#form1").attr("action","addtocart.php");
$("#form1").submit();
	
}
</script>

</html>

<?php 
											
	}
?>



