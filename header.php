<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
    </head>
<body>

<!--Built in Hook-->
<?php
wp_head();
?>

<div id="wrap">
<header id="header">
	
			<div class="container">
				
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="index.html">Labb 1</a>
					</div>
					
					<div class="col-sm-6 hidden-xs">
						
						<form id="searchform" class="searchform">
							<!--sökfunktionen funkar bara från startsidan??-->
							<div>
						<!--Using built in WP function to create a search form-->
								<?php get_search_form(); ?>
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
		<!--Vad är det här???-->
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text"/>
					<input type="submit" value="Sök" /> 
				</div>
			</form>
		</div>

	
		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					<ul class="menu">
			<!--Displaying menu named my-custom-menu-->
					<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu') ); 
?>			
						</ul>
					</div>
				</div>
			</div>
		</nav>