<?php
    //*****************************************************************
	//  フォント・CSS・JavaScriptの呼び出し
	//*****************************************************************

    function mysite_script() {
        wp_enqueue_style( 'Noto_Sans_Japanese', 'https://fonts.googleapis.com/earlyaccess/notosansjapanese.css' );  // Googleフォントの読み込み
        wp_enqueue_style( 'ress', get_theme_file_uri( './css/ress.css' ), array(), '3.0.1' );   // リセットCSSの読み込み
        wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');
        wp_enqueue_style( 'style', get_theme_file_uri( './css/style.css'), array(), '1.0.0' );
        wp_enqueue_script( 'scriptjs', get_theme_file_uri( './js/script.js'), array(), '1.0.0', true );
        wp_enqueue_script('jQuery','https://code.jquery.com/jquery-3.4.1.min.js');
    }
    add_action('wp_enqueue_scripts','mysite_script');