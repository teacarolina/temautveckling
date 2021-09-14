<? if(have_posts()) : while( have_posts() ): the_post();?>

<?php the_post_thumbnail('large'); ?>
<h1 class="title"><?php the_title(); ?></h1>
<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <?php foreach((get_the_category()) as $category) {
                                echo $category->cat_name . ', ';
                            } ?> <!-- <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a> -->
									</li>
</ul>
<p><?php the_content();?></p>
 
<? endwhile; else: endif;?>