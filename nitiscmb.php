<?php



add_action('cmb2_admin_init','nitishioms_metabox');

function nitishioms_metabox(){


          $nitishoms_demo = new_cmb2_box(array(


          	'id' => 'nitishoms',
          	'title' => 'Nitishoms Custom Field',
          	'object_types' => array('page','post','custom_post'),

          ));

        $nitishoms_demo->add_field(array(

            'title' => 'nitishoms title option',
        	'id' => 'nitishoms_title',
        	'type' => 'text',



        	));

        $nitishoms_demo->add_field(array(

            'title' => 'nitishoms title option',
        	'id' => 'nitishoms_h2',
        	'type' => 'colorpicker',



        	));



}
