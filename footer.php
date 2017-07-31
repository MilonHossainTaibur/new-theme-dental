<footer class="footer6 lesstp">

<div class="container">
    
    
     <?php dynamic_sidebar('footer1');?>  
        
    

    
        <?php dynamic_sidebar('footer2');?> 
    
    
        
  
    
    
    
        <?php dynamic_sidebar('footer3');?> 
        
       

        <?php dynamic_sidebar('footer4');?> 
        
       
        
      
        
        <div class="clearfix margin_top2"></div>
        
        
        
    </div><!-- end section -->
    
 </div><!-- end footer -->

<div class="clearfix"></div>

<div class="copyright_info4">
<div class="container">

    <div class="clearfix divider_dashed10"></div>
    
    <div class="one_half animate" data-anim-type="fadeInRight" data-anim-delay="200">
    
        <p><?php global $redux_demo; echo $redux_demo['CopyRight'];?></p>
        
    </div>
    
    <div class="one_half last animate" data-anim-type="fadeInLeft" data-anim-delay="200">
        
        <p><a href="http://doodlei.net/">Terms of Use</a> | <a href="https://www.facebook.com/taibur.rahman.56">Privacy Policy</a></p>
    
    </div>
    
</div>
</div><!-- end copyright info -->

</footer>








</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->

<script type="text/javascript">
(function($) {
 "use strict";
    var slider = new MasterSlider();
    // adds Arrows navigation control to the slider.
    slider.control('arrows');
    slider.control('bullets');

    slider.setup('masterslider' , {
         width:1400,    // slider standard width
         height:620,   // slider standard height
         space:0,
         speed:27,
         layout:'fullwidth',
         loop:true,
         preload:0,
         autoplay:true,
         view:"parallaxMask",
    });
})(jQuery);
</script>

<script>
$('.accordion, .tabs').TabsAccordion({
    hashWatch: true,
    pauseMedia: true,
    responsiveSwitch: 'tablist',
    saveState: sessionStorage,
});
</script>

<?php wp_footer();?>
</body>

<!-- Mirrored from gsrthemes.com/linstar/index-medical.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2017 17:03:10 GMT -->
</html>