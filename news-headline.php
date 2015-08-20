        		<!-- News Updates -->
            		<div class="news_updates">
            			   	<span class="news_update">News Updates</span>
<?php query_posts('post_type=news&post_status=publish&posts_per_page=1&paged='.
get_query_var('news')); ?>

<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
                            <span class="news_des">&nbsp;&nbsp;&nbsp;
                            	<a href="<?php the_permalink(); ?>" class="colr"><?php the_title(); ?></a>
                            </span>
<?php endwhile; ?>   
<?php endif; ?>

                    </div>