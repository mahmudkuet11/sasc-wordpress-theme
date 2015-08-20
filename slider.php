<?php

$slider = new WP_Query(array(
	'post_type'			=>	'slider',
	'post_status'		=>	'publish',
	'posts_per_page'	=>	8
));
?>
<div id="banner">
	<div id="slider2">
		<?php if($slider->have_posts()) : ?>
		<?php while ($slider->have_posts()) : $slider->the_post(); ?>      
			<div class="contentdiv">
				<a href="#"><img width="710px" height="320px" src="<?php echo get_post_meta($slider->post->ID, '_cmb_slider_image', true); ?>" alt="" /></a>
				<div class="banner_des">
					<h4><?php echo get_post_meta($slider->post->ID, '_cmb_caption_title', true); ?></h4>
					<p><?php echo get_post_meta($slider->post->ID, '_cmb_caption_desc', true); ?></p>
				</div>
			</div>
		<?php endwhile; ?>   
		<?php endif; ?>			
	</div> 
		<div id="paginate-slider2" class="pagination">
		</div>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js" ></script>
  
 </div>