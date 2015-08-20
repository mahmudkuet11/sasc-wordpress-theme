<?php global $smof_data; ?>
<!-- Footer Section -->
<div id="bottom_seciton">
	<div id="footer">
		<!--Find your way -->	
        	<div class="find_your_way">
				<h5>Find your Way</h5>        
        		<ul>
        			<li><a href="<?php echo site_url(); ?>">Home</a></li>
        			<li><a href="<?php echo site_url(); ?>/about-page">About</a></li>
        			<li><a href="<?php echo site_url(); ?>/teachers-2">Teachers</a></li>
        		</ul>
			</div>    
    	<!-- Help and Support -->	
        	<div class="help_support">
				<h5>Useful Links</h5>        
        		<ul>
        			<li><a href="<?php echo site_url(); ?>/academic-calender/">Academic Calendar</a></li>
        			<li><a href="<?php echo site_url(); ?>/library/">Library</a></li>
        			<li><a href="<?php echo site_url(); ?>/class-routine/">Class Routine</a></li>
        		</ul>
			</div>    
    	<!-- Quick Links -->	
        	<div class="quick_links">
				<h5>Quick Links</h5>        
        		<ul>
        			<li><a href="<?php echo site_url(); ?>/photo-gallery/">Photo Gallery</a></li>
        			<li><a href="<?php echo site_url(); ?>/teachers-2">Teachers</a></li>
					<li><a href="<?php echo site_url(); ?>/academic-calender/">Academic Calendar</a></li>
        			<li><a href="<?php echo site_url(); ?>/library/">Library</a></li>
        			<li><a href="<?php echo site_url(); ?>/class-routine/">Class Routine</a></li>
        		</ul>
			</div>    
    	<!-- Addmission -->	
        	<div class="Addmissoin">
				<h5>Share your opinion</h5>        
        		<ul>
        			<li><a href="<?php echo site_url(); ?>/blog/">Blog</a></li>
        		</ul>
			</div>    
    	<!-- Contact Us -->	
        	<div class="contact_us">
				<h5>Contact Us</h5>        
        		<ul>
        			<li class="telephone_no"><?php echo $smof_data['phone_number']; ?></li>
        			<li  class="mailing_address">
                    	<?php echo $smof_data['address']; ?>
                    </li>
        			<li class="email_address"><a href="#"><?php echo $smof_data['email']; ?></a></li>
        		</ul>
			</div>    
   		<div class="clear"></div>     
    </div>
</div>
<!-- Bototm seciton -->
	<div id="bottom_Section">
	<!-- page bottm -->
       	<div id="pagebottom">
    		<!-- copyright -->
            <div class="copyright">Developped By: <a href="https://www.facebook.com/raju.rajuk">MD. Mahmudur Rahman</a> </div>
            	<a href="#" class="top">Top</a>
    			<!-- Social Networks -->
            	<!-- <div class="socail_networks">
        			<ul>
            			<li class="servcies">Follows us our servcies</li>
            			<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook_icon.gif"  alt="" /> </a></li>
                		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin_icon.gif"  alt="" /> </a></li>
                		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_icon.gif"  alt="" /> </a></li>
                		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/rssfeed_icon.gif"  alt="" /> </a></li>
                		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social_icon.gif"  alt="" /> </a></li>
               		</ul>
        		</div> -->
             <div class="clear"></div>     	
    	</div>
	</div>
	<?php wp_footer(); ?>
</body>

<!-- Mirrored from chimpstudio.co.uk/themeforest/edu2/blue/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2015 16:13:58 GMT -->
</html>
