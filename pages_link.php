<?php
function newdesign(){

  add_theme_support('title_tag');
  add_theme_support('custom-header');
  add_theme_support('custom-background');
  add_theme_support('post-thumbnails');
  add_theme_support( 'post-formats', array( 'aside', 'gallery','audio','video' ) );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support('slide-image',1024,500,true);

  load_theme_textdomain('newdesign',get_template_directory_uri().'/language');
/*registration menus*/
 register_nav_menus(array(



 	'main_menu' =>__('Main menu','newdesign'),
 	'footer_menu' =>__('Footer menu','newdesign')

 	));
 /*registration gallerypages*/
   register_post_type('sliders',array(

  'labels' => array(
         'name' => 'sliders',
         'add_new_item' => 'add new sliders'

    ),
  'public' => true,
  'menu_icon'       => 'dashicons-slides',
  'supports' => array('title','editor','thumbnail','excerpt','custom-fields')



  ));


/*registration leftservice*/
   register_post_type('services',array(

	'labels' => array(
         'name' => 'services',
         'add_new_item' => 'add new services'

		),
	'public' => true,
  'menu_icon'       => 'dashicons-schedule',
	'supports' => array('title','editor','thumbnail')



	));
   /*
   register_post_type('rightservice',array(

	'labels' => array(
         'name' => 'Right Sidebar',
         'add_new_item' => 'add new rightsidebar'

		),
	'public' => true,
	'supports' => array('title','editor','thumbnail')



	));
 */
  
/*registration leftservice*/
   register_post_type('Portfolio',array(

  'labels' => array(
         'name' => 'About Portfolio',
         'add_new_item' => 'add new About Portfolio',
         

    ),
  'public' => true,
  'menu_icon'        => 'dashicons-portfolio',
  'supports' => array('title','editor','thumbnail','excerpt','custom-fields')



  ));
/*registration crew page*/
   register_post_type('Clients',array(

  'labels' => array(
         'name' => 'Clients',
         'add_new_item' => 'add new Clients'

    ),
  'public' => true,
  'menu_icon'       => 'dashicons-businessman',
  'supports' => array('title','editor','thumbnail','excerpt','custom-fields')



  ));
/*registration Services pages*/
   register_post_type('Offer',array(

  'labels' => array(
         'name' => 'Offer',
         'add_new_item' => 'add new Offer'

    ),
  'public' => true,
  'menu_icon'       => 'dashicons-clipboard',
  'supports' => array('title','editor','thumbnail','excerpt','custom-fields')



  ));

/*registration filmpages*/
   register_post_type('Testimonials',array(

  'labels' => array(
         'name' => 'Testimonials',
         'add_new_item' => 'add new Testimonials'

    ),
  'public' => true,
  'menu_icon'       => 'dashicons-format-quote',
  'supports' => array('title','editor','thumbnail','excerpt','custom-fields')



  ));





}
add_action('init','newdesign');
  /*registration slider*/
