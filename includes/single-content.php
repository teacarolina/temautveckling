<!--Content for Single page-->

<!--Loop for retreving posts/content-->
<? if(have_posts()) : while( have_posts() ): the_post();?>

<?php the_post_thumbnail('large'); ?>
<h1 class="title"><?php the_title(); ?></h1>
<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i><?php the_date(); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <span><?php the_author();?></span>
									</li>
									<li>   <!--using foreach to be able to retrieve multiple categories-->
										<i class="fa fa-tag"></i> <?php foreach((get_the_category()) as $category) {
                                echo $category->cat_name . ', ';
                            } ?> 
									</li>
</ul>
<p><?php the_content();?></p>
 
<? endwhile; else: endif;?>