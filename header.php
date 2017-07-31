<!DOCTYPE html>
<html <?php language_attributes(); ?>>  

  <head>        
     <meta charset="<?php bloginfo( 'charset' ); ?>" />  
  <title><?php wp_title('|',true,'right'); ?></title> 
  
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
    <link rel="shortcut icon" type="<?php echo esc_url(get_template_directory_uri());?>/image/logo.png" href="<?php echo esc_url(get_template_directory_uri());?>/images/logo.png"/>
    
    <!-- Favicon --> 
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri());?>/images/logo.png">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <style>
      h1{
       color: <?php echo get_post_meta( get_the_ID(), 'nitishoms_h2', true ); ?> !important;
      }
      .featured_section134 h5{
        color: <?php echo get_post_meta( get_the_ID(), 'nitishoms_h2', true ); ?> !important;


      }
      .navbar-default .navbar-nav > li > a{
        color: <?php echo get_post_meta( get_the_ID(), 'nitishoms_h2', true ); ?> !important;
      }
      .top_section3{
        background-color: <?php global $redux_demo; echo $redux_demo['headercolor'];?>!important;
      }
      .header{
         background-color: <?php global $redux_demo; echo $redux_demo['headermenucolor'];?>!important;
      }
      .navbar-default .navbar-nav>li>a{
        color: <?php global $redux_demo; echo $redux_demo['headermenutextcolor'];?>!important;
      }
      .footer6{
        background-color: <?php global $redux_demo; echo $redux_demo['footerbackgroundcolor'];?>!important;

      }
       .footer6   p, li a {
        color: <?php global $redux_demo; echo $redux_demo['footertextcolor'];?>!important;
      }

    </style>
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
  <?php wp_head();?>
    
</head>

<body <?php body_class('');?>>

<div class="site_wrapper">

<div class="top_section3">
<div class="container">
  
    <div class="left">
    
        <!-- Logo -->
        <div><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php global $redux_demo; echo $redux_demo['logo'] ['url'];?>" id="logo23"></a></div>
    
    </div><!-- end left -->
    
    <div class="right">
  
  <?php global $redux_demo; echo $redux_demo['Headertop'];?>

    </div><!-- end right -->

</div>
</div><!-- end top navigation links -->


<div class="clearfix"></div>


<header class="header">
 
  <div class="container">
      
  <!-- Navigation Menu -->
    <div class="menu_main_full2">
    
      <div class="navbar yamm navbar-default">
        
          <div class="navbar-header">
            <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
              <button type="button" > <i class="fa fa-bars"></i></button>
            </div>
          </div>
          
          <div id="navbar-collapse-1" class="navbar-collapse collapse">
          
            <nav>
            
              <ul class="nav navbar-nav">
               <?php wp_nav_menu(array(


              'theme_location' => 'main_menu',
              'container'  => false,
              'menu_class' => 'nav navbar-nav'
              





              ));?>
              
            </nav>
            
          </div>
        
      </div>
    </div>
    <!-- end Navigation Menu -->

  </div>
    
</header>