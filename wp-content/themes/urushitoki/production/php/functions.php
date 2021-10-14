<?php
  //*****************************************************************
	//  フォント・CSS・JavaScriptの呼び出し
	//*****************************************************************
  function mysite_script() {
    // wp_enqueue_style( 'all', get_theme_file_uri( '/css/all.css'), array(), '1.0.0' );
    wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css'), array(), '1.0.0' );
    wp_enqueue_script( 'scriptjs', get_theme_file_uri( '/js/script.js'), array(), '1.0.0', true );
  }
  add_action('wp_enqueue_scripts','mysite_script');