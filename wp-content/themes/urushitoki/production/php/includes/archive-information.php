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
if($information_query -> have_posts())://(投稿データ有無確認 -start-)
	echo '<article class="p-information-archive">';
	//informationのギャラリー表示
	echo '<h2 class="c-title u-margin-bottom">Information</h2>';
	echo '<ul class="c-grid--col4--tab1 u-gap--20">';
	while($information_query -> have_posts())://(投稿データ出力ループ -start-)
		$information_query -> the_post();
		//記事の各種データを取得
		$id_in_query = get_post_thumbnail_id();
		$img_in_query = urushitoki_get_eyecatch_default();//wp_get_attachment_image_src($id_in_query,'large');
		$link_in_query = get_permalink( );
		$time_in_query = get_the_time( 'Y年n月j日' );
		?>
			<li class="c-grid--col4--tab1__item">
				<a href="<?php echo esc_url($link_in_query);?>">
					<figure class="p-post-card">
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
					</figure>
				</a>
			</li>
		<?php
	endwhile;//(投稿データ出力ループ -end-)
	echo '</ul>';
	if (is_page('archive_information')){
		$big = 999999999; // need an unlikely integer
		echo '<div class="p-pager c-flex c-flex--center u-margin-top--large">';
		echo paginate_links( array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),//ページ番号付きのリンクを生成するために使われるベースの URL を指定します。例えば 'http://example.com/all_posts.php%_%' を指定すると、それに含まれる '%_%' は 'format' 引数（下記参照）により置き換えられます。
			'current'   => max( 1, $paged),//現在のページ番号
			'total'     => $information_query->max_num_pages,//全体のページ数 queryの絞り込み条件をmax_num_pagesに反映させる
			'mid_size'  => 2,//現在のページの両側にいくつの数字を表示するか。ただし現在のページは含みません。
			'end_size'  => 1,//ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか。
			'prev_text' => '＜',//前ページへの文字
			'next_text' => '＞',//次のページへの文字
		) );
		echo '</div>';
	}else{
?>
		<a href="<?php echo home_url('/archive_information/'); ?>" class="c-button--primary u-margin-top u-margin-left--auto" id="p-ripples--effect">
			<span class="c-button--primary--text">MORE</span>
			<div class="c-button--primary--line">
				<svg class="c-button--primary--line--detail" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 193.479 17.889">
					<g id="グループ_1771" data-name="グループ 1771" transform="translate(-446.336 -4699.111)">
						<line id="線_1144" data-name="線 1144" x2="193" transform="translate(446.336 4716.5)" stroke-width="1"/>
						<line id="線_1145" data-name="線 1145" x2="21" y2="17" transform="translate(618.5 4699.5)"  stroke-width="1"/>
					</g>
				</svg>
				<svg class="c-button--primary--line--detail-tab" xmlns="http://www.w3.org/2000/svg" width="109.704" height="11.408" viewBox="0 0 109.704 11.408">
					<g id="グループ_1664" data-name="グループ 1664" transform="translate(-111.764 -2174.296)">
						<line id="線_1144" data-name="線 1144" x2="109" transform="translate(111.764 2185)" stroke-width="1"/>
						<line id="線_1145" data-name="線 1145" x2="12" y2="10" transform="translate(208.764 2175)" stroke-linecap="round" stroke-width="1"/>
					</g>
				</svg>
				<svg class="c-button--primary--line--detail-sp" xmlns="http://www.w3.org/2000/svg" width="302.704" height="11.408" viewBox="0 0 302.704 11.408">
					<g id="グループ_1664" data-name="グループ 1664" transform="translate(-112 -2174.296)">
						<line id="線_1144" data-name="線 1144" x2="302" transform="translate(112 2185)" stroke-width="1"/>
						<line id="線_1145" data-name="線 1145" x2="12" y2="10" transform="translate(402 2175)" troke-linecap="round" stroke-width="1"/>
					</g>
				</svg>
			</div>
		</a>
<?php
	}
endif;//(投稿データ有無確認 -end-)
?>

</article>
<?wp_reset_postdata();?>
<!-- サブクエリここまで -->
