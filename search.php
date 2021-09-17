<!--Adding header to page-->
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
							<!--Displaying the search query entered in the search field-->
							<h1>Sökresultat för: <?php the_search_query();?></h1>
							<div class="searchform-wrap">
								<form id="searchform" class="searchform">
									<div>
								<!--Using built in WP function to create a search form-->
                                    <?php get_search_form(); ?>
									</div>
								</form>
							</div>
						<!--Displaying content created at search-content.php-->
                            <p><?php get_template_part('includes/search', 'content'); ?></p>

						</div>
					</div>
				</div>
			</section>
		</main>

<!--Adding footer to page-->
<?php
get_footer();
?>