<!--ej kommenterat content + fixa category och date/author så man kan klicka?-->

<?php 
$allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'category_name'=>'kategori-2')); ?>
 
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
<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author(); ?></a>
</li>
<li>
<i class="fa fa-tag"></i><?php foreach((get_the_category()) as $category) {
                                echo $category->cat_name . ', ';
                            } ?> 
    <!-- <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a> -->
</li>
</ul>
<p><?php the_excerpt();?></p>
</article>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
    <p><?php _e( 'There no posts to display.' ); ?></p>
<?php endif; ?>