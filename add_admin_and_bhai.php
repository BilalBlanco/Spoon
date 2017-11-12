<!DOCTYPE html>
<?php
$p="";
if(basename(__DIR__)!="bhai"){
	     $p="../";
	}  
session_start();	
if(isset($_SESSION['user']) && $_SESSION['userType']==3){include($p."Templates/admin_loggedin_header.php");}
 else {header('Location:login/login_admin.php');}
  
$nameErr = $DOBErr = $cnicErr = $passwordErr = $confirmPasswordErr = $phoneErr = $genderErr = $provinceErr = $districtErr = $cityErr = $tehsilErr = $comAddressErr = "";
$name = $DOB = $cnic = $password = $confirmPassword = $phone = $gender = $province = $date = $district = $city = $tehsil = $comAddress = $flag = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"]) || ($_POST["name"]==null)) {
    $nameErr = "Name is required";  
	$name_flag=0;
   }
   if (empty($_POST['name']) || (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"]))) {
	$nameErr = "Only letters are allowed";	
	$name_flag=0;
	} else {
	$name = test_input($_POST["name"]);
	$name_flag=1;
	}
  
  
  
  if (empty($_POST["DOB"])) {
    $DOBErr = "Date of birth is required";
	$dob_flag=0;
  } else {
    $DOB = test_input($_POST["DOB"]);
	$dob_flag=1;
  }
  
  if (empty($_POST["CNIC"])) {
    $cnicErr = "CNIC is required";
	$cnic_flag=0;
  }
   if(!preg_match("/^[1-9][0-9]{0,15}$/",$_POST["CNIC"])){
	   $cnicErr = "CNIC should be numeric, without dashes";
	   $cnic_flag=0;
   }
  else {
    $cnic = test_input($_POST["CNIC"]);
	$cnic_flag=1;
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
	$password_flag=0;
  } 
if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/",($_POST['password']))){
	$passwordErr = "Password length must be 8, numbers plus small and capital characters";
	$password_flag=0;
}
  else {
    $password = test_input($_POST["password"]);
	$passwordErr="";
	$password_flag=1;
  }
  
  if (empty($_POST["confirmPassword"])) {
    $confirmPasswordErr = "confirmPassword is required";
	$confirmPassword_flag=0;
  }
  if (($_POST["password"]!=$_POST["confirmPassword"]) && (!empty($_POST["confirmPassword"]))){
	  $confirmPasswordErr = "Both passwords don't match";
	  $confirmPassword_flag=0;
  }
  else {
	  $confirmPassword = test_input($_POST["confirmPassword"]);
	  $confirmPassword_flag=1;
  }
  
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
	$phone_flag=0;
  } 
   if(!is_numeric($_POST["phone"])){
	   $phoneErr = "Phone should be numeric";
	   $phone_flag=0;
   }
  else {
    $phone = test_input($_POST["phone"]);
	$phone_flag=1;
  }
  
  $gender = test_input($_POST["gender"]);
  $province = test_input($_POST["province"]);
  $district = test_input($_POST["district"]);
  $city = test_input($_POST["city"]);
  $tehsil = test_input($_POST["tehsil"]);
  
  if (empty($_POST["comAddress"])) {
    $comAddressErr = "Complete Address is required";
	$comAddress_flag=0;
  } else {
    $comAddress = test_input($_POST["comAddress"]);
	$comAddress_flag=1;
  }
  
  $date = date("Y-m-d H:i:s");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if(isset($_POST["register"])){

$user=new User();
//$user->logIn($_POST["cnic"],$_POST["password"]);
	$product= new Product();
	$imageResult=$product->fileUpload();
	if($name_flag==1 && $dob_flag==1 && $cnic_flag==1 && $password_flag==1 && $confirmPassword_flag==1 && $phone_flag==1 && $comAddress_flag=1){
	$user->registerUser(strtoupper($name),$DOB,$cnic,$password,$phone,strtoupper($gender),$_POST['dropdowntype'],$date,1,strtoupper($province),strtoupper($district),strtoupper($city),strtoupper($tehsil),strtoupper($comAddress),$imageResult[1]);
		//Cartison Product Entry
		$b = new User();
		$lastID = $b->getLastUserId();
		
		$lastUserID = $lastID[0]["user_id"];
		//print_r($lastUserID);
		//$lastUserID++;
		//require("../classes/product.php");
		$product=new Product();
		$lastId=$product->getLastProductId();	
		$itemId=$lastId[0]["product_id"];
		//print_r($itemId);
		//$ratingValue = 'null';
		for($i=7;$i<=$itemId;$i++){
			$b->insertIntoUserRatingTable($lastUserID,$i);
			//print_r($i);
		}
		//Cartison
	}
}
?>

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
        
		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        <script type="javascript">
		</script>
		<script src="js/validation.js"></script>
		<style>
		.error {color: #FF0000;
		font-size: 12px;
		}
		</style>
    </head>
    
    
    <body>
	
   <form method="post" enctype="multipart/form-data">	
		
		<!-- Container -->
		<div class="container">
			
			
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="#">Home</a> <i class="icons icon-right-dir"></i> Register Admin/Bhai</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                    
                    
                    
                    
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Register Admin/Bhai</h4>
                            </div>
                            
                            <div class="page-content">
							<p><span class="error">* required field.</span></p>
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            	<div class="row">
                                	
                                    
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Name</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="name" onkeypress="return isCharacter(event)" maxlength="30" >
										 									
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $nameErr;?></span>
									</div>
                                </div>
								
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Date Of Birth</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="date" name="DOB" placeholder="e.g(01/01/2001)" onKeyPress="return isNumberD(event)" maxlength="10">
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $DOBErr;?></span>
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>CNIC</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="CNIC" maxlength="13" placeholder="e.g(3540466377731)" onKeyPress="return isNumber(event)">
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $cnicErr;?></span>
                                    </div>	
                                    
                                </div>
                               
                                
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Password</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="password" name="password" id="password" maxlength="15" minlength="8" >
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $passwordErr;?></span>
                                    </div>	
                                    
                                </div>
                                <?php 
									  $a="dsada";
								?>
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Confirm Password</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="password" name="confirmPassword" id="confirmPassword" maxlength="15" >
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $confirmPasswordErr;?></span>
                                    </div>	
                                    
                                </div>								
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Phone Number</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="phone" placeholder="e.g(03008532211)" maxlength="11" onkeypress="return isNumber(event)">
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $phoneErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Gender</p>
                                    </div>
                                  
                                     <div class="col-lg-6 col-md-6 col-sm-6">
                                    	
										<select name="gender">
										  <option value="male">Male</option>
										  <option value="female">Female</option>
										  <option value="other">Other</option>
										  
										</select>
                                    </div>
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Province</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="province" maxlength="30" onKeyPress="return isCharacter(event)">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $provinceErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>District</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="district" maxlength="30" onKeyPress="return isCharacter(event)">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $districtErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>City</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6" maxlength="30">
                                    	<input type="text" name="city" onKeyPress="return isCharacter(event)">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $cityErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Tehsil</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="tehsil" maxlength="30" onKeyPress="return isCharacter(event)">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $tehsilErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3"">
                                    	<p>Complete Address</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="comAddress" maxlength="50" >
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $comAddressErr;?></span>
                                    </div>	
                                    
                                </div>
								
								
                                	<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3">
									<p>Select Admin Or Bhai</p>
								</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<select name="dropdowntype">
											<option name="Bhai" value="2">Bhai</option>
											<option name="Admin" value="4">Admin</option>
										
										</select>
									</div>
								
							</div>	
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Image Link</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	 					
								<input  type="file" class="form-control"    name="image"    />
                                    </div>	
                                    
                                </div>
							
                                
                               
                                
                               <div class="row">
                                    
                                 
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<input class="big" type="submit" value="Register" name="register">
                                        <input class="big" type="reset" value="Cancel">
                                    </div> 
                                    
                                </div>
                            </div>
                            
                    	</div>
                          
                    </div>
                        
                    </form>
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
					<?php include($p."Templates/admin_sidebar.php"); ?>
					<!-- /Categories -->
                    	
                    
				</aside>
                <!-- /Sidebar -->
                
			</div>
			<!-- /Content -->
			
			
			


			
			<?php include($p."Templates/footer.php")?>
		
    </body>
    

<!-- Mirrored from velikorodnov.com/html/homeshop/create_an_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
</html>