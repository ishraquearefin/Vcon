<?php

function load_stylesheets(){
wp_register_style('bootnavbar',get_template_directory_uri().'/css/bootnavbar.css',array(),1,'all');
wp_enqueue_style('bootnavbar');

wp_register_style('democss',get_template_directory_uri().'/css/demo.css',array(),1,'all');
wp_enqueue_style('democss');

wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',array(),1,'all');
wp_enqueue_style('bootstrap');

wp_register_style('custom',get_template_directory_uri().'/custom.css',array(),1,'all');
wp_enqueue_style('custom');



}
add_action('wp_enqueue_scripts','load_stylesheets');

/*<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/bootnavbar.js" ></script>*/

//load scripts

function addjs(){
wp_register_scripts('jQuery',get_template_directory_uri().'/js/jquery-2.2.4.min.js',array(),1,1,1);
wp_enqueue_scripts('jQuery');

wp_register_scripts('bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array(),1,1,1);
wp_enqueue_scripts('bootstrap');

wp_register_scripts('bootnavbar',get_template_directory_uri().'/js/bootnavbar.js',array(),1,1,1);
wp_enqueue_scripts('bootnavbar');

wp_register_scripts('custom',get_template_directory_uri().'/custom.js',array(),1,1,1);
wp_enqueue_scripts('custom');

}
