<!--Content for Category 1 page-->

<!--Loop for retreving posts/content-->
<?php 
$allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'category_name'=>'kategori-1')); ?>
 
<?php if ( $allPostsWPQuery->have_posts() ) : ?>

<!-- Blog entry -->
<?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
<article>
								
<?php the_post_thumbnail('large'); ?>
<h2 class="title">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>

<ul class="meta">
<li>
<i class="fa fa-calendar"></i> <?php the_date(); ?>
</li>
<li>
<i class="fa fa-user"></i> <span><?php the_author();?></span>
</li>
<li>                                                <!--using foreach to be able to retrieve multiple categories-->
<i class="fa fa-tag"></i><?php foreach((get_the_category()) as $category) {
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