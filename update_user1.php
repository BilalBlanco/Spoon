<!DOCTYPE html>

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
		 <script src="../js/validation.js"></script> 
        
		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    
<?php
$p="";
if(basename(__DIR__)!="bhai"){
	     $p="../";
	}  
session_start();	
if(isset($_SESSION['user'])){include($p."Templates/admin_loggedin_header.php");}
 else {include($p."Templates/admin_header.php");}
//require("db/dbcon.php");
//require("user.php");
//require("product.php");
//require("product.php");
$nameErr = $DOBErr = $cnicErr = $oldPasswordErr = $newPasswordErr = $confirmPasswordErr = $phoneErr = $genderErr = $provinceErr = $districtErr = $cityErr = $tehsilErr = $comAddressErr = "";
$name = $DOB = $cnic = $oldPassword  = $newPassword = $confirmPassword = $phone = $gender = $province = $date = $district = $city = $tehsil = $comAddress = $name_flag = $CNIC_flag = $DOB_flag = $oldPassword_flag = $newPassword_flag = $confirmPassword_flag = $phone_flag = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//echo $_POST["oldPassword"];
   if (!empty($_POST["name"]) || ($_POST["name"]!=null)) {  
		if ( (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"]))) {
			$nameErr = "Only letters are allowed";	
			$name_flag=0;
		} 
		else if ( (preg_match("/^[a-zA-Z ]*$/",$_POST["name"]))){
			$name = test_input($_POST["name"]);
			$name_flag=1;
			           
		}
    }
	
  
  
  if (!empty($_POST["DOB"])) {  
    $DOB = test_input($_POST["DOB"]);
	$DOB_flag=1;
  }
  
    if (!empty($_POST["CNIC"])) {
    
	    if(!preg_match("/^[1-9][0-9]{0,15}$/",$_POST["CNIC"])){
		   $cnicErr = "CNIC should be numeric, without '-'";
		   $CNIC_flag=0;
	    }
	    else if(preg_match("/^[1-9][0-9]{0,15}$/",$_POST["CNIC"])){
		   $cnic = test_input($_POST["CNIC"]);
		   $CNIC_flag=1;
	    }
    }
     
    if (empty($_POST["oldPassword"])) {
        $oldPasswordErr = "Password is required for updation";
	    $password_flag=0;
    } 
	else if( ($_POST["oldPassword"])!=$_SESSION["oldPassword"]){
		//echo $oldPassword; echo $_POST["oldPassword"];
		$oldPasswordErr = "Incorrect Password";
		$password_flag=0;
	}
    else {
		$oldPassword = test_input($_POST["oldPassword"]);
		$oldPasswordErr="";
		$password_flag=1;
    }
  if(!empty($_POST["newPassword"])){
  
	    if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/",($_POST['newPassword']))){
			$newPasswordErr = "Password length must be 8, numbers plus small and capital characters";
			$newPassword_flag=0;
		}
	    else {
		    $newPassword = test_input($_POST["newPassword"]);
		    $newPasswordErr="";
		    $newPassword_flag=0;
	    }
	  
	    if (empty($_POST["confirmPassword"])) {
	    	$confirmPasswordErr = "Confirm Password is required";
		    $confirmPassword_flag=0;
	    }
	    else if (($_POST["newPassword"]!=$_POST["confirmPassword"]) && (!empty($_POST["confirmPassword"]))){
		    $confirmPasswordErr = "Both passwords don't match";
		    $confirmPassword_flag=0;
	    }
	    else {
		    $confirmPassword = test_input($_POST["confirmPassword"]);
			$oldPassword=$_POST["confirmPassword"];
		    $confirmPassword_flag=1;
	    }
   }
  
  if (isset($_POST["phone"])) {    
		if(!is_numeric($_POST["phone"]) && ($_POST["phone"])!=null){
		   $phoneErr = "Phone should be numeric";
		   $phone_flag=0;
		}
	    else {
			$phone = test_input($_POST["phone"]);
			$phone_flag=1;
	    }
    }
  
 /* $gender = test_input($_POST["gender"]);
  $province = test_input($_POST["province"]);
  $district = test_input($_POST["district"]);
  $city = test_input($_POST["city"]);
  $tehsil = test_input($_POST["tehsil"]);*/
  
  if (!empty($_POST["tehsil"])) {      
    $tehsil = test_input($_POST["tehsil"]);
	  
  }
  
  if (!empty($_POST["city"])) {      
    $city = test_input($_POST["city"]);
	 
  }
  
  if (!empty($_POST["district"])) {      
    $district = test_input($_POST["district"]);
	  
  }
  
  if (!empty($_POST["province"])) {      
    $province = test_input($_POST["province"]);
	  
  }
  
  if (!empty($_POST["gender"])) {      
    $gender = test_input($_POST["gender"]);
	 
  }
  
  if (!empty($_POST["comAddress"])) {      
    $comAddress = test_input($_POST["comAddress"]);
	 
  }
  
  $date = date("Y-m-d H:i:s");
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$user=new User();
if(isset($_SESSION["user"])){
//echo $_SESSION["user"];
	if(isset($_POST["update"])){

	//print_r($_POST);
	//$user->logIn($_POST["cnic"],$_POST["password"]);
	$product= new Product();
		if($name_flag==1  &&  $DOB_flag==1  &&  $CNIC_flag==1  &&  $password_flag==1    && $phone_flag==1){
		$imageResult=$product->fileUpload();
		$user->updateUser(strtoupper($name),$DOB,$cnic,$oldPassword,$phone,strtoupper($_POST["gender"]),1,1,strtoupper($province),strtoupper($district),strtoupper($city),strtoupper($tehsil),strtoupper($comAddress),$imageResult[1],$_SESSION["user"]);
		}
	}
}

?>
<html>

    
<!-- Mirrored from velikorodnov.com/html/homeshop/create_an_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->

    
    <body>
	
  
		
		<!-- Container -->
		<div class="container ">
			
			
			<!-- /Header -->
			
			<form method="post" enctype="multipart/form-data">	
			<!-- Content -->
			<div class="row content ">
				 
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="#">Home</a> <i class="icons icon-right-dir"></i> Modify User</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
                    <?php 
						if(isset($_SESSION["user"])){
					    $productInfo=$user->viewUser($_SESSION["user"]); 						
					?>                   
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Modify User</h4>
                            </div>
                            
                            <div class="page-content">
							<p><span class="error">* required field.</span></p>
                            	<div class="row">
                                	
                                   
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Name</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="name" maxlength="30" onkeypress="isCharacter(event)"; value="<?php echo $name=$productInfo[0]["user_name"]; ?>">
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
                                    	<input type="date" name="DOB" value="<?php echo $DOB=$productInfo[0]["user_DOB"]; ?>">
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
                                    	<input type="text" onkeypress="isNumber(event);" maxlength="13" name="CNIC" value="<?php echo $cnic=$productInfo[0]["cnic"]; ?>">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $cnicErr;?></span>
                                    </div>
                                    
                                </div>
                               
                                
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Old Password</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="password" maxlength="15" name="oldPassword"   value="">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $oldPasswordErr;?></span>
                                    </div>
                                    
                                </div>
								
								<?php  $_SESSION["oldPassword"]=$productInfo[0]["password"]; ?>
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>New Password</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="password" maxlength="15" name="newPassword" placeholder="********">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $newPasswordErr;?></span>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Confirm Password</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="password" maxlength="15" name="confirmPassword" placeholder="********">
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
                                    	<input type="text" maxlength="11" onkeypress="isNumber(event);" name="phone" value="<?php echo $phone=$productInfo[0]["user_phone"]; ?>">
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
                                    	
										<select name="gender" >
										  <option value="<?php echo $productInfo[0]["user_gender"];?>"><?php echo $productInfo[0]["user_gender"];?></option>
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
                                    	<input type="text" onkeypress="isCharacter(event);" maxlength="10" name="province" value="<?php echo $province=$productInfo[0]["user_province"]; ?>">
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
                                    	<input type="text" name="district" onkeypress="isCharacter(event);" maxlength="10" value="<?php echo $district=$productInfo[0]["user_district"]; ?>">
                                    </div>	
										<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $districtErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>City</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="city" onkeypress="isCharacter(event);" maxlength="10" value="<?php echo $city=$productInfo[0]["user_city"]; ?>">
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
                                    	<input type="text" name="tehsil" onkeypress="isCharacter(event);" maxlength="10" value="<?php echo $tehsil=$productInfo[0]["user_tehsil"]; ?>">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $tehsilErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Complete Address</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="comAddress"  maxlength="50" value="<?php echo $comAddress=$productInfo[0]["user_comAddress"]; ?>">
                                    </div>	
										<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php echo $comAddressErr;?></span>
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
                                    	<input class="big" type="submit" value="Update" name="update">
                                        <input class="big" type="reset" value="Cancel">
                                    </div> 
                                    
                                </div>
                            </div>
                            
                    	</div>
                          
                    </div>
                        
					<?php }else{ echo "<script type='text/javascript'>alert('You should first logged in!')</script>";
					echo '<script type="text/javascript"> window.location = "login/login.php" </script>';
					}?>		 						
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					
                    
				</aside>
                <!-- /Sidebar -->
                
			</div>
			
			<!-- /Content -->
			</form>
			
			


			
			<?php include($p."Templates/footer.php")?>
			</div>
    </body>
    

<!-- Mirrored from velikorodnov.com/html/homeshop/create_an_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
</html>