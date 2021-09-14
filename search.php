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

							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
					</div>
				</div>
			</section>
		</main>

<!--Adding footer to page-->
<?php
get_footer();
?>