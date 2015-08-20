<?php
/*
* Template Name: Gallery Template
*/
get_header();
?>

<?php query_posts('post_type=gallery&post_status=publish&paged='.
get_query_var('paged')); ?>


                    		<div class="thumbdiv">
                            	<ul>

									<?php if(have_posts()) : ?>
										<?php while(have_posts()) : the_post(); ?>
											<li><a href="<?php echo get_post_meta( $post->ID, '_cmb_gallery_image', true ); ?>" rel="galleryimg" class="galleryimg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibu" ><img width="200" height="200" src="<?php echo get_post_meta( $post->ID, '_cmb_gallery_image', true ); ?>"  alt="<?php echo the_title(); ?>" /></a></li>
										<?php endwhile; ?>
										<?php else: ?>
										<marquee>Sorry, No Image Found!!!</marquee>
									<?php endif; ?>
								
								
                                	
                                </ul>
                            <div class="hdiv">&nbsp;</div>
                            </div>
                            
                    </div>    	
                <div class="clear"></div>
		    </div>	
		<div class="clear"></div>
	</div>
</div>  

<?php get_footer(); ?>