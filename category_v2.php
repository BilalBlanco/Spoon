<!DOCTYPE html>

<html>

    
<!-- Mirrored from velikorodnov.com/html/homeshop/category_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:23 GMT -->
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
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link href="css/jquery.nouislider.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/fontello.css">
   		<link rel="stylesheet" href="css/animation.css">
        <link rel="stylesheet" href="css/chosen.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/style.css">
        
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
if(isset($_SESSION['user'])){include($p."Templates/loggedin_header.php");}
 else {include($p."Templates/header.php");}
?>
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="#">Home</a> <i class="icons icon-right-dir"></i> Computers &amp; Tablets</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                        
                    <div class="row">
                    
                    	<!-- Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Computer &amp; Tablets</h4>
							</div>
                            
                            <div class="categories-heading">
                            	<a href="#"><img src="img/category-heading.jpg" alt=""></a>
                                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
                            </div>
							
						</div>
						<!-- /Heading -->
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="row subcategories">
                            	
                                <!-- Subcategory -->
                                <div class="col-lg-fifth col-md-fifth col-sm-fifth subcategory">
                                	
                                    <a href="#"><img src="img/products/sample1.jpg" alt="Product1"></a>
                                    <div class="product-info">
                                        <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                                    </div>
                                    
                                </div>
                               	<!-- /Subcategory --> 
                                
                                <!-- Subcategory -->
                                <div class="col-lg-fifth col-md-fifth col-sm-fifth subcategory">
                                	
                                    <a href="#"><img src="img/products/sample2.jpg" alt="Product1"></a>
                                    <div class="product-info">
                                        <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                                    </div>
                                    
                                </div>
                               	<!-- /Subcategory --> 
                                
                                <!-- Subcategory -->
                                <div class="col-lg-fifth col-md-fifth col-sm-fifth subcategory">
                                	
                                    <a href="#"><img src="img/products/sample3.jpg" alt="Product1"></a>
                                    <div class="product-info">
                                        <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                                    </div>
                                    
                                </div>
                               	<!-- /Subcategory --> 
                                
                                <!-- Subcategory -->
                                <div class="col-lg-fifth col-md-fifth col-sm-fifth subcategory">
                                	
                                    <a href="#"><img src="img/products/sample4.jpg" alt="Product1"></a>
                                    <div class="product-info">
                                        <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                                    </div>
                                    
                                </div>
                               	<!-- /Subcategory --> 
                                
                                <!-- Subcategory -->
                                <div class="col-lg-fifth col-md-fifth col-sm-fifth subcategory">
                                	
                                    <a href="#"><img src="img/products/sample5.jpg" alt="Product1"></a>
                                    <div class="product-info">
                                        <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                                    </div>
                                    
                                </div>
                               	<!-- /Subcategory --> 
                                
                            </div>
                            
                        </div>
                        
                    </div>
                     
					<div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	<div class="category-heading">
								<select class="chosen-select">
                                	<option>Product name</option>
                                   	<option>Product name</option>
                                    <option>Product name</option>
                                    <option>Product name</option> 
                                </select>
                                <select class="chosen-select">
                                	<option>Select manufacturer</option>
                                   	<option>Product name</option>
                                    <option>Product name</option>
                                    <option>Product name</option> 
                                </select>
                                <div class="category-buttons">
									<a href="category_v1.html"><i class="icons icon-th-3"></i></a>
									<a href="category_v2.html"><i class="icons icon-th-list-4 active-button"></i></a>
								</div>
							</div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	<div class="category-results">
                            	<p>Results 1-6 of 6</p>
                                <p>Show 
                                <select class="chosen-select">
                                	<option>1</option>
                                   	<option>2</option>
                                    <option>6</option>
                                    <option>P10</option> 
                                </select>
                                per page
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	<div class="pagination">
                            	<a href="#"><div class="previous"><i class="icons icon-left-dir"></i></div></a>
                                <a href="#"><div class="page-button">1</div></a>
                                <a href="#"><div class="page-button">2</div></a>
                                <a href="#"><div class="page-button">3</div></a>
                                <a href="#"><div class="next"><i class="icons icon-right-dir"></i></div></a>
                            </div>
                        </div>
                        
                   </div>
                   
                   <div class="row"> 
                   
                        <!-- Product Item -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="grid-view product">
                                <div class="product-image col-lg-4 col-md-4 col-sm-4">
                                    <img src="img/products/sample1.jpg" alt="Product1">
                                    <a href="products_page_v1.html" class="product-hover">
														<i class="icons icon-eye-1"></i> Quick View
													</a>
                                </div>
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 product-content no-padding">
                                	<div class="product-info">
                                        <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                        <span class="price">$281.00</span>
										<div class="rating-box">
											<div class="rating readonly-rating" data-score="4"></div>
											<span>3 Review(s)</span>
										</div>
                                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
    </p>		
									</div>


                                    <div class="product-actions full-width">
                                        <span class="add-to-cart">
                                            <span class="action-wrapper">
                                                <i class="icons icon-basket-2"></i>
                                                <span class="action-name">Add to cart</span>
                                            </span>
                                        </span>
                                        <span class="add-to-favorites">
                                            <span class="action-wrapper">
                                                <i class="icons icon-heart-empty"></i>
                                                <span class="action-name">Add to wishlist</span>
                                            </span>
                                        </span>
                                        <span class="add-to-compare">
                                            <span class="action-wrapper">
                                                <i class="icons icon-docs"></i>
                                                <span class="action-name">Add to Compare</span>
                                            </span>
                                        </span>
                                    </div>
                            	</div>
                            </div>
                            
                        </div>
                        <!-- Product Item -->
                        
                        
                        <!-- Product Item -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="grid-view product">
                                <div class="product-image col-lg-4 col-md-4 col-sm-4">
                                    <img src="img/products/sample2.jpg" alt="Product1">
                                    <a href="products_page_v1.html" class="product-hover">
														<i class="icons icon-eye-1"></i> Quick View
													</a>
                                </div>
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 product-content no-padding">
                                	<div class="product-info">
                                        <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                        <span class="price">$281.00</span>
                                        <div class="rating-box">
											<div class="rating readonly-rating" data-score="4"></div>
											<span>3 Review(s)</span>
										</div>
                                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
    </p>		
									</div>


                                    <div class="product-actions full-width">
                                        <span class="add-to-cart">
                                            <span class="action-wrapper">
                                                <i class="icons icon-basket-2"></i>
                                                <span class="action-name">Add to cart</span>
                                            </span>
                                        </span>
                                        <span class="add-to-favorites">
                                            <span class="action-wrapper">
                                                <i class="icons icon-heart-empty"></i>
                                                <span class="action-name">Add to wishlist</span>
                                            </span>
                                        </span>
                                        <span class="add-to-compare">
                                            <span class="action-wrapper">
                                                <i class="icons icon-docs"></i>
                                                <span class="action-name">Add to Compare</span>
                                            </span>
                                        </span>
                                    </div>
                            	</div>
                            </div>
                            
                        </div>
                        <!-- Product Item -->
                        
                        
                        <!-- Product Item -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="grid-view product">
                                <div class="product-image col-lg-4 col-md-4 col-sm-4">
                                    <img src="img/products/sample3.jpg" alt="Product1">
                                    <a href="products_page_v1.html" class="product-hover">
														<i class="icons icon-eye-1"></i> Quick View
													</a>
                                </div>
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 product-content no-padding">
                                	<div class="product-info">
                                        <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                        <span class="price">$281.00</span>
                                        <div class="rating-box">
											<div class="rating readonly-rating" data-score="4"></div>
											<span>3 Review(s)</span>
										</div>
                                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
    </p>		
									</div>


                                    <div class="product-actions full-width">
                                        <span class="add-to-cart">
                                            <span class="action-wrapper">
                                                <i class="icons icon-basket-2"></i>
                                                <span class="action-name">Add to cart</span>
                                            </span>
                                        </span>
                                        <span class="add-to-favorites">
                                            <span class="action-wrapper">
                                                <i class="icons icon-heart-empty"></i>
                                                <span class="action-name">Add to wishlist</span>
                                            </span>
                                        </span>
                                        <span class="add-to-compare">
                                            <span class="action-wrapper">
                                                <i class="icons icon-docs"></i>
                                                <span class="action-name">Add to Compare</span>
                                            </span>
                                        </span>
                                    </div>
                            	</div>
                            </div>
                            
                        </div>
                        <!-- Product Item -->
                        
                        
                        <!-- Product Item -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="grid-view product">
                                <div class="product-image col-lg-4 col-md-4 col-sm-4">
                                    <img src="img/products/sample4.jpg" alt="Product1">
                                    <a href="products_page_v1.html" class="product-hover">
														<i class="icons icon-eye-1"></i> Quick View
													</a>
                                </div>
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 product-content no-padding">
                                	<div class="product-info">
                                        <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                        <span class="price">$281.00</span>
                                        <div class="rating-box">
											<div class="rating readonly-rating" data-score="4"></div>
											<span>3 Review(s)</span>
										</div>
                                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
    </p>		
									</div>


                                    <div class="product-actions full-width">
                                        <span class="add-to-cart">
                                            <span class="action-wrapper">
                                                <i class="icons icon-basket-2"></i>
                                                <span class="action-name">Add to cart</span>
                                            </span>
                                        </span>
                                        <span class="add-to-favorites">
                                            <span class="action-wrapper">
                                                <i class="icons icon-heart-empty"></i>
                                                <span class="action-name">Add to wishlist</span>
                                            </span>
                                        </span>
                                        <span class="add-to-compare">
                                            <span class="action-wrapper">
                                                <i class="icons icon-docs"></i>
                                                <span class="action-name">Add to Compare</span>
                                            </span>
                                        </span>
                                    </div>
                            	</div>
                            </div>
                            
                        </div>
                        <!-- Product Item -->
                        
                        
                        <!-- Product Item -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="grid-view product">
                                <div class="product-image col-lg-4 col-md-4 col-sm-4">
                                    <img src="img/products/sample5.jpg" alt="Product1">
                                    <a href="products_page_v1.html" class="product-hover">
														<i class="icons icon-eye-1"></i> Quick View
													</a>
                                </div>
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 product-content no-padding">
                                	<div class="product-info">
                                        <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                        <span class="price">$281.00</span>
                                        <div class="rating-box">
											<div class="rating readonly-rating" data-score="4"></div>
											<span>3 Review(s)</span>
										</div>
                                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
    </p>		
									</div>


                                    <div class="product-actions full-width">
                                        <span class="add-to-cart">
                                            <span class="action-wrapper">
                                                <i class="icons icon-basket-2"></i>
                                                <span class="action-name">Add to cart</span>
                                            </span>
                                        </span>
                                        <span class="add-to-favorites">
                                            <span class="action-wrapper">
                                                <i class="icons icon-heart-empty"></i>
                                                <span class="action-name">Add to wishlist</span>
                                            </span>
                                        </span>
                                        <span class="add-to-compare">
                                            <span class="action-wrapper">
                                                <i class="icons icon-docs"></i>
                                                <span class="action-name">Add to Compare</span>
                                            </span>
                                        </span>
                                    </div>
                            	</div>
                            </div>
                            
                        </div>
                        <!-- Product Item -->
                        
                        
                        <!-- Product Item -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="grid-view product">
                                <div class="product-image col-lg-4 col-md-4 col-sm-4">
                                    <img src="img/products/sample6.jpg" alt="Product1">
                                    <a href="products_page_v1.html" class="product-hover">
														<i class="icons icon-eye-1"></i> Quick View
													</a>
                                </div>
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 product-content no-padding">
                                	<div class="product-info">
                                        <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                        <span class="price">$281.00</span>
                                        <div class="rating-box">
											<div class="rating readonly-rating" data-score="4"></div>
											<span>3 Review(s)</span>
										</div>
                                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
    </p>		
									</div>


                                    <div class="product-actions full-width">
                                        <span class="add-to-cart">
                                            <span class="action-wrapper">
                                                <i class="icons icon-basket-2"></i>
                                                <span class="action-name">Add to cart</span>
                                            </span>
                                        </span>
                                        <span class="add-to-favorites">
                                            <span class="action-wrapper">
                                                <i class="icons icon-heart-empty"></i>
                                                <span class="action-name">Add to wishlist</span>
                                            </span>
                                        </span>
                                        <span class="add-to-compare">
                                            <span class="action-wrapper">
                                                <i class="icons icon-docs"></i>
                                                <span class="action-name">Add to Compare</span>
                                            </span>
                                        </span>
                                    </div>
                            	</div>
                            </div>
                            
                        </div>
                        <!-- Product Item -->
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="category-results">
                                <p>Results 1-6 of 6</p>
                                <p>Show 
                                <select class="chosen-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>6</option>
                                    <option>P10</option> 
                                </select>
                                per page
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="pagination">
                                <a href="#"><div class="previous"><i class="icons icon-left-dir"></i></div></a>
                                <a href="#"><div class="page-button">1</div></a>
                                <a href="#"><div class="page-button">2</div></a>
                                <a href="#"><div class="page-button">3</div></a>
                                <a href="#"><div class="next"><i class="icons icon-right-dir"></i></div></a>
                            </div>
                        </div>
                        
                    </div>
					
					
						
				</section>
				<!-- /Main Content -->
				
				
				
				
				<!-- Sidebar -->
				<aside class="sidebar right-sidebar col-lg-3 col-md-3 col-sm-3">
					
                    <!-- Filter -->
                    <div class="row sidebar-box green">
                    
                    	<div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="sidebar-box-heading">
                            	<i class="icons icon-filter"></i>
                            	<h4>Filters</h4>
                            </div>
                            
                            <div class="sidebar-box-content sidebar-padding-box">
                            	<label>Categories</label><br>
                                <select class="chosen-select-full-width">
                                	<option>Category 1</option>
                                    <option>Category 1</option>
                                    <option>Category 1</option>
                                    <option>Category 1</option>
                                    <option>Category 1</option>
                                </select>
                                <br><br>
                                <label>Manufacturers</label><br>
                                <input type="checkbox" id="categorymanufacturer1"><label for="categorymanufacturer1">Lorem <span class="grey">(12)</span></label><br>
                                <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">Ipsum <span class="grey">(14)</span></label><br>
                                <input type="checkbox" id="categorymanufacturer3"><label for="categorymanufacturer3">Dolor <span class="grey">(4)</span></label><br>
                                <input type="checkbox" id="categorymanufacturer4"><label for="categorymanufacturer4">Est <span class="grey">(24)</span></label><br>
                                <input type="checkbox" id="categorymanufacturer5"><label for="categorymanufacturer5">Amir <span class="grey">(11)</span></label><br>
                                <br>
                                <label>Price</label>
                            	<div class="noUiSlider" data-min-range="30" data-max-range="200" data-min-value="80" data-max-value="150"></div>
								<span class="price-range-min"></span>
								<span class="price-range-max"></span>
                                <br><br>
                                <label>Color</label><br>
								<input id="checkbox-color-white" type="checkbox"><label class="color-checkbox white" for="checkbox-color-white"></label>
                                <input id="checkbox-color-red" type="checkbox"><label class="color-checkbox red" for="checkbox-color-red"></label>
								<input id="checkbox-color-green" type="checkbox"><label class="color-checkbox green" for="checkbox-color-green"></label>
								<input id="checkbox-color-blue" type="checkbox"><label class="color-checkbox blue" for="checkbox-color-blue"></label>
								<input id="checkbox-color-black" type="checkbox"><label class="color-checkbox black" for="checkbox-color-black"></label>
                                <br><br>
                                <input type="submit" value="Show">
                                <input class="dark-blue" type="reset" value="Reset">
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    
					<!-- Categories -->
					<div> <?php include($p."Templates/sidebar.php"); ?></div>
					<!-- /Categories -->
					
					
					<!-- Compare Products -->
					<div class="row sidebar-box blue">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            	<i class="icons icon-docs"></i>
								<h4>Compare Products</h4>
							</div>
							<div class="sidebar-box-content">
                                <table class="compare-table">
                                    
                                    <tr>
                                        <td class="product-thumbnail"><img src="img/products/sample1.jpg" alt="Product1"></td>
                                        <td class="product-info">
                                            <p><a href="#">Lorem ipsum dolor sit amet</a></p>
                                            <a href="#" class="remove">Remove</a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="product-thumbnail"><img src="img/products/sample2.jpg" alt="Product1"></td>
                                        <td class="product-info">
                                            <p><a href="#">Lorem ipsum dolor sit amet</a></p>
                                            <a href="#" class="remove">Remove</a>
                                        </td>
                                    </tr>
                                    
                                </table>
                                <div class="padding-box">
                                	<a class="button grey">Go to compare</a>
                                </div>
							</div>
						</div>
						
					</div>
					<!-- /Compare Products -->
					
					
					<!-- Carousel -->
					<div class="row sidebar-box">
						
						<div class="col-lg-12 col-md-12 col-sm-12 sidebar-carousel">
							
							<!-- Slider -->
							<section class="sidebar-slider">
								<div class="sidebar-flexslider">
									<ul class="slides">
										<li>
											<a href="#"><img src="img/sidebar-slide1.jpg" alt="Slide1"/></a>
										</li>
										<li>
											<a href="#"><img src="img/sidebar-slide2.jpg" alt="Slide1"/></a>
										</li>
										<li>
											<a href="#"><img src="img/sidebar-slide3.jpg" alt="Slide1"/></a>
										</li>
									</ul>
								</div>
								<div class="slider-nav"></div>
							</section>
							<!-- /Slider -->
                            
						</div>
						
					</div>
					<!-- /Carousel -->
					
					
					<!-- Bestsellers -->
					<div class="row sidebar-box red">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            <i class="icons icon-award-2"></i>
								<h4>Bestsellers</h4>
							</div>
							
							<div class="sidebar-box-content">
								<table class="bestsellers-table">
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample1.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">Lorem ipsum dolor sit amet</a></p>
											<span class="price">$550.00</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample2.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">Lorem ipsum dolor sit amet</a></p>
											<span class="price">$550.00</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample3.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">Lorem ipsum dolor sit amet</a></p>
                                            <div class="rating readonly-rating" data-score="4"></div>
											<span class="price"><del>$650.00</del> $550.00</span>
										</td>
									</tr>
									
								</table>
							</div>
							
						</div>
						
					</div>
					<!-- /Bestsellers -->
					
					
					<!-- Tag Cloud -->
					<div class="row sidebar-box green">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            	<i class="icons icon-tag-6"></i>
								<h4>Tags Cloud</h4>
							</div>
							
							<div class="sidebar-box-content sidebar-padding-box">
								<a href="#" class="tag-item">digital camera</a>
								<a href="#" class="tag-item">lorem</a>
								<a href="#" class="tag-item">gps</a>
								<a href="#" class="tag-item">headphones</a>
								<a href="#" class="tag-item">ipsum</a>
								<a href="#" class="tag-item">laptop</a>
								<a href="#" class="tag-item">smartphone</a>
								<a href="#" class="tag-item">tv</a>
							</div>
								
						</div>
						
					</div>
					<!-- /Tag Cloud -->
					
					
					<!-- Specials -->
					<div class="row products-row sidebar-box orange">
						 
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Carousel Heading -->
							<div class="carousel-heading no-margin">
								
								<h4><i class="icons icon-magic"></i> Specials</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
								
							</div>
							<!-- /Carousel Heading -->
							
						</div>
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="1">
									
								<!-- Slide -->
								<div>
									<!-- Carousel Item -->
									<div class="product">
										
										<div class="product-image">
											<img src="img/products/sample1.jpg" alt="Product1">
											<a href="products_page_v1.html" class="product-hover">
												<i class="icons icon-eye-1"></i> Quick View
											</a>
										</div>
										
										<div class="product-info">
											<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
											<span class="price">$281.00</span>
											<div class="rating readonly-rating" data-score="4"></div>
										</div>
										
										<div class="product-actions">
											<span class="add-to-cart">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Add to cart</span>
												</span >
											</span>
											<span class="add-to-favorites">
												<span class="action-wrapper">
													<i class="icons icon-heart-empty"></i>
													<span class="action-name">Add to wishlist</span>
												</span>
											</span>
											<span class="add-to-compare">
												<span class="action-wrapper">
													<i class="icons icon-docs"></i>
													<span class="action-name">Add to Compare</span>
												</span>
											</span>
										</div>
										
									</div>
									<!-- /Carousel Item -->
								</div>
								<!-- /Slide -->
								
								
								<!-- Slide -->
								<div>
									<!-- Carousel Item -->
									<div class="product">
										
										<div class="product-image">
											<img src="img/products/sample2.jpg" alt="Product1">
											<a href="products_page_v1.html" class="product-hover">
												<i class="icons icon-eye-1"></i> Quick View
											</a>
										</div>
										
										<div class="product-info">
											<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
											<span class="price">$281.00</span>
											<div class="rating readonly-rating" data-score="4"></div>
										</div>
										
										<div class="product-actions">
											<span class="add-to-cart">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Add to cart</span>
												</span >
											</span>
											<span class="add-to-favorites">
												<span class="action-wrapper">
													<i class="icons icon-heart-empty"></i>
													<span class="action-name">Add to wishlist</span>
												</span>
											</span>
											<span class="add-to-compare">
												<span class="action-wrapper">
													<i class="icons icon-docs"></i>
													<span class="action-name">Add to Compare</span>
												</span>
											</span>
										</div>
										
									</div>
									<!-- /Carousel Item -->
								</div>
								<!-- /Slide -->
								
							</div>
						
						</div>
						<!-- / Carousel -->
						
						
					</div>
					<!-- /Specials -->
					
					
				</aside>
				<!-- /Sidebar -->
				
			</div>
			<!-- /Content -->
			
			

			<!-- Banner -->
			<section class="banner">
				
				<div class="left-side-banner banner-item icon-on-right gray">
					<h4>8(802)234-5678</h4>
					<p>Monday - Saturday: 8am - 5pm PST</p>
					<i class="icons icon-phone-outline"></i>
				</div>
				
				<a href="#">
				<div class="middle-banner banner-item icon-on-left light-blue">
					<h4>Free shipping</h4>
					<p>on all orders over $99</p>
                    <span class="button">Learn more</span>
					<i class="icons icon-truck-1"></i>
				</div>
				</a>
				
				<a href="#">
				<div class="right-side-banner banner-item orange">
					<h4>Crazy sale!</h4>
					<p>on selected items</p>
                    <span class="button">Shop now</span>
				</div>
				</a>
				
			</section>
			<!-- /Banner -->

			
			<!-- Footer -->
			<footer id="footer" class="row">
				
				<!-- Main Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="main-footer">
					
						<div class="row">
							
							<!-- The Service -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>The Service</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> My account</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Order history</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Vendor contact</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Shop page</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Categories</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Search results</a></li>
								</ul>
							</div>
							<!-- /The Service -->
							
							
							<!-- Like us on Facebook -->
							<div class="col-lg-3 col-md-3 col-sm-6 facebook-iframe">
								<h4>Like us on Facebook</h4>
                                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=270&amp;height=250&amp;colorscheme=light&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; height:290px;"></iframe>
							</div>
							<!-- /Like us on Facebook -->
							
							
							<!-- Information -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>Information</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> About Us</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> New Collection</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Bestsellers</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Manufacturers</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Privacy Policy</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Terms &amp; Conditions</a></li>
								</ul>
							</div>
							<!-- /Information -->
							
							
							<!-- Like us on Twitter -->
							<div class="col-lg-3 col-md-3 col-sm-6 twitter-widget">
								<h4>From Twitter</h4>
								<div id="twitter-widget">
                                
								</div>
                                <a href="#" class="button blue small">Follow us</a>
							</div>
							<!-- /Like us on Twitter -->
                            
                            
						</div>
                        
                        <div class="row">
                        	
                            <!-- About Us -->
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<h4>About Us</h4>
                                <p>Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. <br>
Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia.</p>
                            </div>
                            <!-- /About Us -->
                            
                            
                            <!-- Contact Us -->
							<div class="col-lg-4 col-md-4 col-sm-4 contact-footer-info">
								<h4>Contact Us</h4>
								<ul>
									<li><i class="icons icon-location"></i> 8901 Marmora Road, Glasgow, D04 89GR.</li>
                                    <li><i class="icons icon-phone"></i> +1 800 603 6035</li>
									<li><i class="icons icon-mail-alt"></i><a href="mailto:mail@company.com"> mail@companyname.com</a></li>
									<li><i class="icons icon-skype"></i> homeshop</li>
								</ul>
                                
                                <!-- Social Media -->
                                <div class="social-media">
                                    <ul>
                                        <li class="social-googleplus tooltip-hover" data-toggle="tooltip" data-placement="top" title="Google+"><a href="#"></a></li>
                                        <li class="social-facebook tooltip-hover" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="#"></a></li>
                                        <li class="social-pinterest tooltip-hover" data-toggle="tooltip" data-placement="top" title="Pinterest"><a href="#"></a></li>
                                        <li class="social-twitter tooltip-hover" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="#"></a></li>
                                        <li class="social-youtube tooltip-hover" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="#"></a></li>
                                    </ul>
                                </div>
                                <!-- /Social Media -->
                                
							</div>
							<!-- /Contact Us -->
                        
                        	
                            <!-- Newsletter -->
							<div class="col-lg-4 col-md-4 col-sm-4">
								<form id="newsletter" action="http://velikorodnov.com/html/homeshop/php/newsletter.php">
									<h4>Newsletter Sign Up</h4>
									<p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
									<input type="text" name="newsletter-email" placeholder="Enter your email address">
									<input type="submit" name="newsletter-submit" value="Submit">
								</form>
							</div>
							<!-- /Newsletter -->
                            
                        </div>
						
					</div>
					
				</div>
				<!-- /Main Footer -->
				
				
				<!-- Lower Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="lower-footer">
					
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<p class="copyright">Copyright 2014 <a href="#">HomeShop</a>. All Rights Reserved.</p>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<ul class="payment-list">
									<li class="payment1"></li>
									<li class="payment2"></li>
									<li class="payment3"></li>
									<li class="payment4"></li>
									<li class="payment5"></li>
								</ul>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<!-- /Lower Footer -->
				
			</footer>
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
    

<!-- Mirrored from velikorodnov.com/html/homeshop/category_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:35 GMT -->
</html>