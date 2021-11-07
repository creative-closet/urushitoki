<?php get_header(); ?>
<body>
	<header>
		<?php get_template_part('includes/menu'); ?>
		<h1 class="test-header">テス</h1>
	</header>
	<article class="documentClass">
    	<h1>Css Test</h1>
	</article>
	<article id="sampleId">
			<h1>Js Test2</h1>
	</article>

	<h1 class="c-title">Information</h1>
	<!-- サブクエリインスタンス -->
	<?php
	$args_query = array(
		'post_status'       => 'publish',//公開済の投稿を指定
		'post_type'         => 'information',//カスタム投稿を指定
		'posts_per_page'    => '4',//1ページに表示する数を指定
		'orderby'           => 'modefied',//ソート
		);
	$accessory_query = new WP_Query($args_query);

	//サブクエリループ
	if($accessory_query -> have_posts()):
		while($accessory_query -> have_posts()):
			$accessory_query -> the_post();
		//記事の各種データを取得
			$id_in_query = get_post_thumbnail_id();
			$img_in_query = wp_get_attachment_image_src($id_in_query,'large');
			$link_in_query = get_permalink( );
			$time_in_query = get_the_time( 'Y年n月j日' );
	if (has_excerpt(  )){
		$excerpt = get_the_excerpt(  );
	}
	?>
	<figure class="p-post-card">
		<a href="<?php echo esc_url($link_in_query);?>">
			<img class="p-post-card__image" src="<?php echo $img_in_query[0]; ?>" alt="作品の画像です">
		</a>
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
			<time class="p-post-card__text__date"><?php echo $time_in_query;?></time>
		</figcaption>
	</figure>
	<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>
	<!-- サブクエリここまで -->
	<?php get_footer(); ?>
