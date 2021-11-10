<?php get_header(); ?>
<body>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>
	<article class="documentClass">
    	<h1>Css Test</h1>
	</article>
	<article id="sampleId">
    	<h1>Js Test2</h1>
	</article>

	<?php if (is_front_page() && is_home()) { ?>
	<!-- ホームページ 最新の投稿 -->
	<h1>is_front_page() && is_home() Test</h1>


	<?php } elseif (is_front_page()) { ?>
	<!-- ホームページ 固定ペーシ -->
	<h1>is_front_page() Test</h1>


	<?php } elseif (is_home()) { ?>
	<!-- ブログ投稿インデックスページ -->
	<h1>is_home() Test</h1>


	<?php } elseif (is_page('accessory-archive')) { ?>
	<!-- カスタム投稿アクセサリー アーカイブページ -->
	<h1>is_page('accessory-archive') Test</h1>
	<!-- informationのギャラリー表示 -->
	<h1 class="c-title">作品集</h1>
	<!-- サブクエリインスタンス -->
	<?php
	$paged =  (get_query_var( 'paged' )) ? absint( get_query_var( 'paged' ) ) : 1;//absint 負の数にならないように絶対値を表示 get_query_var:クエリ変数を取得 pagedは現在のページ送り番号
	$args_query = array(
		'post_status'       => 'publish',//公開済の投稿を指定
		'post_type'         => 'accessory',//カスタム投稿を指定
		'posts_per_page'    => '4',//1ページに表示する数を指定
		'orderby'           => 'modefied',//ソート
		'paged'             => $paged
		);
	$accessory_query = new WP_Query($args_query);

	//サブクエリループ
	if($accessory_query -> have_posts()):
		while($accessory_query -> have_posts()):
			$accessory_query -> the_post();
		//記事の各種データを取得
			$id_in_query = get_post_thumbnail_id();
			$img_in_query = get_eyecatch_default();//wp_get_attachment_image_src($id_in_query,'large');
			$link_in_query = get_permalink( );
	if (has_excerpt(  )){
		$excerpt = get_the_excerpt(  );
	}
	?>
	<a href="<?php echo esc_url($link_in_query);?>">
		<figure class="p-post-card">
			<img class="p-post-card__image" src="<?php echo $img_in_query[0]; ?>" alt="作品の画像です">
			<figcaption class="p-post-card__text">
				<h2 class="p-post-card__text__title"><?php the_title(); ?></h2>
				<p class="p-post-card__text__sentence">
					<?php
					if (has_excerpt(  )){
						$excerpt = get_the_excerpt(  );
						echo $excerpt;
					}
					?>
				</p>
			</figcaption>
		</figure>
	</a>
	<?php
		endwhile;
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),//ページ番号付きのリンクを生成するために使われるベースの URL を指定します。例えば 'http://example.com/all_posts.php%_%' を指定すると、それに含まれる '%_%' は 'format' 引数（下記参照）により置き換えられます。
			'current'   => max( 1, $paged),//現在のページ番号
			'total'     => $accessory_query->max_num_pages,//全体のページ数 queryの絞り込み条件をmax_num_pagesに反映させる
			'mid_size'  => 5,//現在のページの両側にいくつの数字を表示するか。ただし現在のページは含みません。
			'end_size'  => 1,//ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか。
			'prev_text' => '＜',//前ページへの文字
			'next_text' => '＞',//次のページへの文字
		) );
	endif;
	wp_reset_postdata();
	?>
	<!-- サブクエリここまで -->

	<?php } elseif (is_page('kintsugi')) { ?>
	<!-- 固定ページ 金継ぎ -->
	<h1>is_page('kintsugi') Test</h1>


	<?php } elseif (is_page(array('life' , 'musical'))) { ?>
	<!-- 固定ページ うるしと生活、うるしと楽器 -->
	<h1>is_page(array('life' , 'musical')) Test</h1>


	<?php } elseif (is_page('about')) { ?>
	<!-- 固定ページ About -->
	<h1>is_page('about') Test</h1>

	<?php
		//ユーザープロフィール設定読み出しテスト
		the_author_meta('twitter-name',1);
		echo nl2br(get_user_meta(1,'career', true));
	?>


	<?php } elseif (is_page('gallery')) { ?>
	<!-- 固定ページ ギャラリー （工芸作品アーカイブページ） -->
	<h1>is_page('gallery') Test</h1>
	<!-- informationのギャラリー表示 -->
	<?php the_content( ); ?>
	<h1 class="c-title">工芸作品</h1>
	<!-- サブクエリインスタンス -->
	<?php
	$paged =  (get_query_var( 'paged' )) ? absint( get_query_var( 'paged' ) ) : 1;//absint 負の数にならないように絶対値を表示 get_query_var:クエリ変数を取得 pagedは現在のページ送り番号
	$args_query = array(
		'post_status'       => 'publish',//公開済の投稿を指定
		'post_type'         => 'craft',//カスタム投稿を指定
		'posts_per_page'    => '4',//1ページに表示する数を指定
		'orderby'           => 'modefied',//ソート
		'paged'             => $paged
		);
	$craft_query = new WP_Query($args_query);

	//サブクエリループ
	if($craft_query -> have_posts()):
		while($craft_query -> have_posts()):
			$craft_query -> the_post();
		//記事の各種データを取得
			$id_in_query = get_post_thumbnail_id();
			$img_in_query = get_eyecatch_default();//wp_get_attachment_image_src($id_in_query,'large');
			$link_in_query = get_permalink( );
	if (has_excerpt(  )){
		$excerpt = get_the_excerpt(  );
	}
	?>
	<a href="<?php echo esc_url($link_in_query);?>">
		<figure class="p-post-card">
			<img class="p-post-card__image" src="<?php echo $img_in_query[0]; ?>" alt="作品の画像です">
			<figcaption class="p-post-card__text">
				<h2 class="p-post-card__text__title"><?php the_title(); ?></h2>
				<p class="p-post-card__text__sentence">
					<?php
					if (has_excerpt(  )){
						$excerpt = get_the_excerpt(  );
						echo $excerpt;
					}
					?>
				</p>
			</figcaption>
		</figure>
	</a>
	<?php
		endwhile;
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),//ページ番号付きのリンクを生成するために使われるベースの URL を指定します。例えば 'http://example.com/all_posts.php%_%' を指定すると、それに含まれる '%_%' は 'format' 引数（下記参照）により置き換えられます。
			'current'   => max( 1, $paged),//現在のページ番号
			'total'     => $craft_query->max_num_pages,//全体のページ数 queryの絞り込み条件をmax_num_pagesに反映させる
			'mid_size'  => 5,//現在のページの両側にいくつの数字を表示するか。ただし現在のページは含みません。
			'end_size'  => 1,//ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか。
			'prev_text' => '＜',//前ページへの文字
			'next_text' => '＞',//次のページへの文字
		) );
	endif;
	wp_reset_postdata();
	?>
	<!-- サブクエリここまで -->

	<?php } elseif (is_page('sns')) { ?>
	<!-- 固定ページ SNS -->
	<h1>is_page('sns') Test</h1>


	<?php } elseif (is_page('contact')) { ?>
	<!-- 固定ページ お問い合わせフォーム -->
	<h1>is_page('contact') Test</h1>
		<?php the_content(); ?>


	<?php } elseif (is_page('information-archive')) { ?>
	<!-- カスタム投稿Information アーカイブページ -->
	<h1>is_page('information-archive') Test</h1>


	<?php } elseif (is_page()) { ?>
	<!-- その他 固定ページ -->
	<h1>is_page() Test</h1>
	<?php the_content(); ?>


	<?php } elseif (is_singular('accessory')) { ?>
	<!-- カスタム投稿アクセサリー 詳細ページ -->
	<h1>is_singular('accessory') Test</h1>


	<?php } elseif (is_singular('craft')) { ?>
	<!-- カスタム投稿工芸作品 詳細ページ -->
	<h1>is_singular('craft') Test</h1>


	<?php } elseif (is_singular('information')) { ?>
	<!-- カスタム投稿Information 詳細ページ -->
	<h1>is_singular('information') Test</h1>


	<?php } elseif (is_archive()) { ?>
	<!-- archiveページ -->
	<h1>is_archive() Test</h1>

	<?php } elseif (is_single()) { ?>
	<!-- 投稿 詳細ページ -->
	<h1>is_single() Test</h1>
	<?php the_content(); ?>


	<?php } elseif (is_404()) { ?>
	<!-- 404ページ -->
	<h1>is_404() Test</h1>

	<?php } else { ?>
	<!-- それ以外 -->

	<?php } ?>



	<?php get_footer(); ?>

