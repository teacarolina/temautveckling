<? if(have_posts()) : while( have_posts() ): the_post();?>

<!--lägg till ifall det inte finns något sökresultat???-->

<article>
<?php the_post_thumbnail('large'); ?>
								<h2 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i><?php the_date();?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author();?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
									</li>
								</ul>
								<p><?php the_excerpt();?></p>
							</article>
 
<? endwhile; else: endif;?>