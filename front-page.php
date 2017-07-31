<?php get_header(); ?>

<div class="clearfix"></div>

<!-- Slider
======================================= --> 

<div class="slidermar23">
<div class="master-slider ms-skin-default" id="masterslider">
    <?php $ourteams = new WP_Query(array(
                  'post_type' => 'sliders', 
                  'posts_per_page' => 4 
                  ));?>
                         <?php while ($ourteams->have_posts() ) : 
                 $ourteams->the_post();?>

    <div class="ms-slide slide-1" data-delay="5">
    
        <div class="slide-pattern"></div>
        
        <?php the_post_thumbnail('slide-image');?>
        
        <h3 class="ms-layer text15 darkc caps"
          style="left: 115px; top: 275px;"
            data-type="text"
            data-effect="bottom(45)"
            data-duration="2000"
            data-delay="500"
            data-ease="easeOutExpo"
        >
            <?php the_title('');?>
            
        </h3>
        
        <h4 class="ms-layer text1 colored caps"
          style="left: 115px; top: 315px;"
            data-type="text"
            data-effect="bottom(45)"
            data-duration="2000"
            data-delay="1000"
            data-ease="easeOutExpo"
        >
            <?php the_content('');?>
            
        </h4>
         
        <a class="ms-layer sbut15"
      style="left: 118px; top: 390px;"
      data-type="text"
      data-delay="1600"
      data-ease="easeOutExpo"
      data-duration="1200"
      data-effect="scale(1.5,1.6)"
    >
      <?php the_excerpt();?>
            
    </a>
        
  </div><!-- end slide 1 -->
    <?php 
                 endwhile; 
                 wp_reset_postdata();
                ?>
  
    
   


</div>
</div>
<!-- end slider -->


<div class="clearfix"></div>


<div class="featured_section134">
<div class="container">
    <?php $ourteams = new WP_Query(array(
                  'post_type' => 'Portfolio', 
                  'posts_per_page' => 3 
                  ));?>
                         <?php while ($ourteams->have_posts() ) : 
                 $ourteams->the_post();?>

  
    <div class="one_third animate" data-anim-type="fadeIn" data-anim-delay="100">
   <?php $aboutpage = get_post_meta($post->ID,'aboutpage',true);?>
    <i class="<?php echo $aboutpage;?>"></i>
        <h5><?php the_title('');?></h5>
        <p><?php the_content('');?></p>
        
    </div><!-- end section -->
     <?php 
                 endwhile; 
                 wp_reset_postdata();
    ?>
    <div class="clearfix margin_top9"></div>
    <?php $offer = get_post_meta($post->ID,'offer',true);?>
    <h1 class="title37 animate" data-anim-type="fadeInUp" data-anim-delay="300"><?php echo $offer;?></h1>
   
    
</div>
</div><!-- end featured section 134 -->


<div class="clearfix margin_top1"></div>


<div class="featured_section135">
<div class="container">
  
    <h2 class="title21 white lessm"><strong>services we are providing</strong></h2>
        <?php $ourteams = new WP_Query(array(
                  'post_type' => 'services', 
                  'posts_per_page' => 6 
                  ));?>
                         <?php while ($ourteams->have_posts() ) : 
                 $ourteams->the_post();?>
 <div class="one_third animate" data-anim-type="fadeIn" data-anim-delay="200">
      <div class="box">
        
          <div class="box-cnt"><?php the_post_thumbnail();?></div>
        
            <div class="box-details">
              <h4><?php the_title('');?></h4>
                <p><?php the_content('');?></p>
                <a href="<?php the_permalink(); ?>">Read more</a>
      </div>
        
        </div>
     </div>
    <?php 
                 endwhile; 
                 wp_reset_postdata();
    ?>
  <!-- end section -->


</div>
</div><!-- end featured section 135 -->


<div class="clearfix margin_top12"></div>



</div><!-- end featured section 36 -->


<div class="featured_section34">
<div class="container">

    <h2 class="title22">Operation Blog</h2>

    <?php $ourteams = new WP_Query(array(
                  'post_type' => 'Offer', 
                  'posts_per_page' => 3 
                  ));?>
                         <?php while ($ourteams->have_posts() ) : 
                 $ourteams->the_post();?>  
    
    <div class="one_third animate" data-anim-type="fadeIn" data-anim-delay="200">
        
        <?php the_post_thumbnail();?>
        
        <h5 class="caps"><?php the_title('');?></h5>
        <p><?php the_content('');?></p>
        <a href="<?php the_permalink(); ?>">Read more</a>
    
    </div><!-- end section -->
     <?php 
                 endwhile; 
                 wp_reset_postdata();
    ?>
  
    
  

</div>
</div><!-- end featured section 34 -->


<div class="clearfix margin_top8"></div>


<div class="featured_section137">
<div class="container">

  <h2 class="title21"><strong>Meet our doctors</strong> </h2>

    <div class="clearfix"></div>
    
    <div id="owl-demo15" class="owl-carousel">
        
      
    
    
        <div class="item">
             <?php $ourteams = new WP_Query(array(
                  'post_type' => 'Clients', 
                  'posts_per_page' => 4 
                  ));?>
                         <?php while ($ourteams->have_posts() ) : 
                 $ourteams->the_post();?>
        
            <div class="one_fourth">
            <div class="box">
            
                <a href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail();?>
                    <h5><?php the_title('');?></h5>
                    Specialty: <strong><?php the_content('');?></strong>
                </a>
                
            </div>
            </div><!-- end section -->
            
           <?php 
                 endwhile; 
                 wp_reset_postdata();
    ?>
            
         
            
            
        </div><!--end set of sections -->
    
    </div>

</div>
</div><!-- end featured section 137 -->







 <?php get_footer(); ?>
