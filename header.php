<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Bootstrap navbar examples for any type of project, Bootstrap 4" />  

<title>V_CON PROJECT Home Landing Page  </title>

<?php wp_head();?>

<!--<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) 

<link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/css/bootnavbar.css">
<link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/css/demo.css">

<link href="<?php// echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="<?php //echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });
    
	
}); // jquery end
</script>

<style type="text/css">
	@media all and (min-width: 992px) {
		.navbar{ padding-top: 0; padding-bottom: 0; }
		.navbar .has-megamenu{position:static!important;}
		.navbar .megamenu{left:0; right:0; width:100%; padding:20px;  }
		.navbar .nav-link{ padding-top:1rem; padding-bottom:1rem;  }
	}
</style>-->


</head>
<body >



<nav class="navbar navbar-expand-lg bg-primary" id="main_navbar">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php dynamic_sidebar('top-nav')?>

        <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        	<?php
                wp_nav_menu(
                     
                     array(

                       'theme_location'=>'top-menu',
                       'conatiner'=>'ul',
                       'menu_class'=>'navbar-nav mr-auto'
                          
                     )

                );
               

        	?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="<?php bloginfo('template_directory');?>/img/icon-bg.png-2.png">
                    </a>
                    <div class="dropdown-menu dropdown-menuArear" style="width: 1106px; height: 700px;" aria-labelledby="navbarDropdown">
						<div class="container" style="padding-left: 55px; padding-right: 50px">
							<ul  aria-labelledby="navbarDropdown">
								<li class="nav-item dropdown" style="list-style: none; width: 480px">
									<a class="dropdown-item" href="#" id="navbarDropdown1" role="button">
										<h2 class="host tophost">Solutions</h2>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown1" id ="main_menu">
										<li><h2 class="host">Products</h2></li>        
										<li><a href="#">Host</a></li>        
										<li><a href="#">Room</a></li>
										<li><h2 class="host">Industries</h2></li>
										<li><a href="#">Education</a></li>        
										<li><a href="#">Government</a></li>
										<li><a href="#">Health Care</a></li>        
										<li><a href="#">Private Sector</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown" style="list-style: none; width: 480px">
									<a class="dropdown-item" href="#" id="navbarDropdown2">
										<h2 class="host tophost">Resources</h2>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown2">        
										<li><a href="#">Feature Tour</a></li>        
										<li><a href="#">Video Tutorial</a></li>        
										<li><a href="#">Live Training (not tutorial)</a></li>  
										<li><a href="#">Accessibility</a></li>        
										<li><a href="#">Security Resources</a></li>        
										<li><a href="#">Downloads</a></li>  
									</ul>
								  </li>   
								  <li class="nav-item dropdown" style="list-style: none">
										<a class="dropdown-item" href="#" id="navbarDropdown3" >
											<h2 class="host tophost">Market Place</h2>
										</a>
									   <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
											<li><a href="#">Feature Catrgory</a></li>        
											<li><a href="#">All Categories</a></li>        
											<li><a href="#">Customer Services</a></li>  
											<li><a href="#">V_con Works with</a></li>        
											<li><a href="#">Marketing</a></li>      
										</ul>
								  </li>
									<li class="nav-item dropdown" style="list-style: none">
										<a class="dropdown-item" href="#" id="navbarDropdown4" >
											<h2 class="host tophost">News & Events</h2>
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
											<li><a href="#">Upcomig Events & News</a></li>        
											<li><a href="#">Top Events & News</a></li>        
											<li><a href="#">Events & News Solutions</a></li>        
											<li><a href="#">Events & News Services</a></li>              
										</ul>
									</li>   
									<li class="nav-item dropdown" style="list-style: none">
										<a class="dropdown-item" href="#" id="navbarDropdown5">
										   <h2 class="host tophost">Blogs</h2>
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
										   <li><a href="#">Upcoming Bolg</a></li>        
										   <li><a href="#">Featured Blog</a></li>              
										</ul>
									</li>
								</ul>
							</div>
						</div>
               		</li>
                <li>
                  <img src="<?php bloginfo('template_directory');?>/img/logo.png" style="margin-top: 10px;"> 
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="#"> Plans & Pricing </a></li>
              <li class="nav-item"><a class="nav-link" href="#"> Join a meeting </a></li>
              <li class="nav-item"><a class="btn btn-primary" style="background-color: #0a2463!important; border-radius: 25px; margin-top: 10px; color: #FFF; padding:5px 30px!important;" href="#"> Log In </a></li>
          </ul>
        </div>
        </div>
    </nav>
