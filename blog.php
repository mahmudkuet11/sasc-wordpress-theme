<?php
/*
* Template Name: Blog template
*/

?>
<?php get_header(); ?>
                         <!-- Content Heading -->
                         	<div id="content2">	
                                
                                <!-- Blog Listing -->
								
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='.get_query_var('paged')); ?>

								
								
                                <ul class="listing">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<li>
		<div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image', array('class' => 'post-thumb')); ?></a></div>
		<div class="description">
			<h6><a href="<?php the_permalink(); ?>" class="colr"><?php the_title(); ?></a></h6>
			<?php the_excerpt(); ?>
			<div class="clear"></div>
			<div class="info">
				<span class="postedby">Posted By: <a href="#" >Admin</a></span>
				<span class="lastupdte"> Last Update by:<i><?php the_time('M d, Y') ?></i></span> 
				<span class="comments"><strong><?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?></strong> </span> 
			</div>
		 </div>
		 <div class="clear"></div>
	</li>
<?php comments_template( '', true ); ?> 
<?php endwhile; ?>
<?php else : ?>
<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?>

                                    
                                </ul>
                                <div class="clear"></div>
                                <!-- pagination Listing -->
                               	 	<div class="pginaiton pad9">
<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older
posts') ); ?></div><br /><div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span
class="meta-nav">&rarr;</span>') ); ?></div>
                                    </div>
                            	<div class="clear"></div>    
                           </div>								
<div class="clear"></div>   									
  
<?php get_footer(); ?>