<!-- 仮のスタイルは絶対に読み込まれるヘッダーにまとめた -->
<style>
	.c-wrapper{
		padding-left:17%;
		padding-right:17%;
	}
	header{
		background-size:cover;
		background-position:center;
		height:420px;
	}
	.l-header{
		padding-top: 140px;
	}
	.p-header{
		max-width:640px;
		width:100%;
	}

	.p-archive__tags{
		list-style:none;
	}

	.c-flex{
	display:flex;
	}

	@media screen and (max-width:1024px) {
	.c-flex--column {
		flex-direction:column;
	}
	}
	.c-flex--center{
		justify-content: center;
		align-items:center;
		gap:50px;
	}
	.c-flex--wrap{
		flex-wrap: wrap;
	}
	.c-flex--space-between{
		justify-content: space-between;
	}
	.p-archive{
		padding-top: 39px;
		padding-bottom:39px;
	}
	.c-button--primary{
		margin-left: auto;
	}
	.p-archive__tags{
		list-style-type:none;
		gap:10px;
	}
	/* ページネーション */
	.page-numbers{
		text-decoration: none;
		color:black;
		border:solid 1px;
		border-radius:50%;
		width:70px;
		height:70px;
		background-color:#FFF;
		text-align:center;
		line-height:70px;
		font-size:16px;
	}
	.current{
		background-color:#270B0B;
		color:#FFF;
	}
	.page-numbers:hover{
	background-color:#270B0B;
	color:#FFF;
	}
	/* ページネーション */
	.p-pager>a{
		text-decoration: none;
		color:#3B4043;
	}
	.p-pager__previous:before{
		text-decoration: none;
		color:black;
		border:solid 1px;
		border-radius:50%;
		width:70px;
		height:70px;
		background-color:#FFF;
		text-align:center;
		line-height:70px;
		font-size:20px;
		content:"<";
		display:inline-block;
		margin-right:20px;
	}
	.p-pager__previous:hover:before {
		background-color:#270B0B;
		color:#FFF;
	}

	.p-pager__next:after{
		text-decoration: none;
		color:black;
		border:solid 1px;
		border-radius:50%;
		width:70px;
		height:70px;
		background-color:#FFF;
		text-align:center;
		line-height:70px;
		font-size:20px;
		content:">";
		display:inline-block;
		margin-left:20px;
	}
	.p-pager__next:hover:after {
		background-color:#270B0B;
		color:#FFF;
	}


</style>

<!-- カスタムフィールドの値を取得 -->
<?php
	if (!(is_tag()||is_category()||(is_single()))){
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

	}elseif (is_single()){
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

