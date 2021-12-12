<!-- 仮のスタイルは絶対に読み込まれるヘッダーにまとめた -->
<style>
	.c-wrapper{
		padding-left:clamp(20px, calc(100vw - 1280px)/2, 320px);
		padding-right:clamp(20px, calc(100vw - 1280px)/2, 320px);
	}
	.c-wrapper--left{
		padding-left:clamp(20px, calc(100vw - 1280px)/2, 320px);
	}
	.c-wrapper--right{
		padding-right:clamp(20px, calc(100vw - 1280px)/2, 320px);
	}
	header{
		background-size:cover;
		background-position:center;
		height:420px;
	}
	.l-header{
		padding-top: 140px;
		height:420px;
		background-size:cover;
		background-position:center;
	}
	.l-header--top{
		height: 100vh;
	}
	.p-header{
		max-width:640px;
		width:100%;
	}
	.p-header--top{
		height:inherit;
		width:100%;
		object-fit: cover;
		position: relative;
	}
	.p-video-wrap{
		position: absolute;
		top: 0;
		left: 0;
		display: block;
		height: inherit;
		width: 100%;
		background-color: rgba(0, 0, 0, 0.4);
	}
	.p-top-title{
		display: flex;
		height: inherit;
		width: inherit;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}
	.c-top-description{
		text-align: center;
	}
	.p-archive__tags{
		list-style:none;
	}
	.c-flex{
		display:flex;
	}
	.c-flex--align-center{
		align-items:center;
	}

	@media screen and (max-width:1024px) {
	:not(.p-accessory-archive) >.c-flex--column {
		flex-direction:column;
	}
	}
	.c-flex--center{
		justify-content: center;
		align-items:center;
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
	.p-pager{
		gap:clamp(10px, calc( 100vw - 1000px ) ,50px);
	}
	@media screen and (max-width:1024px) {
		.p-post > .p-pager{
			gap:50%;
		}
	}

	.page-numbers{
		text-decoration: none;
		color:black;
		border:solid 0px;
		border-radius:50%;
		width:clamp(30px, calc( 100vw - 710px ) ,70px);
		height:clamp(30px, calc( 100vw - 710px ) ,70px);
		background-color:#FFF;
		text-align:center;
		line-height:clamp(30px, calc( 100vw - 710px ) ,70px);
		font-size:16px;
	}
	.current{
		background-color:#270B0B;
		color:#FFF;
	}
	.page-numbers:not(.dots):hover{
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
		border:solid 0px;
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
		border:solid 0px;
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
	@media screen and (max-width:1024px) {
		.p-pager__previous > span{
			display:none;
		}
	}
	@media screen and (max-width:1024px) {
		.p-pager__next > span{
			display:none;
		}
	}

	/* SNSページ */
	.k-sns{
		display: flex;
		margin: 15px 0;
	}
	.k-sns__introduction > .c-text--large{
		font-size: 16px;
	}

	/* メインコンテンツのスタイリング */
	.l-main{
		padding-top:200px;
		padding-bottom:200px;
	}
	.p-post__tags{
		gap:20px;

	}
	.p-post-archive{
		width: 1280px;
		}
	@media screen and (max-width:1024px) {
		.p-post-archive{
			width:100%;
		}
	}

	.p-information-archive{
		width: 1280px;
	}
	@media screen and (max-width:1024px) {
		.p-information-archive{
			width:100%;
		}
	}

	.p-accessory-archive{
			width: 100%;
		}
	@media screen and (max-width:1024px) {
			.p-accessory-archive{
			width:100%;
		}
	}

	.p-post-archive > .p-archive__cards{
		gap:40px;
	}
	.p-information-archive > .p-archive__cards{
		gap:15px;
	}
	.p-accessory-archive > .p-archive__cards{
		gap:53px;
	}
	.p-craft-archive > .p-archive__cards{
		gap:53px;
	}

	@media screen and (max-width:1024px) {
		.p-post-archive > .p-archive__cards{
			gap:20px;
		}
	}
	@media screen and (max-width:1024px) {
		.p-information-archive > .p-archive__cards{
			gap:15px;
		}
	}
	@media screen and (max-width:1024px) {
		.p-accessory-archive > .p-archive__cards{
			gap:15px;
		}
	}



	.u-margin-top{
		margin-top:30px;
	}
	.u-margin-top--small{
		margin-top:70px;
	}
	.u-margin-top--medium{
		margin-top:100px;
	}
	.u-margin-top--large{
		margin-top:200px;
	}
	.u-margin-bottom{
		margin-bottom :30px;
	}
	.u-margin-bottom--medium{
		margin-bottom :100px;
	}
	.u-margin-bottom--large{
		margin-bottom :200px;
	}

</style>

<!-- カスタムフィールドの値を取得 -->
<?php
	if (!(is_tag()||is_category()||is_single())){
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
	<header class="l-header c-wrapper" style="background-image: url('<?php echo $img[0];?>')">
		<div class="p-header">
			<h1 class="c-title--header" title-english="<?php echo esc_attr($titleEnglish);?>"><?php echo $title;?></h1>
			<p><?php echo $description;?></p>
		</div>
		<?php get_template_part('includes/menu'); ?>
	</header>
<?php else:?>
	<!-- フロントページのヘッダー -->
	<?php $headerMovie = array(get_template_directory_uri(). '/assets/movie/header_movie.mp4');?>
	<header class="l-header--top">
		<video class="p-header--top" poster="/assets/image/header-top.jpg" webkit-playsinline playsinline muted autoplay loop>
			<!--
			poster：動画ファイルが利用できない環境で代替表示される画像
			webkit-playsinline：iOS 9までのSafari用インライン再生指定
			playsinline：iOS 10以降のSafari用インライン再生指定
			muted：音声をミュートさせる
			autoplay：動画を自動再生させる
			loop：動画をループさせる
			controls：コントロールバーを表示する
			-->
			<source lass="p-header--top__source" src="<?php echo esc_url( $headerMovie[0] );?>" type="video/mp4">
			<!-- <source src="video/movie.ogv" type="video/ogv">
			<source src="video/movie.webm" type="video/webm"> -->
		</video>
		<div class="p-video-wrap">
			<div class="p-top-title">
				<img src="<?php echo get_theme_file_uri('/assets/image/urushitoki-logo.png'); ?>" alt="うるしときロゴ">
				<br><br>
				<p class="c-text--white">URUSHITOKI SADAIKE</p>
				<p class="c-top-description c-text--white">工芸の街「金沢」で天然素材にこだわり、素地から塗り蒔絵と一貫した漆工芸品を、一点一点手作業で丁寧に制作しています。<br>
					輪島で身につけ金沢で育んだ技の数々が作り出す、「うるしとき 定池」をどうぞご覧ください。</p>
			</div>
		</div>
	</header>
<?php endif;?>

