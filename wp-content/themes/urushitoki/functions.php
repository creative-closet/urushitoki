<?php

	add_action('init', function () {
		register_nav_menus([
			'menu_nav' => 'メニュー'
		]);
		add_theme_support( 'post-thumbnails');
		add_theme_support("editor-styles");
		codex_craft_init();
		codex_information_init();
		codex_accessory_init();
		codex_shop_init();
		wp_register_style( 'urushidoki-block-style', get_theme_file_uri() . '/css/urushidoki-block-style.css' );
	});

	//*****************************************************************
	//  タイトルタグ関係の処理
	//*****************************************************************

	function insert_title(){
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme', 'insert_title');

	function change_title_separator($sep){
		$sep = '|';
		return $sep;
	}
	add_filter('document_title_separator', 'change_title_separator');

	function correct_title($title){

		if(is_home() || is_front_page())://top
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = ' トップページ | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_page('archive_accessory'))://アクセサリー
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = 'アクセサリー | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_page('kintsugi'))://金継ぎ
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = '金継ぎ | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_page('life'))://うるしと生活
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = 'うるしと生活 | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_page('instrument'))://うるしと楽器
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = 'うるしと楽器 | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_page('about'))://About
			$title['title'] = 'ABOUT';
		elseif(is_page('archive_craft') || is_page('archive_information') || is_page('archive_post')||is_single()||is_tag())://gallery
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = 'ギャラリー | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_page('sns'))://SNS
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = ' SNS | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_page('faq'))://よくある質問
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = 'よくある質問 | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_page('contact'))://問い合わせ
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = ' 問い合わせ | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_page('privacy-policy'))://プライバシーポリシー
			if(empty(wp_title('' , false , 'right'))){
				$title['title'] = 'プライバシーポリシー | '.get_bloginfo("name");
			} else {
				$title['title'] = wp_title('' , false , 'right');
			}
		elseif(is_404())://404
			$title['title'] = ' 404 not found';
		endif;
		return $title;
	}
	add_filter('document_title_parts', 'correct_title');

    //*****************************************************************
	//  フォント・CSS・JavaScriptの呼び出し
	//*****************************************************************

    function mysite_script() {
        wp_enqueue_style( 'Noto_Sans_Japanese', 'https://fonts.googleapis.com/earlyaccess/notosansjapanese.css' );  // Googleフォントの読み込み
        wp_enqueue_style( 'ress', get_theme_file_uri( './css/ress.css' ), array(), '3.0.1' );   // リセットCSSの読み込み
        wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');
        wp_enqueue_style( 'style', get_theme_file_uri( './css/style.css'), array(), '1.0.0' );
		wp_enqueue_script( 'scriptjs', get_theme_file_uri( './js/script.js'), array(), '1.0.0', true );
		wp_enqueue_script( 'buttonjs', get_theme_file_uri( './js/button.js'), array(), '1.0.0', true );
		wp_enqueue_script( 'videojs', get_theme_file_uri( './js/header-video.js'), array(), '1.0.0', true );
        wp_enqueue_script('jQuery','https://code.jquery.com/jquery-3.4.1.min.js');
    }
    add_action('wp_enqueue_scripts','mysite_script');

	add_editor_style(get_theme_file_uri() . '/css/editor-style.css');

    //*****************************************************************
	//  Gutenberg ブロックスタイル追加
	//*****************************************************************
	//カスタムブロック 背景付きテキスト/画像
	register_block_style(
		'create-block/background-text',
		array(
			'name'         => 'background-01',
			'label'        => '茶（濃）',
			'is_default'   => true,
		)
	);
	register_block_style(
		'create-block/background-text',
		array(
			'name'         => 'background-02',
			'label'        => '茶（薄）',
			'style_handle' => 'urushidoki-block-style'
		)
	);

	//見出し
	register_block_style(
		'core/heading',
		array(
			'name'         => 'c-title-large',
			'label'        => '大見出し',
			'style_handle' => 'urushidoki-block-style'
		)
	);
	register_block_style(
		'core/heading',
		array(
			'name'         => 'c-title-small',
			'label'        => '小見出し',
			'style_handle' => 'urushidoki-block-style'
		)
	);
	register_block_style(
		'core/heading',
		array(
			'name'         => 'c-title-small--center',
			'label'        => '小見出し・中央寄せ・白',
			'style_handle' => 'urushidoki-block-style'
		)
	);
	register_block_style(
		'core/heading',
		array(
			'name'         => 'c-title-noborder',
			'label'        => '小見出し・中央寄せ・茶',
			'style_handle' => 'urushidoki-block-style'
		)
	);

	//段落
	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'c-text',
			'label'        => '通常',
			'is_default'   => true,
			'style_handle' => 'urushidoki-block-style'
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'c-text--large',
			'label'        => '太文字',
			'style_handle' => 'urushidoki-block-style'
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'c-text--white',
			'label'        => '白文字',
			'style_handle' => 'urushidoki-block-style'
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'         => 'p-contents-card-column',
			'label'        => '階段',
			'style_handle' => 'urushidoki-block-style'
		)
	);
	//金継ぎメディアとテキスト
	register_block_style(
		'core/media-text',
		array(
			'name'         => 'p-media-text',
			'label'        => 'テキスト重ね表示',
			'style_handle' => 'urushidoki-block-style'
		)
	);
	register_block_style(
		'core/gallery',
		array(
			'name'         => 'p-price-card',
			'label'        => '値段表示グリッド',
			'style_handle' => 'urushidoki-block-style'
		)
	);
	register_block_style(
		'core/columns',
		array(
			'name'         => 'p-media-column',
			'label'        => '画像表示グリッド',
			'style_handle' => 'urushidoki-block-style'
		)
	);

    //*****************************************************************
	//  カスタム投稿
	//*****************************************************************
	//craft
	function codex_craft_init() {
		$labels = array(
			'name'               => _x( 'Crafts', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Craft', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Crafts', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Craft', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'craft', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Craft', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New Craft', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit Craft', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View Craft', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All Crafts', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search Crafts', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Crafts:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No crafts found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No crafts found in Trash.', 'your-plugin-textdomain' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-hammer',
			'query_var'          => true,
			'show_in_rest'       => true,
			'rewrite'            => array( 'slug' => 'craft' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )

		);

		register_post_type( 'craft', $args );
	}
	//information
	function codex_information_init() {
		$labels = array(
			'name'               => _x( 'Informations', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Information', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Informations', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Information', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'information', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Information', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New Information', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit Information', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View Information', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All Informations', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search Informations', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Informations:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No crafts found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No crafts found in Trash.', 'your-plugin-textdomain' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-bell',
			'query_var'          => true,
			'show_in_rest'       => true,
			'rewrite'            => array( 'slug' => 'information' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )

		);

		register_post_type( 'information', $args );
	}
	//accessory
	function codex_accessory_init() {
		$labels = array(
			'name'               => _x( 'Accessories', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Accessory', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Accessories', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Accessory', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'accessory', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Accessory', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New Accessory', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit Accessory', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View Accessory', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All Accessories', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search Accessories', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Accessories:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No crafts found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No crafts found in Trash.', 'your-plugin-textdomain' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-bell',
			'query_var'          => true,
			'show_in_rest'       => true,
			'rewrite'            => array( 'slug' => 'accessory' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )

		);

		register_post_type( 'accessory', $args );
	}
	//shop
	function codex_shop_init() {
		$labels = array(
			'name'               => _x( 'Shops', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Shop', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Shops', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Shop', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'shop', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Shop', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New Shop', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit Shop', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View Shop', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All Shops', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search Shops', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Shops:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No shops found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No shops found in Trash.', 'your-plugin-textdomain' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-bell',
			'query_var'          => true,
			'show_in_rest'       => true,
			'rewrite'            => array( 'slug' => 'shop' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )

		);

		register_post_type( 'shop', $args );
	}

	/*アイキャッチ画像がなければ標準画像を取得する*/
	function urushitoki_get_eyecatch_default(){
		if (has_post_thumbnail()):

			$id = get_post_thumbnail_id();
			$img = wp_get_attachment_image_src($id,'large');//画像サイズはlargeかfullどちらか。

		else:
			$img = array(get_template_directory_uri(). '/assets/image/no-image.png');//ファイルパスは仮
		endif;

		return $img;
	}

	/*ヘッダー画像をassetから取得する*/
	/*トップページは動画のため除外*/
	function urushitoki_get_header_image(){
		if(is_page('archive_accessory'))://アクセサリー
			$headerImage = array(get_template_directory_uri(). '/assets/image/header-accessory.jpg');
		elseif(is_page('kintsugi'))://金継ぎ
			$headerImage = array(get_template_directory_uri(). '/assets/image/header-kintsugi.jpg');
		elseif(is_page('life'))://うるしと生活
			$headerImage = array(get_template_directory_uri(). '/assets/image/header-life.jpg');
		elseif(is_page('instrument'))://うるしと楽器
			$headerImage = array(get_template_directory_uri(). '/assets/image/header-instrument.jpg');
		elseif(is_page('about'))://About
			$headerImage = array(get_template_directory_uri(). '/assets/image/header-about.jpg');
		elseif(is_page('archive_craft')||is_page('archive_information')||is_page('archive_post')||is_single()||is_tag())://gallery
			$headerImage = array(get_template_directory_uri(). '/assets/image/header-craft-article-information.jpg');
		elseif(is_page('sns'))://SNS
			$headerImage = array(get_template_directory_uri(). '/assets/image/header-sns.jpg');
		elseif(is_page('faq'))://よくある質問
			$headerImage = array(get_template_directory_uri(). '/assets/image/header-faq.jpg');
		elseif(is_page('contact'))://問い合わせ
			$headerImage = array(get_template_directory_uri(). '/assets/image/header-contact.jpg');
		else://未登録の画像
			$headerImage = array(get_template_directory_uri(). '/assets/image/no-image-tudumi.jpg');
		endif;
		return $headerImage;
	}
