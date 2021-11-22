<!-- 仮 -->
<style>
	header{
		height: 420px;
		height: 420px;
		padding-left: 17%;
		padding-top: 140px;
		padding-right: 60%;
		background-size:cover;
	}
</style>


<?php if (!(is_front_page(  ))):
	$img = urushitoki_get_header_image();
?>

<!-- フロントページ以外のヘッダーのパーツ -->
<!-- マークアップは仮です。 -->
<header class="masthead" style="background-image: url('<?php echo $img[0];?>')">

	<?php
		// カスタムフィールドの値を取得
		global $wp_query;
		$postID = $wp_query->post->ID;
		$title = get_post_meta( $postID, 'header-title', true);
		$description = get_post_meta( $postID, 'header-description', true);
	?>
	<h1 class="c-title--header" title-english="<?php echo esc_attr($title);?>"><?php the_title( );?></h1>
	<p><?php echo $description;?></p>
	<?php get_template_part('includes/menu'); ?>
</header>

<!-- フロントページのヘッダー動画テスト -->
<?php else:?>
	<?php $headerMovie = array(get_template_directory_uri(). '/assets/movie/movie.mp4');?>
	<video id="video" poster="img/movie.jpg" webkit-playsinline playsinline muted autoplay loop>
        <!--
        poster：動画ファイルが利用できない環境で代替表示される画像
        webkit-playsinline：iOS 9までのSafari用インライン再生指定
        playsinline：iOS 10以降のSafari用インライン再生指定
        muted：音声をミュートさせる
        autoplay：動画を自動再生させる
        loop：動画をループさせる
        controls：コントロールバーを表示する
        -->
        <source src="<?php echo esc_url( $headerMovie[0] );?>" type="video/mp4">
        <!-- <source src="video/movie.ogv" type="video/ogv">
        <source src="video/movie.webm" type="video/webm"> -->
        </video>
	<h1>こちらはフロントページのヘッダー</h1>
<?php endif;?>

