<?php get_header(); ?>


<div class="clearfix"></div>


<div class="page_title2">
<div class="container">
    
    <h1><?php the_title(); ?></h1>
    <div class="pagenation">&nbsp;<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <a href="#"><?php the_title(); ?></a> <i>/</i></div>
     
</div>
</div><!-- end page title --> 


<div class="clearfix"></div>


<div class="content_fullwidth less2">
<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<div class="content_left">
           
        <div class="blog_post"> 
            
            <div class="blog_postcontent">
            <div class="image_frame"><a href="#"><?php the_post_thumbnail();?></a></div>
            
                <ul class="post_meta_links">
                    <li><a href="#" class="date"><?php the_time('Fd,Y');?></a></li>
                    <li class="post_by"><i>by:</i> <a href="#"><?php the_author();?></a></li>
                   
                    <li class="post_comments"><i>note:</i> <a href="#"><?php comments_popup_link(); ?> </a></li>
                </ul>
             <div class="clearfix"></div>
             <div class="margin_top1"></div>
            <p><?php the_content(); ?></p>
       
    <div class="clearfix mar_top2"></div>  
            
</div><!-- end content left side -->
</div>
</div>
 <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
    <?php endif; ?>


<!-- right sidebar starts -->

   <?php include_once('sidebar.php');?>
    
    




<!-- end content area -->
</div>

</div>
</div>


 <?php get_footer(); ?>
