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
 else {header('Location:login/login.php');}
 //require("classes/order.php");
 /*include("cart1.php");
 $shCart= new ShoppingCart();
 $shCart->getCartItems();*/
  
  
?>


<div id="wrapper">

<!--<div class="col-md-2"> </br><?php //include($p."Templates/admin_sidebar.php"); ?></div>
<!-- InstanceBeginEditable name="EditRegion1" -->


<form  method=post id="bhaipanel" enctype="multipart/form-data">
<input type="text" name="orderId" id="orderId" hidden/>
<input type="text" name="deliver" id="deliver" hidden/>
<input type="text" id="quantity1" name="setquantity" hidden/>
<input type="text" id="p_id" name="txtIdAddToCart" hidden/>
<input type="hidden" id="orderIdupdate" name="orderIdupdate" / >	
<input type="hidden" id="orderRecept" name="orderRecept"/>
	 
	<?php
	$order= new Order();
	if(isset($_POST['deliver'])){
		$data =$order->updateOrderStatus(1,$_SESSION['user'],$_POST['deliver']);
	}
	
	if(isset($_POST["Upload"]) && isset($_POST["orderRecept"])){
		$fileInputName = $_POST["orderRecept"];
		$order= new Order();
		require("imageCrop.php");
		$productInfo=$order->getNewOrdersDetails();
				$fileName = $_FILES[$fileInputName]["name"];
				$fileType = $_FILES[$fileInputName]["type"];
				$fileSize = $_FILES[$fileInputName]["size"];
				$fileTemp = $_FILES[$fileInputName]["tmp_name"];
		//print_r($_FILES);	
		$imageResult=uploadImage($fileName,$fileSize,$fileType,$fileTemp,"recipts/","thumbnail/");
		//print_r($imageResult);
		 if($imageResult[0]){
			$order->uploadOrderRecipt($imageResult[1],$_POST["orderIdupdate"]);
			echo "uploaded";
			//print_r($_FILES['image']['error']);
			//print_r($_POST);
		}
		else {
			echo "Image not uploaded";
				
		}
	}
	
	?>	
    <!-- Heading -->
		<div id="" class="col-md-12">
           </br>
            <!-- /.row -->
           <?php include("bhai_index.php");?>
             <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Date</th>
                                                    <th>Customer Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Address</th>
                                                    <th>Order Amount</th>
													<th>View Details</th>
                                                    <th>Upload Recipt</th>
                                                    <th>Deliver Order</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
								$productInfo=null;
								$productInfo=$order->getNewOrdersDetails();
								foreach($productInfo as $data){
								?>
                                                <tr>
                                    <td class="order-number"><p><?php echo $data["ID"];?></p></td>
									<td><?php echo $data["time"];?></td>
									<td><p><?php echo $data["name"];?></p></td>
									<td><p><?php echo $data["phone"];?></p></td>
									<td><p><?php echo $data["address"];?></p></td>
									<td><span class="price"><?php echo $data["price"];?></span></td>
                                    <td><button onClick="setOrderId(<?php echo $data["ID"];?>)" type="button" class="btn btn-warning">Order Detail</button></td>
									<td> 
										<div class="row">										
											<div class="col-lg-6 col-md-6 col-sm-6">
												
												<input  type="file" class="form-control uploadWithID"    name="Order_<?php echo $data["ID"]; ?>"    />
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6">																
												<button type="submit" name="Upload" value="Upload" class="btn btn-info" onClick="setOrderIdForImage(<?php echo $data["ID"];?>)">Upload</button>
											</div>											
										</div>
									</td>
										
										
										<?php if($data["order_status"] == 0){ 
									
												
										?>
                                    <td> <button type="button" class="btn btn-info" onClick="setDeliverOrder(<?php echo $data["ID"];?>)">Dilever</button></td>
									
							<?php	} ?>
                                                </tr>
                                                    <?php } ?>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div><br>
                        <!-- /.panel-body -->
						<?php include($p."Templates/footer.php")?>
                    </div> 
        
        </div>
	
        <!-- /#page-wrapper -->
                                          
        
									    
    
</div>   
       </form>   <br>                        
									<!-- /Carousel Item -->

</form>
</body>
<script type="text/javascript">

	
	$(".uploadWithID").change(function(){
		alert($(this).attr("name"));
		$("#orderRecept").val($(this).attr("name"));
	});

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
<script>
function setOrderIdForImage(id){
	
	var txtId=document.getElementById("orderIdupdate");
	txtId.value=id;
	$("#bhaipanel").attr("action","bhai_panel.php");
	$("#bhaipanel").submit();
}

function setOrderId(id){
	
	var txtId=document.getElementById("orderId");
	txtId.value=id;
	$("#bhaipanel").attr("action","order_detail.php");
	$("#bhaipanel").submit();
}
	function setDeliverOrder(id){
	
	var txtId=document.getElementById("deliver");
	txtId.value=id;
	$("#bhaipanel").attr("action","bhai_panel.php");
	$("#bhaipanel").submit();
}
</script>
