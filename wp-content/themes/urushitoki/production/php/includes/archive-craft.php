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
		'post_type'         => 'craft',//カスタム投稿を指定
		'posts_per_page'    => $pager,//1ページに表示する数を指定
		'orderby'           => 'modefied',//ソート
		'paged'             => $paged
		);
	$craft_query = new WP_Query($args_query);

//サブクエリループ
if($craft_query -> have_posts())://(投稿データ有無確認 -start-)
	echo '<article class="p-craft-archive u-margin-top--small">';
	//informationのギャラリー表示
	echo '<h2 class="c-title u-margin-bottom">工芸作品</h2>';
	echo '<ul class="c-grid--col4 u-gap--53">';
	while($craft_query -> have_posts())://(投稿データ出力ループ -start-)
		$craft_query -> the_post();
	//記事の各種データを取得
		$id_in_query = get_post_thumbnail_id();
		$img_in_query = urushitoki_get_eyecatch_default();//wp_get_attachment_image_src($id_in_query,'large');
		$link_in_query = get_permalink( );
		?>
			<li class="c-grid--col4__item">
				<a href="<?php echo esc_url($link_in_query);?>">
					<figure class="p-product-card">
						<img class="p-product-card__image" src="<?php echo esc_url($img_in_query[0]); ?>" alt="アクセサリーの画像です">
						<figcaption class="p-product-card__text">
							<dl class="c-definition--figcaption">
								<dt class="c-definition--figcaption__term"><?php the_title(); ?></dt>
								<dd class="c-definition--figcaption__description">
									<?php
									if (has_excerpt()){
										$excerpt = get_the_excerpt();
										echo esc_html($excerpt);
									}
									?>
								</dd>
							</dl>
						</figcaption>
					</figure>
				</a>
			</li>
		<?php
	endwhile;//(投稿データ出力ループ -end-)
	echo '</ul>';
	// アーカイブページの場合はページネーションを表示する
	if (is_page('archive_craft')){
		$big = 999999999; // need an unlikely integer
		echo '<div class="p-pager c-flex c-flex--center u-margin-top--large">';
		echo paginate_links( array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),//ページ番号付きのリンクを生成するために使われるベースの URL を指定します。例えば 'http://example.com/all_posts.php%_%' を指定すると、それに含まれる '%_%' は 'format' 引数（下記参照）により置き換えられます。
			'current'   => max( 1, $paged),//現在のページ番号
			'total'     => $craft_query->max_num_pages,//全体のページ数 queryの絞り込み条件をmax_num_pagesに反映させる
			'mid_size'  => 2,//現在のページの両側にいくつの数字を表示するか。ただし現在のページは含みません。
			'end_size'  => 1,//ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか。
			'prev_text' => '<',//前ページへの文字
			'next_text' => '>',//次のページへの文字
		) );
		echo '</div>';
	}
endif;//(投稿データ有無確認 -end-)
?>
</article>
<?wp_reset_postdata();?>
<!-- サブクエリここまで -->
