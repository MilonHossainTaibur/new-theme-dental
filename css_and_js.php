<?php
function Rsnetwork_css_and_js(){
  wp_register_style('bootstrap.min',get_template_directory_uri().'/css/reset.css');
  wp_enqueue_style('bootstrap.min');

  wp_register_style('framework.min',get_template_directory_uri().'/css/style.css');
  wp_enqueue_style('framework.min');

   wp_register_style('slider.min',get_template_directory_uri().'/css/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style('slider.min');

  wp_register_style('font-awesome.min',get_template_directory_uri().'/css/simpleline-icons/simple-line-icons.css');
  wp_enqueue_style('font-awesome.min');
  wp_register_style('font-awesome',get_template_directory_uri().'/css/et-linefont/etlinefont.css');
  wp_enqueue_style('font-awesome');

  wp_register_style('style.min',get_template_directory_uri().'/js/animations/css/animations.min.css');
  wp_enqueue_style('style.min');

   wp_register_style('pi.settings.min',get_template_directory_uri().'/css/responsive-leyouts.css');
  wp_enqueue_style('pi.settings.min');

   wp_register_style('colorbox.min',get_template_directory_uri().'/css/shortcodes.css');
  wp_enqueue_style('colorbox.min');
   wp_register_style('colorbox.min',get_template_directory_uri().'/js/style-switcher/color-switcher.css');
  wp_enqueue_style('colorbox.min');

   wp_register_style('bootstrap.minm',get_template_directory_uri().'/js/mainmenu/bootstrap.min.css');
  wp_enqueue_style('bootstrap.minm');

   wp_register_style('demo',get_template_directory_uri().'/js/mainmenu/demo.css');
  wp_enqueue_style('demo');

   wp_register_style('menu23',get_template_directory_uri().'/js/mainmenu/menu23.css');
  wp_enqueue_style('menu23');

   wp_register_style('masterslider',get_template_directory_uri().'/js/masterslider/style/masterslider.css');
  wp_enqueue_style('masterslider');

   wp_register_style('default',get_template_directory_uri().'/js/masterslider/skins/default/style.css');
  wp_enqueue_style('default');

   wp_register_style('cubeportfolio',get_template_directory_uri().'/js/cubeportfolio/cubeportfolio.min.css');
  wp_enqueue_style('cubeportfolio');

    wp_register_style('transitions',get_template_directory_uri().'/js/carouselowl/owl.transitions.css');
  wp_enqueue_style('transitions');

    wp_register_style('owl.carousel',get_template_directory_uri().'/js/carouselowl/owl.carousel.css');
  wp_enqueue_style('owl.carousel');

    wp_register_style('tabacc',get_template_directory_uri().'/js/tabs2/tabacc.css');
  wp_enqueue_style('tabacc');


    wp_register_style('detached2',get_template_directory_uri().'/js/tabs2/detached2.css');
  wp_enqueue_style('detached2');

   wp_register_style('esponsive-tabs3',get_template_directory_uri().'/js/tabs/assets/css/responsive-tabs3.css');
  wp_enqueue_style('esponsive-tabs3');

   wp_register_style('accordion',get_template_directory_uri().'/js/accordion/style.css');
  wp_enqueue_style('accordion');

  /*JS File Register*/


  wp_register_script('jquery-1.11.0.min',get_template_directory_uri().'/js/universal/jquery.js');
  wp_enqueue_script('jquery-1.11.0.min');

  wp_register_script('jquery.colorbox-min',get_template_directory_uri().'/js/style-switcher/styleselector.js');
  wp_enqueue_script('jquery.colorbox-min');

  wp_register_script('jquery.easing.1.3.min',get_template_directory_uri().'/js/animations/js/animations.min.js');
  wp_enqueue_script('jquery.easing.1.3.min');

  wp_register_script('jquery.scrollTo.min',get_template_directory_uri().'/js/mainmenu/bootstrap.min.js');
  wp_enqueue_script('jquery.scrollTo.min');

    wp_register_script('inview',get_template_directory_uri().'/js/mainmenu/customeUI.js');
  wp_enqueue_script('inview');

wp_register_script('gauge.min',get_template_directory_uri().'/js/masterslider/jquery.easing.min.js');
  wp_enqueue_script('gauge.min');

wp_register_script('themepunch',get_template_directory_uri().'/js/masterslider/masterslider.min.js');
  wp_enqueue_script('themepunch');

  wp_register_script('jquery.themepunch.revolution.min',get_template_directory_uri().'/js/scrolltotop/totop.js');
  wp_enqueue_script('jquery.themepunch.revolution.min');

   wp_register_script('sticky',get_template_directory_uri().'/js/mainmenu/sticky.js');
  wp_enqueue_script('sticky');

   wp_register_script('modernizr.custom.75180',get_template_directory_uri().'/js/mainmenu/modernizr.custom.75180.js');
  wp_enqueue_script('modernizr.custom.75180');

   wp_register_script('responsive-tabs.min',get_template_directory_uri().'/js/tabs/assets/js/responsive-tabs.min.js');
  wp_enqueue_script('responsive-tabs.min');

   wp_register_script('jquery.cubeportfolio.min',get_template_directory_uri().'/js/cubeportfolio/jquery.cubeportfolio.min.js');
  wp_enqueue_script('jquery.cubeportfolio.min');

   wp_register_script('main8',get_template_directory_uri().'/js/cubeportfolio/main8.js');
  wp_enqueue_script('main8');

   wp_register_script('index',get_template_directory_uri().'/js/tabs2/index.js');
  wp_enqueue_script('index');

   wp_register_script('owl.carousel',get_template_directory_uri().'/js/carouselowl/owl.carousel.js');
  wp_enqueue_script('owl.carousel');

   wp_register_script('jquery.accordion',get_template_directory_uri().'/js/accordion/jquery.accordion.js');
  wp_enqueue_script('jquery.accordion');

   wp_register_script('custom',get_template_directory_uri().'/js/accordion/custom.js');
  wp_enqueue_script('custom');
  

  wp_register_script('universal',get_template_directory_uri().'/js/universal/custom.js');
  wp_enqueue_script('universal');
  
   wp_enqueue_script('jquery');
 








}
add_action('wp_enqueue_scripts','Rsnetwork_css_and_js');





?>