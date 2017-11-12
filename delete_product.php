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
if (isset($_POST['delete'])){
	//print_r($_POST);
	$product = new Product();
	$product->addLog($_SESSION['user'],"Product Deleted",$_POST["txtId"]);
	$result=$product->deleteProduct($_POST["txtId"]);
		
	   
		}
	


?>



<!DOCTYPE html>

<html>

    
<!-- Mirrored from velikorodnov.com/html/homeshop/create_an_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
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

	
   <form method="post" id="productForm" name="productForm">	
		
		
			<input type="text" name="txtId" id="txtId" hidden>
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="admin_panel.php">Home</a> <i class="icons icon-right-dir"></i> Delete/Update Product</p>
                    </div>
                </div>
                
                <section class="main-content col-lg-9 col-md-9 col-sm-9">
                  <div class="row">
                  <div class="carousel-heading no-margin">
  <h4> Product Table</h4> 
					  </div>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Category Name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
	                              $product=new Product();
	                                
                                      $data=$product->viewProductsWithCategory();
									 foreach($data as $result){ ?> 
									<tr>
        <td>
									<?php echo $result["product_name"]; ?>
									</td>
        <td><?php echo $result["category_name"]; ?></td>
        <td>
        
        <input type="button" name ="update "  class="btn btn-info update" value="Update" onClick="setId(<?php echo $_SESSION['updateProductId']=$result["product_id"]; ?>)" />
         <input type="submit" name ="delete" class="btn btn-danger" value="Delete" onClick="setId(<?php echo $result["product_id"]; ?>)" />
        
        </td>
     </tr> <?php } ?>
    </tbody>
  </table>
</div>
				</section>               
                
			
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
					<?php include($p."Templates/admin_sidebar.php"); ?>
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
			<?php include("Templates/footer.php"); ?>
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




<script>

	function setId(Id){
		$("#txtId").val(Id);
	}
	
	$(".update").click(function(){
	    $("#productForm").attr("action","update_product.php");
		$("#productForm").submit();  
	
		
	});

</script>