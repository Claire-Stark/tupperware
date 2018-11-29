<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Sara Nitz Tupperware Consultant</title>

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">

		<header>
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand js-scroll-trigger" href="#">Sara Nitz</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				</button>

			  	<div class="collapse navbar-collapse navbar-nav-scroll" id="navbarSupportedContent">

				<?php 
	              //output the main nav
	              $args = array(
	                  'theme-location'=>'main-menu',
	                  'container'=>'ul',
	                  'menu_class'=>'navbar-nav'

	              );
	              wp_nav_menu($args);

	            ?>
			    <!-- 	<ul class="navbar-nav">
				      	<li class="nav-item active">
				        	<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="about.html">About</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="recipes.html">Recipes</a>
				      	</li>
				      	<li class="nav-item dropdown">
				        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Contact
				        	</a>
				        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          	<a class="dropdown-item" href="#">Book Party</a>
				          	<a class="dropdown-item" href="#">Request Item</a>
				        </li>
			    	</ul> -->
			    	<form class="form-inline my-2 my-lg-0">
			      		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      		<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
			    	</form>
			  	</div>
			</nav>
		</header>