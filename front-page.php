<!--Adding header to page-->
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
							<!--Calling image located in image folder and displaying it-->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/city.jpg">
								<div class="text widget-bullet">
								<!--Displaying widget named front-page-->
								<?php dynamic_sidebar('front-page');?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

<!--Adding footer to page-->
<?php
get_footer();
?>