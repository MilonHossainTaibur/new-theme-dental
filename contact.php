<?php
/*
Template Name: contact page
*/
?>



<?php get_header(); ?>


<div class="page_title1 sty7">
<div class="container">
	
    <h1>Contact Us</h1>
     
</div>
</div><!-- end page title --> 


<div class="clearfix"></div>


<div class="content_fullwidth less2">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<div class="container">
	
    <div class="one_half">
      
        <p><?php the_title(); ?></p>
        <br /><br />
        
        <div class="cforms">
        
        
        <div id="form_status"></div>
    	<form type="POST" id="gsr-contact" onSubmit="return valid_datas( this );">
	        <label class="label">Name <em>*</em></label>
	        <label class="input">
	            <input type="text" name="name" id="name">
	        </label>
	        
	        <div class="clearfix"></div>
	        
	        <label class="label">E-mail <em>*</em></label>
	        <label class="input">
	            <input type="email" name="email" id="email">
	        </label>
	
	        <!-- <div class="clearfix"></div>
	
	
	        <label class="label">Phone <em>*</em></label>
	        <label class="input">
	            <input type="text" name="phone" id="phone">
	        </label> -->
	
	        <div class="clearfix"></div>
	
	        <label class="label">Subject <em>*</em></label>
	        <label class="input">
	            <input type="text" name="subject" id="subject">
	        </label>
	
	        <div class="clearfix"></div>
	
	        <label class="label">Message <em>*</em></label>
	        <label class="textarea">
	            <textarea rows="5" name="message" id="message"></textarea>
	        </label>
	
	        <div class="clearfix"></div>
			<input type="hidden" name="token" value="FsWga4&@f6aw" />
	        <button type="submit" class="button">Send Message</button>
	        
    	</form>	
        
        
        
        
        
        </div>
        
      </div>
      
      <div class="one_half last">
      
        <div class="address_info">
        <?php the_content(); ?>
         
        </div>
        <div class="clearfix"></div>
        <h4>Find the <strong>Address</strong></h4>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.1628090655393!2d90.37261428923595!3d23.79707823766792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cd7313eb1d%3A0x1b8b8fc444fa23eb!2sKazipara+Bus+Stop!5e0!3m2!1sen!2sbd!4v1500902383865" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       
         </div>

</div>
<?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
    <?php endif; ?>
</div><!-- end content area -->
</div>
<?php get_footer(); ?>