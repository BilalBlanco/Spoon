<?php
$p="";
if(basename(__DIR__)!="bhai"){
	     $p="../";
	}  
session_start();	
if(isset($_SESSION['user']) && ($_SESSION['userType']==3)){include($p."Templates/admin_loggedin_header.php");}
 else {header('Location:login/login_admin.php');}
  
if (isset($_POST['add'])){
	$itemId=0;
	
	$product=new Product();
	$lastId=$product->getLastProductId();	
	$itemId=$lastId[0]["product_id"];
	//$_SESSION['lastProductID'] = $itemId;
	$itemId++;
	$product->addLog($_SESSION['user'],"Product Added",$itemId);
	$imageResult=$product->fileUpload();
		//print_r($_POST['dropdownUnit']);
	    if($imageResult[0]){
			$product->addProduct(strtoupper($_POST['product_name']),$_POST['product_price'],$_POST['product_description'],$_POST['dropdownPacking'],$_POST['dropdownCategory'],$_POST['dropdownUnit'],$imageResult[1]);
		}
	else {
		echo "Image not uploaded";
			
	}
}
if(isset($_POST["buttonAddCategory"])){
	$product = new Product();
	$lastId=$product->getLastCategoryId();	
	$itemId=$lastId[0]["category_id"];	
	$itemId++;
	$product->addLog($_SESSION['user'],"Category Added",$itemId);
	$product->addCategory(strtoupper($_POST['inputAddCategory']),strtoupper($_POST['dropdownParentCategory']));
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
   
    
    <body>
	
   <form method="post" enctype="multipart/form-data">	
		
		
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="admin_panel.php">Home</a> <i class="icons icon-right-dir"></i> Add Product</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                    
                    
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Add Product</h4>
                            </div>
                            
                            <div class="page-content">
                            	<div class="row">
                                	
                                   
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Product Name</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="product_name" onKeyPress="return isCharacter(event)" maxlength="20">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Price</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="product_price" onKeyPress="return isNumber(event)" maxlength="6">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Description</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<textarea rows="4" cols="50" name="product_description" onKeyPress="return isCharacter(event)"></textarea>
                                    </div>	
                                    
                                </div>
                                </br>
                                <div class="row">
                                 
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Category</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<select name="dropdownCategory">
										  	<?php
										           $product=new Product();
											        $categoryList=$product->category();
											            print_r($categoryList);
											        	foreach($categoryList as $category){
										     ?>
										     <option value="<?php echo $category["category_id"];?>"><?php echo $category["category_name"]; ?> </option>     
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
											<option name="kg" value="Kg">KG</option>
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
                                    	<input class="big" type="submit" value="Add" name="add">
                                        <input class="big" type="reset" value="Cancel">
                                    </div> 
                                    
                                </div>
                            </div>
                            
                    	</div>
                          
                    </div>
                        
                    
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
			
                    
                    
                    
                    <!-- Compare Products -->
					<div class="row sidebar-box blue">
						
						<div class="col-lg-3 col-md-3 col-sm-3">
							
							<div class="sidebar-box-heading">
                            	<i class="icons icon-docs"></i>
								<h4>Add Categories</h4>
							</div>
							<div class="sidebar-box-content">
                                <table class="compare-table">  
                                   
									<tr>
										<td class="product-thumbnail"><input type="text" name="inputAddCategory" placeholder="Enter Category Name"/></td>
									</tr>
                                    </br>
									<tr>
											 <div class="row" style="padding-left:50px;">
                                    <!--<div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p style="padding:15px">Packing</p>
                                    </div>-->
                                    
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<select name="dropdownParentCategory">
											<option>Parent Category</option>
								             <?php 
											   $product=new Product();
											   $packingList=$product->getCategory();
											      foreach($packingList as $packing){
											  ?>
										     <option value="<?php echo $packing["category_id"];?>"><?php echo $packing["category_name"];?></option><?php } ?>
										</select>
                                    </div>	
                                    
                                </div>
									</tr>	
									
                                </table>
							
                                <div class="padding-box">
                                	<input class="big" type="submit" value="Add Category" name="buttonAddCategory"/>
                                </div>
							</div>
						</div>
						
					</div>
					<!-- /Compare Products -->
					
					
				
					
					
					
					
                    
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