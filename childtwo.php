<!--Creating a template to assign in WP admin-->
<?php /*
Template Name: Child Two
*/?>

<!--Adding header to page-->
<?php
get_header();
?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
						<!--Displaying the title of the page with built in WP function-->
						<h1><?php the_title(); ?></h1>
						<!--Displaying content created at child-content.php-->
						<p><?php get_template_part('includes/child', 'content'); ?></p>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
							<ul class="side-menu">
				<!--Displaying menu named my-sidebar-menu-->
							<?php
wp_nav_menu( array( 
    'theme_location' => 'my-sidebar-menu',
	'container' => 'ul',
	'menu_class'=> 'side-menu') ); 
?>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>

<!--Adding footer to page-->
<?php
get_footer();
?>