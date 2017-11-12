<!DOCTYPE html>

<html>

    
<!-- Mirrored from velikorodnov.com/html/homeshop/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:52 GMT -->
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
        
    </head>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Header -->
			<?php   
$p="";
if(basename(__DIR__)!="bhai"){
	     $p="../";
	}  

  include($p."Templates/header.php");
  
  
?>
					
			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="#">Home</a> <i class="icons icon-right-dir"></i> News &amp; Reviews</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="carousel-heading">
                                <h4>New &amp; Reviews</h4>
                            </div>
                            
                    	</div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="blog-item">
                            	
                                <a href="blog_post.html"><img src="img/blog/sample1.jpg" alt=""></a>
                                <div class="blog-info">
                                	<h3><a href="blog_post.html">Fusce euismod consequat ante</a></h3>
                                    <div class="blog-meta">
                                    	<span class="date"><i class="icons icon-clock"></i> 21 December 2012</span>
                                        <span class="cat"><i class="icons icon-tag"></i> <a href="#">lorem</a>, <a href="#">tablet</a></span>
                                        <span class="views"><i class="icons icon-eye-1"></i> 11 times</span>
										<div class="rating-box">
											<span>Rate this item</span>
											<div class="rating readonly-rating" data-score="4"></div>
											<span>(1 vote)</span>
										</div>
                                    </div>
                                    <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </p>
                                </div>
								<div class="product-actions blog-actions">
									<span class="product-action dark-blue">
										<span class="action-wrapper">
											<i class="icons icon-doc-text"></i>
											<span class="action-name">Read more</span>
										</span>
									</span>
									<span class="product-action blue">
										<span class="action-wrapper">
											<i class="icons icon-pencil-1"></i>
											<span class="action-name">Add new comment</span>
										</span>
									</span>
								</div>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    <div class="row">    
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        	<div class="blog-item">
                            	
                                <a href="blog_post.html"><img src="img/blog/sample2.jpg" alt=""></a>
                                <div class="blog-info">
                                	<h3><a href="blog_post.html">Fusce euismod consequat ante</a></h3>
                                    <div class="blog-meta">
                                    	<span class="date"><i class="icons icon-clock"></i> 21 December 2012</span>
                                        <span class="cat"><i class="icons icon-tag"></i> <a href="#">lorem</a>, <a href="#">tablet</a></span>
                                        <span class="views"><i class="icons icon-eye-1"></i> 11 times</span>
										<div class="rating-box">
											<span>Rate this item</span>
											<div class="rating readonly-rating" data-score="4"></div>
											<span>(1 vote)</span>
										</div>
                                    </div>
                                    <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat.  </p>
                                </div>
                                <div class="product-actions blog-actions">
									<span class="product-action dark-blue">
										<span class="action-wrapper">
											<i class="icons icon-doc-text"></i>
											<span class="action-name">Read more</span>
										</span>
									</span>
									<span class="product-action blue">
										<span class="action-wrapper">
											<i class="icons icon-pencil-1"></i>
											<span class="action-name">Add new comment</span>
										</span>
									</span>
								</div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        	<div class="blog-item">
                            	
                                <a href="blog_post.html"><img src="img/blog/sample3.jpg" alt=""></a>
                                <div class="blog-info">
                                	<h3><a href="blog_post.html">Fusce euismod consequat ante</a></h3>
                                    <div class="blog-meta">
                                    	<span class="date"><i class="icons icon-clock"></i> 21 December 2012</span>
                                        <span class="cat"><i class="icons icon-tag"></i> <a href="#">lorem</a>, <a href="#">tablet</a></span>
                                        <span class="views"><i class="icons icon-eye-1"></i> 11 times</span>
										<div class="rating-box">
											<span>Rate this item</span>
											<div class="rating readonly-rating" data-score="4"></div>
											<span>(1 vote)</span>
										</div>
                                    </div>
                                    <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat.  </p>
                                </div>
                                <div class="product-actions blog-actions">
									<span class="product-action dark-blue">
										<span class="action-wrapper">
											<i class="icons icon-doc-text"></i>
											<span class="action-name">Read more</span>
										</span>
									</span>
									<span class="product-action blue">
										<span class="action-wrapper">
											<i class="icons icon-pencil-1"></i>
											<span class="action-name">Add new comment</span>
										</span>
									</span>
								</div>
                            </div>
                        </div>
                   </div>
                   
                   
                   
                   <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                        	<div class="blog-item">
                            	
                                <a href="blog_post.html"><img src="img/blog/sample4.jpg" alt=""></a>
                                <div class="blog-info">
                                	<h3><a href="blog_post.html">Fusce euismod consequat ante</a></h3>
                                    <div class="blog-meta">
                                    	<span class="date"><i class="icons icon-clock"></i> 21 December 2012</span>
                                        <span class="cat"><i class="icons icon-tag"></i> <a href="#">lorem</a>, <a href="#">tablet</a></span>
                                        <span class="views"><i class="icons icon-eye-1"></i> 11 times</span>
										<div class="rating-box">
											<span>Rate this item</span>
											<div class="rating readonly-rating" data-score="4"></div>
											<span>(1 vote)</span>
										</div>
                                    </div>
                                    <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                </div>
                                <div class="product-actions blog-actions">
									<span class="product-action dark-blue">
										<span class="action-wrapper">
											<i class="icons icon-doc-text"></i>
											<span class="action-name">Read more</span>
										</span>
									</span>
									<span class="product-action blue">
										<span class="action-wrapper">
											<i class="icons icon-pencil-1"></i>
											<span class="action-name">Add new comment</span>
										</span>
									</span>
								</div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-12">
                        	<div class="blog-item">
                            	
                                <a href="blog_post.html"><img src="img/blog/sample5.jpg" alt=""></a>
                                <div class="blog-info">
                                	<h3><a href="blog_post.html">Fusce euismod consequat ante</a></h3>
                                    <div class="blog-meta">
                                    	<span class="date"><i class="icons icon-clock"></i> 21 December 2012</span>
                                        <span class="cat"><i class="icons icon-tag"></i> <a href="#">lorem</a>, <a href="#">tablet</a></span>
                                        <span class="views"><i class="icons icon-eye-1"></i> 11 times</span>
										<div class="rating-box">
											<span>Rate this item</span>
											<div class="rating readonly-rating" data-score="4"></div>
											<span>(1 vote)</span>
										</div>
                                    </div>
                                    <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                </div>
                                <div class="product-actions blog-actions">
									<span class="product-action dark-blue">
										<span class="action-wrapper">
											<i class="icons icon-doc-text"></i>
											<span class="action-name">Read more</span>
										</span>
									</span>
									<span class="product-action blue">
										<span class="action-wrapper">
											<i class="icons icon-pencil-1"></i>
											<span class="action-name">Add new comment</span>
										</span>
									</span>
								</div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-12">
                        	<div class="blog-item">
                            	
                                <a href="blog_post.html"><img src="img/blog/sample3.jpg" alt=""></a>
                                <div class="blog-info">
                                	<h3><a href="blog_post.html">Fusce euismod consequat ante</a></h3>
                                    <div class="blog-meta">
                                    	<span class="date"><i class="icons icon-clock"></i> 21 December 2012</span>
                                        <span class="cat"><i class="icons icon-tag"></i> <a href="#">lorem</a>, <a href="#">tablet</a></span>
                                        <span class="views"><i class="icons icon-eye-1"></i> 11 times</span>
										<div class="rating-box">
											<span>Rate this item</span>
											<div class="rating readonly-rating" data-score="4"></div>
											<span>(1 vote)</span>
										</div>
                                    </div>
                                    <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.  </p>
                                </div>
                                <div class="product-actions blog-actions">
									<span class="product-action dark-blue">
										<span class="action-wrapper">
											<i class="icons icon-doc-text"></i>
											<span class="action-name">Read more</span>
										</span>
									</span>
									<span class="product-action blue">
										<span class="action-wrapper">
											<i class="icons icon-pencil-1"></i>
											<span class="action-name">Add new comment</span>
										</span>
									</span>
								</div>
                            </div>
                        </div>
						
						
						<!-- Pagination -->
						<div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="category-results">
                                <p>Results 1-6 of 6</p>
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
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
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
                                        <td class="product-thumbnail"><img src="img/products/sample1.jpg" alt="Product1"></td>
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
				
				<!-- Upper Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="upper-footer">
					
						<div class="row">
							
							<!-- Newsletter -->
							<div class="col-lg-7 col-md-7 col-sm-7">
								<form id="newsletter" action="http://velikorodnov.com/html/homeshop/php/newsletter.php">
									<h4>Newsletter Sign Up</h4>
									<input type="text" name="newsletter-email" placeholder="Enter your email address">
									<input type="submit" name="newsletter-submit" value="Submit">
								</form>
							</div>
							<!-- /Newsletter -->
							
							
							<!-- Social Media -->
							<div class="col-lg-5 col-md-5 col-sm-5 social-media">
								<h4>Stay Connected</h4>
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
					
					</div>
					
				</div>
				<!-- /Upper Footer -->
				
				
				
				<!-- Main Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="main-footer">
					
						<div class="row">
							
							<!-- Like us on Twitter -->
							<div class="col-lg-3 col-md-3 col-sm-6 twitter-widget">
								<h4>From Twitter</h4>
								<div id="twitter-widget">
                                
								</div>
                                <a href="#" class="button blue small">Follow us</a>
							</div>
							<!-- /Like us on Twitter -->
							
							
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
							
							
							<!-- Contact Us -->
							<div class="col-lg-3 col-md-3 col-sm-6 contact-footer-info">
								<h4>Contact Us</h4>
								<ul>
									<li><i class="icons icon-location"></i> 8901 Marmora Road,<br>Glasgow, D04 89GR.</li>
                                    <li><i class="icons icon-phone"></i> +1 800 603 6035</li>
									<li><i class="icons icon-mail-alt"></i><a href="mailto:mail@company.com"> mail@companyname.com</a></li>
									<li><i class="icons icon-skype"></i> homeshop</li>
								</ul>
							</div>
							<!-- /Contact Us -->
							
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
    

<!-- Mirrored from velikorodnov.com/html/homeshop/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:30:09 GMT -->
</html>