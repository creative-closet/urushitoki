<!-- 仮 -->
<style>
	.c-wrapper{
		padding-left:17%;
		padding-right:17%;
	}
	header{
		height: 420px;
		background-size:cover;
		background-position:center;
	}
	.l-header{
		padding-top: 140px;
	}
	.p-header{
		max-width:640px;
		width:100%;
	}
		.c-flex{
		display:flex;
	}
	.c-flex--space-between{
		justify-content: space-between;
	}
	.tag_list{
		list-style-type:none;
		gap:10px;
	}
	.pager{
		/* text-align:center; */
	}
	.p-archive{
		padding-top: 39px;
		padding-bottom:39px;
	}
	.c-button--primary{
		margin-left: auto;
	}
</style>

<!-- カスタムフィールドの値を取得 -->
<?php
	if (!(is_tag()||is_category()||is_page('archive'))){
	// カスタムフィールドの値を取得と各項目を変数に格納
		global $wp_query;
		$postID = $wp_query->post->ID;
		$titleEnglish = get_post_meta( $postID, 'header-title', true);
		$description = get_post_meta( $postID, 'header-description', true);
		$title = get_the_title();

	}elseif (is_category()){
		$title = single_cat_title("",false);
		$description = category_description();
		$titleEnglish = "Archive";

	}elseif (is_tag()){
		$title = single_tag_title("",false);
		$description = tag_description();
		$titleEnglish = "Archive";

	}elseif (is_page('archive')){
		$title = "アーカイブ";
		$description = "投稿アーカイブです";
		$titleEnglish = "Archive";
	}
?>


<!-- フロントページ以外のヘッダーのパーツ -->
<!-- マークアップは仮です。 -->
<?php if (!(is_front_page(  ))):
	$img = urushitoki_get_header_image();
?>
<header class="masthead c-wrapper temp" style="background-image: url('<?php echo $img[0];?>')">
	<div class="l-header p-header temp">
		<h1 class="c-title--header" title-english="<?php echo esc_attr($titleEnglish);?>"><?php echo $title;?></h1>
		<p><?php echo $description;?></p>
	</div>
	<?php get_template_part('includes/menu'); ?>
</header>
<?php else:?>
	<!-- フロントページのヘッダー動画テスト -->
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

