<!--Content for Search page-->

<!--Loop for retreving posts/content-->
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

<article>
<?php the_post_thumbnail('large'); ?>
								<h2 class="title">
									<!--retreving the title-->
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<!--retreving the date-->
										<i class="fa fa-calendar"></i><?php the_date();?>
									</li>
									<li>						<!--retreving the author-->
										<i class="fa fa-user"></i> <span><?php the_author();?></span>
									</li>
									<li>                             <!--using foreach to be able to retrieve multiple categories-->
										<i class="fa fa-tag"></i> <?php foreach((get_the_category()) as $category) {
                                echo $category->cat_name . ', ';
                            } ?> 
									</li>
								</ul>
								<!--Part of the text will be displayed-->
								<p><?php the_excerpt();?></p>
							</article>
 

							<?php endwhile; ?>

      
<?php wp_reset_postdata(); ?>

<?php else : ?>
  
		  <!--If there are no posts this will be displayed-->
<p><?php _e( 'There no posts to display.' ); ?></p>

<?php endif; ?>