<!--EJ KLAR
samt lägg till arkiv + författare
samt pagination fungerar inte-->

<!--Adding header to page-->
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Kategorier</h1>
					<article>
							<!--Displaying content created at single-content.php-->
							<?php get_template_part('includes/category', 'content'); ?>
</article>
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar" class="widget-bullet">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div class="search-text">
												<!--lagt till så länge???-->
											<h2>Sök efter:</h2>
												<label class="screen-reader-text">Sök efter:</label>
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