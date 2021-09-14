<!--Creating a template to assign in WP admin-->
<?php /*
Template Name: Child Three
*/?>

<!--Adding header to page-->
<?php
get_header();
?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
						<!--Displaying the title of the page with built in WP function-->
						<h1><?php the_title(); ?></h1>
						<!--Displaying content created at child-content.php-->
						<p><?php get_template_part('includes/child', 'content'); ?></p>
						</div>
					</div>
				</div>
			</section>
		</main>

<!--Adding footer to page-->
<?php
get_footer();
?>