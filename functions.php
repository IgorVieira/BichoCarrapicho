<?php

add_theme_support( 'post-thumbnails' );

function registrar_menu_navegacao() {
	register_nav_menu('header-menu', 'Menu Header');
}

add_action( 'init', 'registrar_menu_navegacao');

function get_titulo() {
	if( is_home() ) {
		bloginfo('name');
	} else {
		bloginfo('name');
		echo ' | ';
		the_title();
	}
}


add_action('init', 'registrar_menu_navegacao');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


function remove_dashboard_widgets(){
  register_sidebar(array(
	  'name' => 'Nome',
	  'id' => 'nome_up_new_widget_area',
	  'before_widget' => '<aside>',
	  'after_widget' => '</aside>',
	  'before_title' => '<h3 class="widget-title">',
	  'after_title' => '</h3>',

  ));
}
add_action('widgets_init', 'remove_dashboard_widgets');