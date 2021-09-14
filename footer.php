<!--Built in Hook-->
<?php
wp_footer();
?>
<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4 widget-bullet">
						<h4>Kort om oss</h4>
						<!--Displaying widget named about-us-->
						<p class="widget-bullet"><?php dynamic_sidebar('about-us')?></p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1 widget-bullet">
						<h4>Kontaktuppgifter</h4>
						<!--Displaying widget named contact-us-->
						<p><?php dynamic_sidebar('contact-us')?></p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<div class="widget-bullet">
						<!--Displaying widget named social-media-->
						<?php dynamic_sidebar('social-media')?></div>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12 widget-bullet">
					<!--Displaying widget named copyright-->
						<?php dynamic_sidebar('copyright');?>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>