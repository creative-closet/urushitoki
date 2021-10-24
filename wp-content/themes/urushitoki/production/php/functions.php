<?php

	//フッターメニューをサポートのため追加
	add_action('init', function () {
		register_nav_menus([
			'menu-main_nav' => 'メニュー：メインナビ',
			'footer-main_nav' => 'フッター:メインナビ',
			'footer-post_nav' => 'フッター:投稿ナビ',
			'footer-sns_nav' => 'フッター:SNSナビ',
			'footer-contact_nav' => 'フッター:お問い合わせナビ',
		]);
		add_theme_support( 'post-thumbnails');
		codex_craft_init();
		codex_information_init();
		codex_accessory_init();

	});

    //*****************************************************************
	//  フォント・CSS・JavaScriptの呼び出し
	//*****************************************************************
    function mysite_script() {
        wp_enqueue_style( 'Noto_Sans_Japanese', 'https://fonts.googleapis.com/earlyaccess/notosansjapanese.css' );  // Googleフォントの読み込み
        wp_enqueue_style( 'ress', get_theme_file_uri( './css/ress.css' ), array(), '3.0.1' );   // リセットCSSの読み込み
        wp_enqueue_style( 'style', get_theme_file_uri( './css/style.css'), array(), '1.0.0' );
        wp_enqueue_script( 'scriptjs', get_theme_file_uri( './js/script.js'), array(), '1.0.0', true );
    }
    add_action('wp_enqueue_scripts','mysite_script');

    //*****************************************************************
	//  カスタム投稿
	//*****************************************************************
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

	//*****************************************************************
	// ユーザープロフィールの項目のカスタマイズ
	//*****************************************************************
	function user_meta($profile){
		//SNS項目
		$profile['twitter']               = 'Twitter URL';
		$profile['twitter-name']          = 'Twitter 表示名';
		$profile['twitter-description']   = 'Twitter 説明文';
		$profile['facebook']              = 'Facebook URL';
		$profile['facebook-name']         = 'Facebook 表示名';
		$profile['facebook-description']  = 'Facebook 説明文';
		$profile['instagram']             = 'Instagram URL';
		$profile['instagram-name']        = 'Instagram 表示名';
		$profile['instagram-description'] = 'Instagram 説明文';
		$profile['youtube']               = 'YouTube URL';
		$profile['youtube-name']          = 'YouTube 表示名';
		$profile['youtube-description']   = 'YouTube 説明文';

	return $profile;
	}
	add_filter('user_contactmethods', 'user_meta', 10, 1);

	//ユーザーのプロフィール情報下に項目を追加
	function set_user_profile($bool) {
		global $profileuser;

		//経歴のテキストエリアを追加
		echo'<tr>
			<th>
				<label for="career">経歴</label>
			</th>
			<td>
				<textarea name="career" rows="10" cols="30">'.esc_html($profileuser->career).'</textarea>
			</td>
		</tr>';

		//受賞のテキストエリアを追加
		echo'<tr>
			<th>
				<label for="award">受賞</label>
			</th>
			<td>
				<textarea name="award" rows="5" cols="30">'.esc_html($profileuser->award).'</textarea>
			</td>
		</tr>';

		return $bool;
	}
	add_action('show_password_fields', 'set_user_profile');

	function update_user_profile($user_id, $old_user_data) {
		//経歴を更新
		if(isset($_POST['career'])) {
		  update_user_meta($user_id, 'career', $_POST['career'], $old_user_data->career);
		}

		//受賞を更新
		if(isset($_POST['award'])) {
			update_user_meta($user_id, 'award', $_POST['award'], $old_user_data->award);
		}
	}
	add_action('profile_update', 'update_user_profile', 10, 2);

	/*アイキャッチ画像がなければ標準画像を取得する*/
	function get_eyecatch_default(){
		if (has_post_thumbnail()):

			$id = get_post_thumbnail_id();
			$img = wp_get_attachment_image_src($id,'large');//画像サイズはlargeかfullどちらか。

		else:
			$img = array(get_template_directory_uri(). '/assets/img/post-bg.jpg');//ファイルパスは仮
		endif;

		return $img;
	}
