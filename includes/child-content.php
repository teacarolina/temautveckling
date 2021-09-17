<!--Content for Child pages-->

<!--Loop for retreving posts/content-->
<? if(have_posts()) : while( have_posts() ): the_post();?>

<?php the_content();?>
 
<? endwhile; else: endif;?>