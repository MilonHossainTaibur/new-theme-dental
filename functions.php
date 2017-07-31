<?php

include_once('inc/pages_link.php');

/*register sidebar*/
function new_project(){

    
	register_sidebar(array(
       'name'=>'footer1',
       'description'=>'add footer1 this project',
       'id'=>'footer1',

       'before_title'=>'<h3>',
       'after_title'=>'</h3>',
       
        'before_widget'=>'<div class="column1 animate" data-anim-type="fadeIn" data-anim-delay="100">',
       'after_widget'=>'</div>',





		));
	register_sidebar(array(
       'name'=>'footer2',
       'description'=>'add footer2 this project',
       'id'=>'footer2',

       'before_title'=>'<h3>',
       'after_title'=>'</h3>',
       'before_widget'=>'<div class="column2 animate" data-anim-type="fadeIn" data-anim-delay="150">',
       'after_widget'=>'</div>'
       




		));
    register_sidebar(array(
       'name'=>'footer3',
       'description'=>'add footer3 this project',
       'id'=>'footer3',

        'before_title'=>'<h3>',
       'after_title'=>'</h3>',
       'before_widget'=>'<div class="column1 animate" data-anim-type="fadeIn" data-anim-delay="200">',
       'after_widget'=>'</div>'
       





    ));
        register_sidebar(array(
       'name'=>'footer4',
       'description'=>'add footer4 this project',
       'id'=>'footer4',

        'before_title'=>'<h3>',
       'after_title'=>'</h3>',
       'before_widget'=>'<div class="column1 last animate" data-anim-type="fadeIn" data-anim-delay="250">',
       'after_widget'=>'</div>'
       





    ));
          register_sidebar(array(
       'name'=>'footerbottom-right',
       'description'=>'add footerbottom-right this project',
       'id'=>'footerbottom-right',

        'before_title'=>'<h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">',
       'after_title'=>'</h6>',
       'before_widget'=>'<div class="pi-header-block pi-pull-right pi-hidden-2xs">',
       'after_widget'=>'</div>'
       





    ));

     
    register_sidebar(array(
       'name'=>'pagesidebar ',
       'description'=>'add pagesidebar this project',
       'id'=>'page_sidebar',

        'before_title'=>'<h6 class="footer-title">',
       'after_title'=>'</h6>',
       'before_widget'=>'<div class="right_sidebar">
',
       'after_widget'=>'</div>',





    ));
	
}
add_action('widgets_init','new_project');






/*CSS And JS File Register*/
if( file_exists( __DIR__ . '/inc/css_and_js.php')){
  require_once __DIR__ . '/inc/css_and_js.php';
}



/* Redux Framework registration*/
if( file_exists( __DIR__ . '/includes/ReduxCore/framework.php')){
  require_once __DIR__ . '/includes/ReduxCore/framework.php';
}
if( file_exists( __DIR__ . '/includes/sample/Rsnetwork-config.php')){
  require_once __DIR__ . '/includes/sample/Rsnetwork-config.php';
}


/* cmb2 Framework registration*/
if(file_exists( __DIR__ . '/includes/cmb2/init.php')){
  require_once __DIR__ . '/includes/cmb2/init.php';
}
if(file_exists( __DIR__ . '/includes/cmb2/nitiscmb.php')){
  require_once __DIR__ . '/includes/cmb2/nitiscmb.php';
}


