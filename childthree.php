<?php /*
Template Name: Child Three
*/?>

<?php
get_header();
?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
						<h1><?php the_title(); ?></h1>
						<p><?php get_template_part('includes/child', 'content'); ?></p>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php
get_footer();
?>