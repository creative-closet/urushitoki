<!-- 仮のスタイルは絶対に読み込まれるヘッダーにまとめた -->
<style>
    .p-archive__tags{
        list-style:none;
        width:30%;
        flex-wrap:wrap;
    }
    @media screen and (max-width:1024px) {
        .p-archive__tags{
            width:100%;
        }
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

    /* メインコンテンツのスタイリング */
    .l-main{
        padding-top:200px;
        padding-bottom:200px;
    }
    .l-main--about{
        margin-top: 478px;
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
        /*カードサイズ 400px  3pcs*/
        gap:calc((1280px - 400px * 3) / ( 3 - 1 ));

    }
    .p-information-archive > .p-archive__cards{
        /*カードサイズ 305px  4pcs */
        gap:calc((1280px - 305px * 4) / ( 4 - 1 ));
    }
    .p-accessory-archive > .p-archive__cards{
        /*カードサイズ 280px  4pcs */
        gap:calc((1280px - 280px * 4) / ( 4 - 1 ));
    }
    .p-craft-archive > .p-archive__cards{
        /*カードサイズ 280px  4pcs */
        gap:calc((1280px - 280px * 4) / ( 4 - 1 ));
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
    @media screen and (max-width:1024px) {
        .p-archive__cards>a{
            width:100%;
        }
    }

    /* うるしときについて */
    .p-craftman{
        gap:60px;
        align-items: flex-start;
    }
    @media screen and (max-width:599px) {
        .p-craftman{
            flex-direction:column-reverse;
        }
    }
    .p-craftman:not(:nth-of-type(1)){
        margin-top:120px;
    }
    .p-craftman__image{
        width:42%;
    }
    .p-craftman__image>img{
        width:100%;
        height:100%;
    }
    @media screen and (max-width:599px) {
        .p-craftman__image{
            width:100%;
        }
    }
    .p-craftman__information{
        width:53%;
    }
    @media screen and (max-width:599px) {
        .p-craftman__information{
            width:100%;
        }
    }
    .p-sns{
        gap:20px;
    }
    .p-shop-card:not(:nth-of-type(1)){
        margin-top:20px;
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
            <p class="u-margin-top--small"><?php echo $description;?></p>
        </div>
        <?php get_template_part('includes/menu'); ?>
    </header>
<?php else:?>
	<!-- フロントページのヘッダー -->
	<?php $headerMovie = array(get_theme_file_uri('/assets/movie/header_movie.mp4'));?>
    <header class="l-front-header">
        <video id="header-video" class="p-header-video" poster="<?php echo get_theme_file_uri('/assets/image/header-top.jpg');?>" webkit-playsinline playsinline muted>
            <!--
            poster：動画ファイルが利用できない環境で代替表示される画像
            webkit-playsinline：iOS 9までのSafari用インライン再生指定
            playsinline：iOS 10以降のSafari用インライン再生指定
            muted：音声をミュートさせる
            autoplay：動画を自動再生させる
            loop：動画をループさせる
            controls：コントロールバーを表示する
            -->
            <source class="p-header-video__source" src="<?php echo esc_url( $headerMovie[0] );?>" type="video/mp4">
            <!-- <source src="video/movie.ogv" type="video/ogv">
            <source src="video/movie.webm" type="video/webm"> -->
        </video>
        <div class="p-header-wrap">
			<!-- お問い合わせ PC/tab -->
            <svg class="p-header-wrap__contact" xmlns="http://www.w3.org/2000/svg" width="210.869" height="108.131" viewBox="0 0 210.869 108.131">
                <g transform="translate(-1585.957 -0.5)">
                    <line y2="65" transform="translate(1600 0.5)" fill="none" stroke="#fff" stroke-width="3" />
                    <line y2="65" transform="translate(1780 0.5)" fill="none" stroke="#fff" stroke-width="3" />
                    <a href="<?php echo home_url('/contact/');  ?>" class="k-top-contact__button">
                        <g id="パス_814" data-name="パス 814" transform="translate(1585.957 65)" fill="none">
                            <path d="M8.492,0H201.436l9.433,43.631H0Z" stroke="none" />
                            <path d="M 10.96409606933594 2.999988555908203 L 3.64013671875 40.6308708190918 L 207.1511993408203 40.6308708190918 L 199.0151519775391 2.999988555908203 L 10.96409606933594 2.999988555908203 M 8.491683959960938 -1.1444091796875e-05 L 201.4358367919922 -1.1444091796875e-05 L 210.8691253662109 43.6308708190918 L -1.52587890625e-05 43.6308708190918 L 8.491683959960938 -1.1444091796875e-05 Z" stroke="none" fill="#fff" />
                        </g>
                        <g transform="translate(1601 81)">
                            <path id="パス_765" data-name="パス 765" d="M1,6.712v6.429a2,2,0,0,0,2,2H15a2,2,0,0,0,2-2V6.712L9,10.641Z" transform="translate(-1 -3.141)" fill="#fff" />
                            <path id="パス_766" data-name="パス 766" d="M15,3.141H3a2,2,0,0,0-2,2v.071L9,9.141l8-3.929V5.141A2,2,0,0,0,15,3.141Z" transform="translate(-1 -3.141)" fill="#fff" />
                        </g>
                        <text transform="translate(1703 93)" fill="#fff" font-size="16" font-family="HiraginoSans-W6, Hiragino Sans">
                            <tspan x="-80" y="0">お問い合わせ・ご依頼</tspan>
                        </text>
                    </a>
                </g>
            </svg>

			<!-- お問い合わせ sp -->
			<svg class="p-header-wrap__contact--sp" xmlns="http://www.w3.org/2000/svg" width="64.734" height="108.131" viewBox="0 0 64.734 108.131">
				<g transform="translate(-603 -257)">
					<line y2="65" transform="translate(618.043 257)" fill="none" stroke="#fff" stroke-width="3" />
					<line id="線_5105" data-name="線 5105" y2="65" transform="translate(649.965 257)" fill="none" stroke="#fff" stroke-width="3" />
					<a href="<?php echo home_url('/contact/');  ?>" class="k-top-contact__button">
						<g transform="translate(603 321.5)" fill="none">
							<path d="M2.607,0H61.838l2.9,43.631H0Z" stroke="none" />
							<path d="M 5.432945251464844 2.999996185302734 L 3.184589385986328 40.63086318969727 L 61.52865982055664 40.63086318969727 L 59.03097534179688 2.999996185302734 L 5.432945251464844 2.999996185302734 M 2.606842041015625 -3.814697265625e-06 L 61.83845520019531 -3.814697265625e-06 L 64.734375 43.63086318969727 L 0 43.63086318969727 L 2.606842041015625 -3.814697265625e-06 Z" stroke="none" fill="#fff" />
						</g>
						<g transform="translate(627.043 337.5)">
							<path d="M1,6.712v6.429a2,2,0,0,0,2,2H15a2,2,0,0,0,2-2V6.712L9,10.641Z" transform="translate(-1 -3.141)" fill="#fff" />
							<path d="M15,3.141H3a2,2,0,0,0-2,2v.071L9,9.141l8-3.929V5.141A2,2,0,0,0,15,3.141Z" transform="translate(-1 -3.141)" fill="#fff" />
						</g>
					</a>
				</g>
			</svg>

            <div class="p-header-wrap__title">
                <img src="<?php echo get_theme_file_uri('/assets/image/urushitoki-logo.png'); ?>" alt="うるしときロゴ">
                <br><br>
                <p class="c-text--white">URUSHITOKI SADAIKE</p>
                <p class="p-header-wrap__title__description c-text--white">工芸の街「金沢」で天然素材にこだわり、素地から塗り蒔絵と一貫した漆工芸品を、一点一点手作業で丁寧に制作しています。<br>
                    輪島で身につけ金沢で育んだ技の数々が作り出す、「うるしとき 定池」をどうぞご覧ください。</p>
			</div>
		</div>
		<img class="p-header-monyou--left" src="<?php echo get_theme_file_uri('/assets/image/monyou02-large.png'); ?>" alt="">
		<img class="p-header-monyou--right" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
		<img class="p-header-arrow" src="<?php echo get_theme_file_uri('/assets/image/top-arrow.png'); ?>" alt="">
    </header>
<?php endif;?>
