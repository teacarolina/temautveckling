<!--Adding header to page-->
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Kategori 2</h1>
					
							<!--Displaying content created at single-content.php-->
							<?php get_template_part('includes/category2', 'content'); ?>
				
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar" class="widget-bullet">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div class="search-text">
											<h2>Sök efter:</h2>
												<!--Using built in WP function to create a search form-->
												<?php get_search_form(); ?>
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
								<!--Displaying widget named widget-menu-->
								<?php dynamic_sidebar('widget-menu')?></ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

<!--Adding footer to page-->
<?php
get_footer();
?>