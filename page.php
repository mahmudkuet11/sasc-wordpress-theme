<?php
/*
* Template Name: About page template
*/

?>
<?php get_header(); ?>
                	<div class="col1">

                         <!-- Content Heading -->
                         	<div id="content2">
                            	<!-- Blog Detail -->
                                	<div class="blog_detail">
                                        <div class="bloginfo">
											<?php if(have_posts()) : ?>
											<?php while (have_posts()) : the_post(); ?>  
											<h2><?php the_title(); ?></h2><br /><br /><br /><br />
											<b><?php echo the_content(); ?></b>
											<?php endwhile; ?>   
											<?php endif; ?>

									</div>	
							</div>	
					</div>								
<div class="clear"></div>   									
  
<?php get_footer(); ?>