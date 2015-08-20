<?php get_header(); ?>
                	<div class="col1">


                         <!-- Content Heading -->
                         	<div id="content2">
                            	<!-- Blog Detail -->
                                	<div class="blog_detailaa">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="bloginfo">
		<h5><?php the_title(); ?></h5>
		
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
<?php the_content(); ?>
<br /><br /><br /><br />
<div class="clear"></div> 
<?php endwhile; ?>
<?php else : ?>
<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?>

                           </div>		   
                         <div class="clear"></div>
                   	 </div>

			</div>	
		<div class="clear"></div>
	</div>
</div>  

<?php get_footer(); ?>