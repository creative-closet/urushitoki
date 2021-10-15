<?php
//#103 メニューをサポートのため追加
add_action('init',function () {
	register_nav_menus([
		'footer-main_nav' => 'フッター:メインナビ',
		'footer-post_nav' => 'フッター:投稿ナビ',
		'footer-sns_nav' => 'フッター:SNSナビ',
		'footer-contact_nav' => 'フッター:お問い合わせナビ',
	]);
});

  //*****************************************************************
	//  フォント・CSS・JavaScriptの呼び出し
	//*****************************************************************
  function mysite_script() {
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css'), array(), '1.0.0' );
    wp_enqueue_script( 'scriptjs', get_theme_file_uri( '/js/script.js'), array(), '1.0.0', true );
  }
  add_action('wp_enqueue_scripts','mysite_script');

