<?php
  //*****************************************************************
	//  フォント・CSS・JavaScriptの呼び出し
	//*****************************************************************
  function mysite_script() {
    // Googleフォントの読み込み
    // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400|display=swap', false );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP|display=swap', false );
    //                     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    // ResetCSS の読み込み
    wp_enqueue_style( 'ress', get_theme_file_uri( '/css/ress.css' ), array(), '3.0.1' );
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css'), array(), '1.0.0' );
    wp_enqueue_script( 'scriptjs', get_theme_file_uri( '/js/script.js'), array(), '1.0.0', true );
  }
  add_action('wp_enqueue_scripts','mysite_script');