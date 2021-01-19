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


/*require_once('wp_bootstrap_navwalker.php');
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/*<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/bootnavbar.js" ></script>*/

//load scripts


//Custom Widgets
function ieatwebsites_widgets_init(){
register_sidebar( 
	array(
		'name' => esc_html__('Footer Navigation','ieatwebsites'), 
		'id'=>'footer-nav',
		'description'=>esc_html__('Add widgets here','ieatwebsites'),
		'before_widget'=>'',
		'after_widget'=>'',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',


	)
);
register_sidebar( 
	array(
		'name' => esc_html__('Top Bar','ieatwebsites'), 
		'id'=>'top-nav',
		'description'=>esc_html__('Add widgets here','ieatwebsites'),
		'before_widget'=>'',
		'after_widget'=>'',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',


	)
);
}
add_action('widgets_init','ieatwebsites_widgets_init');
//widgets end here

//jquery scripts
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




//Custom Menus
register_nav_menus(

array(
     'top-menu'=> __('Top Menu','Vcon Theme')

)

);
add_theme_support('menus');
?>
