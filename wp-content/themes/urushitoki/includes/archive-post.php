<!-- タグアーカイブページのスラッグを取得 -->
<?php
if (is_tag()){
	$tags = get_the_tags();
	if($tags[0]) {
		$tagSlug = $tags[0]->slug;
		$tagSlugDecode = urldecode($tagSlug);
	}else{
		$tagSlugDecode = "";
	}
}else{
	$tagSlugDecode = "";
}
?>

<!-- サブクエリインスタンス -->
<?php
if (is_front_page() || is_single() || is_page('kintsugi')){
	$pager = '3';
}else{
	$pager = '16';
}
$paged =  (get_query_var( 'paged' )) ? absint( get_query_var( 'paged' ) ) : 1;//absint 負の数にならないように絶対値を表示 get_query_var:クエリ変数を取得 pagedは現在のページ送り番号
$args_query = array(
	'post_status'       => 'publish',//公開済の投稿を指定
	'post_type'         => 'post',//投稿を指定
	'posts_per_page'    => $pager,//1ページに表示する数を指定
	'orderby'           => 'modefied',//ソート
	'paged'             => $paged,
	'tag'				=> $tagSlugDecode
	);
$post_query = new WP_Query($args_query);

//サブクエリループ
if($post_query -> have_posts())://(投稿データ有無確認 -start-)
	echo '<article class="p-archive c-wrapper">';
	//informationのギャラリー表示
	echo '<h2 class="c-title">Article</h2>';
	//タグ表示ここから（記事に紐付けられているタグを全て取得して表示する）
	if(is_page('post_archive')){
		echo '<ul class="p-archive__tags c-flex">';;
		$term_list = get_terms('post_tag');
		$result_list = [];
		foreach ($term_list as $term) {
		$u = (get_term_link( $term, 'post_tag' ));
		echo '<li><a class="c-tab" href="'.$u.'">'.$term->name.'</a></li>';
		}
		echo '</ul>';
	}
	//タグ表示ここまで

	echo '<section class="p-archive__cards c-flex c-flex--wrap c-flex--column">';
	while($post_query -> have_posts())://(投稿データ出力ループ -start-)
		$post_query -> the_post();
		//記事の各種データを取得
		$id_in_query = get_post_thumbnail_id();
		$img_in_query = urushitoki_get_eyecatch_default();//wp_get_attachment_image_src($id_in_query,'large');
		$link_in_query = get_permalink( );
?>
		<figure class="p-article-card">
			<a href="<?php echo esc_url($link_in_query);?>">
				<img class="p-article-card__image" src="<?php echo esc_url($img_in_query[0]); ?>" alt="投稿の画像です">
				<figcaption class="p-article-card__title"><?php the_title(); ?></figcaption>
			</a>
		</figure>
<?php
	endwhile;//(投稿データ出力ループ -end-)
	echo '</section>';
	if (is_archive()||is_page('post_archive')){
		$big = 999999999; // need an unlikely integer
		echo '<div class="p-pager c-flex c-flex--center">';
		echo paginate_links( array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),//ページ番号付きのリンクを生成するために使われるベースの URL を指定します。例えば 'http://example.com/all_posts.php%_%' を指定すると、それに含まれる '%_%' は 'format' 引数（下記参照）により置き換えられます。
			'current'   => max( 1, $paged),//現在のページ番号
			'total'     => $post_query->max_num_pages,//全体のページ数 queryの絞り込み条件をmax_num_pagesに反映させる
			'mid_size'  => 5,//現在のページの両側にいくつの数字を表示するか。ただし現在のページは含みません。
			'end_size'  => 1,//ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか。
			'prev_text' => '＜',//前ページへの文字
			'next_text' => '＞',//次のページへの文字
		) );
		echo '</div>';
	}
	echo '</article>';
endif;//(投稿データ有無確認 -end-)
wp_reset_postdata();
?>
<!-- サブクエリここまで -->

