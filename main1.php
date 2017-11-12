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
if(isset($_SESSION['user']) && isset($_SESSION["userType"])){
	if($_SESSION["userType"]==1){
    	include($p."Templates/loggedin_header.php");
	}	
}
 else {include($p."Templates/header.php");}
  
  
?>

<div class="col-md-3"> <?php include($p."Templates/sidebar.php"); ?></div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<input type="text" id="quantity1" name="setquantity" hidden/>
<input type="text" id="p_id" name="txtIdAddToCart" hidden/>
<div class="col-md-9"> 

<?php if(isset($_SESSION["user"]) && isset($_SESSION["userType"])){  
		if($_SESSION["userType"]==1){
?>

<div class="row">
	<?php
	$count=0;
	$recommendor=new Recommendor();
	$productInfo=$recommendor->predictToSingleUser($_SESSION["user"]); 
	if($productInfo!=null){
	?>
	<br>
		<!-- Heading -->
		<div class="col-lg-12 col-md-12 col-sm-12">

			<div class="carousel-heading">
				<h4>Recommended Items</h4>
			</div>

		</div>
		<!-- /Heading -->

		<div class="col-lg-12 col-md-12 col-sm-12">

			<div class="row subcategories">

				<!-- Subcategory -->
			   <div class="row subcategories">
				  <?php  //require("product.php"); 
					$count12=0;
					foreach($productInfo as $data1){
						$pid = $product->viewProductsByID($data1);
						foreach($pid as $data){

						?>  
				<!-- Subcategory -->
				<div class="col-lg-fifth col-md-fifth col-sm-fifth subcategory" onclick="window.location.href='productdetail.php?name=<?php echo $data["product_id"]; ?>'">

					<a href="#"><img width="180px"  height="80px"  src="<?php echo $data["img_src"]  ?>" alt="images/noImage.png" onerror="this.src='images/noImage.jpg';"></a>
					  <div class="product-info" onclick="window.location.href='productdetail.php?name=<?php echo $data["product_id"]; ?>'">
						<h6><a href="#"><b><?php echo $data["product_name"];  ?></b></a></h6>
					</div>

				</div>
				<!-- /Subcategory --> 
					<?php }$count12++;if($count12==5){break;}}?>			




			</div>
				<!-- /Subcategory --> 

			</div>

		</div>
	<?php } ?>
	</div>

<?php }} ?>

   <div class="row">
    <!-- Heading -->
		<div class="col-lg-12 col-md-12 col-sm-12"></br>							
			<div class="carousel-heading">
				<h4>All Items</h4>
			</div>
							
		</div>
	</div>
	<!-- /Heading --> 
       
       <div class="row">
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
										

			foreach($productInfo as $data){
							$count++;

					?>

				<div class="col-md-4" style="margin-top:15px;">
					<div class="well">
						<div class="product-image" onclick="window.location.href='productdetail.php?name=<?php echo $data["product_id"]; ?>'">
							<img src="<?php echo $data["img_src"]  ?>" alt="images/NoImage.png.jpg" onerror="this.src='images/NoImage.png';" />
							<a href="" class="product-hover" >
								<i class="icons icon-eye-1" ></i> Quick View
							</a>
						</div>
						<div class="product-info">
							<h5><a href="#"><b><?php echo $data["product_name"];  ?></B></a></h5>
							<span class="price"><?php echo "Estimated Price: ".$data["product_price"]."&nbspPKR"; ?><?php echo "/".$data["product_unit"]; ?></span>
								<div class="rating readonly-rating" data-score="4"></div>
								<div class="col-md-12">
									<tr>
										<td>Quantity:</td>
										<td>
											<div class="numeric-input">
												<input type="text"  name="quantity"  onblur="setQuantity(this.id)" onkeypress="return isNumber(event)" id="quantity<?php echo $data["product_id"] ?>" maxlength="2"/>
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
				</div>

										
                                        
		<?php	 }    ?>
	<br/>	
       	
       </div>
        
   
    <br>         
    <br>         
    <div class="row">
    	<div class="col-lg-3 col-xs-12"></div>
    	<div class="col-lg-6 col-xs-12">
    	<div class="pagination">
				  <?php //require("classes/product.php");
			$product=new Product();     

			echo $product->generateLinks($product->getProductCount(),15);   

		?>
			<br>
		</div>
  		</div>
   		<div class="col-lg-3 col-xs-12"></div>
    </div>                      
       <br>             
									<!-- /Carousel Item -->
</div>
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



