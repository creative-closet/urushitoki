	<!-- 投稿のギャラリー表示 -->
	<h2 class="c-title u-margin--small">取扱店</h2>
	<!-- サブクエリインスタンス -->
	<?php
	$pager = '4';
	$paged =  (get_query_var( 'paged' )) ? absint( get_query_var( 'paged' ) ) : 1;//absint 負の数にならないように絶対値を表示 get_query_var:クエリ変数を取得 pagedは現在のページ送り番号
	$args_query = array(
		'post_status'       => 'publish',//公開済の投稿を指定
		'post_type'         => 'shop',//カスタム投稿を指定
		'posts_per_page'    => $pager,//1ページに表示する数を指定
		'orderby'           => 'modefied',//ソート
		'paged'             => $paged
		);
	$shop_query = new WP_Query($args_query);

	//サブクエリループ
	if($shop_query -> have_posts())://(投稿データ有無確認 -start-)
		while($shop_query -> have_posts())://(投稿データ出力ループ -start-)
			$shop_query -> the_post();
		//記事の各種データを取得
			$id_in_query = get_post_thumbnail_id();
			$img_in_query = urushitoki_get_eyecatch_default();//wp_get_attachment_image_src($id_in_query,'large');
			$img_in_query_icon = array(get_template_directory_uri(). '/assets/image/125_arr_hoso_b.png');//ファイルパスは仮
			$name = get_post_meta( get_the_ID(), 'shop-name', true);
			$address = get_post_meta( get_the_ID(), 'shop-address', true);
			$description = get_post_meta( get_the_ID(), 'shop-description', true);
			$url = get_post_meta( get_the_ID(), 'shop-url', true);
	?>

		<dl class="p-shop-card c-definition--shop-card">
			<div class="p-shop-card__wrap">
				<dt class="c-definition--shop-card__title"><?php echo $name;?></dt>
				<dd class="c-definition--shop-card__text">
					<p class="c-text"><?php echo nl2br($address); ?></p>
					<p class="c-text"><?php echo nl2br($description);?></p>
				</dd>
				<dd class="c-definition--shop-card__link">
					<a class="c-title-noborder" href="<?php echo esc_url($url); ?>"><?php echo esc_url($url); ?></a>
					<img src="<?php echo esc_url($img_in_query_icon[0]);?>" alt="">
				</dd>
			</div>
			<dd class="c-definition--shop-card__image">
				<img src="<?php echo esc_url($img_in_query[0]); ?>" alt="取扱い店の写真です。">
			</dd>
		</dl>

	<?php
		endwhile;//(投稿データ出力ループ -end-)
		if (is_archive()){
			$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
				'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),//ページ番号付きのリンクを生成するために使われるベースの URL を指定します。例えば 'http://example.com/all_posts.php%_%' を指定すると、それに含まれる '%_%' は 'format' 引数（下記参照）により置き換えられます。
				'current'   => max( 1, $paged),//現在のページ番号
				'total'     => $post_query->max_num_pages,//全体のページ数 queryの絞り込み条件をmax_num_pagesに反映させる
				'mid_size'  => 5,//現在のページの両側にいくつの数字を表示するか。ただし現在のページは含みません。
				'end_size'  => 1,//ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか。
				'prev_text' => '＜',//前ページへの文字
				'next_text' => '＞',//次のページへの文字
			) );
		}
	endif;//(投稿データ有無確認 -end-)
	wp_reset_postdata();
	?>
	<!-- サブクエリここまで -->
