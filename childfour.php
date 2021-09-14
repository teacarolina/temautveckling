<!--Creating a template to assign in WP admin-->
<?php /*
Template Name: Child Four
*/?>

<!--Adding header to page-->
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
						<!--Displaying the title of the page with built in WP function-->
						<h1><?php the_title(); ?></h1>
						<!--Displaying content created at child-content.php-->
						<p><?php get_template_part('includes/child', 'content'); ?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
						<!--Calling the featured image of the post-->
							<?php the_post_thumbnail('large'); ?>
						</div>
					</div>
				</div>
			</section>
		</main>

<!--Adding footer to page-->
<?php
get_footer();
?>