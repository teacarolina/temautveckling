<?php 
$allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $allPostsWPQuery->have_posts() ) : ?>

<!-- Blog entry -->
<?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
<article>
								
<?php get_the_post_thumbnail_url() ?>
<h2 class="title">
<a href="inlagg.html"><?php the_title(); ?></a>
</h2>

<ul class="meta">
<li>
<i class="fa fa-calendar"></i> <?php the_date(); ?>
</li>
<li>
<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author(); ?></a>
</li>
<li>
<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
</li>
</ul>
<p><?php the_content()?></p>
</article>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
    <p><?php _e( 'There no posts to display.' ); ?></p>
<?php endif; ?>