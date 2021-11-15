<!-- informationのギャラリー表示 -->
<h1 class="c-title">Information</h1>
<!-- サブクエリインスタンス -->
<?php
if (is_front_page()){
	$pager = '4';
}else{
	$pager = '16';
}
$paged =  (get_query_var( 'paged' )) ? absint( get_query_var( 'paged' ) ) : 1;//absint 負の数にならないように絶対値を表示 get_query_var:クエリ変数を取得 pagedは現在のページ送り番号
$args_query = array(
	'post_status'       => 'publish',//公開済の投稿を指定
	'post_type'         => 'information',//カスタム投稿を指定
	'posts_per_page'    => $pager,//1ページに表示する数を指定
	'orderby'           => 'modefied',//ソート
	'paged'             => $paged
	);
$information_query = new WP_Query($args_query);

//サブクエリループ
if($information_query -> have_posts()):
	while($information_query -> have_posts()):
		$information_query -> the_post();
	//記事の各種データを取得
		$id_in_query = get_post_thumbnail_id();
		$img_in_query = get_eyecatch_default();//wp_get_attachment_image_src($id_in_query,'large');
		$link_in_query = get_permalink( );
		$time_in_query = get_the_time( 'Y年n月j日' );
?>

<figure class="p-post-card">
	<a href="<?php echo esc_url($link_in_query);?>">
		<img class="p-post-card__image" src="<?php echo esc_url($img_in_query[0]); ?>" alt="作品の画像です">
		<figcaption class="p-post-card__text">
			<h2 class="p-post-card__text__title"><?php the_title(); ?></h2>
			<p class="p-post-card__text__sentence">
				<?php
				if (has_excerpt()){
					$excerpt = get_the_excerpt();
					echo esc_html($excerpt);
				}
				?>
			</p>
			<time class="p-post-card__text__date"><?php echo $time_in_query;?></time>
		</figcaption>
	</a>
</figure>
<?php
	endwhile;
	if (is_archive()){
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),//ページ番号付きのリンクを生成するために使われるベースの URL を指定します。例えば 'http://example.com/all_posts.php%_%' を指定すると、それに含まれる '%_%' は 'format' 引数（下記参照）により置き換えられます。
			'current'   => max( 1, $paged),//現在のページ番号
			'total'     => $information_query->max_num_pages,//全体のページ数 queryの絞り込み条件をmax_num_pagesに反映させる
			'mid_size'  => 5,//現在のページの両側にいくつの数字を表示するか。ただし現在のページは含みません。
			'end_size'  => 1,//ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか。
			'prev_text' => '＜',//前ページへの文字
			'next_text' => '＞',//次のページへの文字
		) );
	}
endif;
wp_reset_postdata();
?>
