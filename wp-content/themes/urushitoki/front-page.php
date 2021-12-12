<style>

	.k-flex--space-between{
		display: flex;
		justify-content: space-between;
	}

	/* ヘッダー部品 */
	.k-top-contact{
		position: absolute;
		top: 0;
		right: 50px;
		z-index: 20;
	}

	/* 天然漆にこだわる */
	.k-urushi{
		padding-top: 200px;
	}
	.k-urushi__text{
		padding: 40px 0 0 40px;
	}
	.k-urushi__pattern{
		position: relative;
	}
	.k-urushi__pattern__layer--left{
		position: absolute;
		top: 50%;
		left: -40%;
	}
	.k-urushi__pattern__image2{
		position: absolute;
		top: 50%;
		right: -30%;
	}

	/* 指物と乾漆で素地から塗り蒔絵まで一貫した制作 */
	.k-make__text{
		padding: 40px 40px 0 0;
	}
	.k-make__text__monyou{
		position: absolute;
		left: -5%;
		transform: translateY(-10%);
	}

	/* Urushi Contents */
	.k-urushi-contents__description-area{
		position: relative;
		width: 300px;
		height: inherit;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}
	.k-urushi-contents__text--right{
		padding: 30px 0 0 30px;
	}
	.k-urushi-contents__text--left{
		padding: 30px 30px 0 0;
	}
	.k-urushi-contents__button--right{
		position: absolute;
		top: -15px;
		right: 50px;
		z-index: 1;
	}
	.k-urushi-contents__button--left{
		position: absolute;
		top: -15px;
		z-index: 1;
	}

	.k-information__archive , .k-article__archive{
		position: relative;
		z-index: 10;
	}


</style>


<?php get_header(); ?>
<body>
	<?php get_template_part('includes/menu'); ?>
	<svg class="k-top-contact" xmlns="http://www.w3.org/2000/svg" width="210.869" height="108.131" viewBox="0 0 210.869 108.131">
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
	<?php get_template_part('includes/header'); ?>

	<div class="c-background--dot">
		<div class="c-background--wave">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 471.833">
				<path class="shape-fill" d="M-21832-16290.018s36.342,7.16,92.715,17.173c133.57,23.722,379.355,63.457,527.4,63.457,210.893,0,426.289-193.964,684.771-188.575s615.109,228.11,615.109,228.11v-471.833h-1920Z" transform="translate(21832 16641.686)"></path>
			</svg>
		</div>
		<!-- 仮置きスタイル -->
		<article class="k-urushi k-flex--space-between c-wrapper--right">
			<div class="k-urushi__pattern">
				<img class="k-urushi__pattern_image1" src="<?php echo get_theme_file_uri('/assets/image/top-tree.jpg'); ?>" alt="うるしの木">
				<img class="k-urushi__pattern__layer--left" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
				<img class="k-urushi__pattern__image2" src="<?php echo get_theme_file_uri('/assets/image/top-urushi.jpg'); ?>" alt="うるし">
			</div>
			<section class="k-urushi__text">
				<h2 class="c-title">天然漆にこだわる</h2>
				<p>化学塗料、漆の吹付塗装の技術が進化している中でも、天然漆にこだわり手塗りの伝統の技法を大切にした
					漆本来の味わいやぬくもりのある物づくりをすることで日本人が忘れかけている伝統工芸の本筋を正すことが進化と考えています。</p>
			</section>
		</article>

		<br><br><br><br><br>

		<article class="k-make k-flex--space-between c-wrapper--left">
			<section class="k-make__text">
				<h2 class="c-title">指物と乾漆で素地から塗り蒔絵まで一貫した制作</h2>
				<p>仏壇蒔絵や仏壇修理修繕を行いながら、素地(木地・乾漆)から塗り蒔絵まで一貫した取り組みで厨子や器、
					漆アクセサリーなどの漆工芸品の制作活動に力をいれオーダーメイドにも対応しています。今の時代に合ったデザインで伝統的な漆の良さを伝えます。</p>
				<img class="k-make__text__monyou" src="<?php echo get_theme_file_uri('/assets/image/monyou01.png'); ?>" alt="">
			</section>
			<img class="k-make__img" src="<?php echo get_theme_file_uri('/assets/image/top-make.jpg'); ?>" alt="制作">
		</article>

		<br><br><br><br><br><br><br><br><br><br>

		<div class="k-urushi-contents c-wrapper">
			<h2 class="c-title">Urushi Contents</h2>

			<article class="k-accessory k-flex--space-between">
				<div class="c-pattern">
					<img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
					<img class="c-pattern__image" src="<?php echo get_theme_file_uri('/assets/image/top-accessory.jpg'); ?>" alt="">
				</div>
				<div class="k-urushi-contents__description-area">
					<section class="k-urushi-contents__text--right">
						<h3 class="c-title-small">アクセサリー</h3>
						<p class="c-text">年代を問わずにお使いいただける、シンプルなデザインのアクセサリー流行りに流されない特別な品を、末永く身につけていただけたら幸いです。</p>
					</section>
					<a href="<?php echo home_url('/archive_accessory/'); ?>" class="k-urushi-contents__button--right c-button--primary" id="p-ripples--effect">
						<span class="c-button--primary--text">MORE</span>
						<span class="c-button--primary--line"></span>
					</a>
				</div>
			</article>

			<br><br><br><br><br>

			<article class="k-kintsugi k-flex--space-between">
				<div class="k-urushi-contents__description-area">
					<section class="k-urushi-contents__text--left">
						<h3 class="c-title-small">金継ぎ</h3>
						<p class="c-text">壊れてしまった大切なものを蘇らせます。金継ぎをすることでより味わい深いものに仕上げます。</p>
					</section>
					<a href="<?php echo home_url('/kintsugi/'); ?>" class="k-urushi-contents__button--left c-button--primary" id="p-ripples--effect">
						<span class="c-button--primary--text">MORE</span>
						<span class="c-button--primary--line"></span>
					</a>
				</div>
				<div class="c-pattern">
					<img class="c-pattern__layer--right" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
					<img class="c-pattern__image" src="<?php echo get_theme_file_uri('/assets/image/top-kintsugi.jpg'); ?>" alt="">
				</div>
			</article>

			<br><br><br><br><br>

			<article class="k-life k-flex--space-between">
				<div class="c-pattern">
					<img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
					<img class="c-pattern__image" src="<?php echo get_theme_file_uri('/assets/image/top-life.jpg'); ?>" alt="">
				</div>
				<div class="k-urushi-contents__description-area">
					<section class="k-urushi-contents__text--right">
						<h3 class="c-title-small">うるしと生活</h3>
						<p class="c-text">天然素材のものが身近にあることでぬくもりのある生活をおくりませんか。皆様の生活がより豊かになるようなものづくりを心がけています。</p>
					</section>
					<a href="<?php echo home_url('/life/'); ?>" class="k-urushi-contents__button--right c-button--primary" id="p-ripples--effect">
						<span class="c-button--primary--text">MORE</span>
						<span class="c-button--primary--line"></span>
					</a>
				</div>
			</article>

			<br><br><br><br><br><br>

			<article class="k-music k-flex--space-between">
				<div class="k-urushi-contents__description-area">
					<section class="k-urushi-contents__text--left">
						<h3 class="c-title-small">うるしと楽器</h3>
						<p class="c-text">楽器や楽器付属品に付加価値を、<br>漆の魅力を音楽にのせて伝えます。</p>
					</section>
					<a href="<?php echo home_url('/instrument/'); ?>" class="k-urushi-contents__button--left c-button--primary" id="p-ripples--effect">
						<span class="c-button--primary--text">MORE</span>
						<span class="c-button--primary--line"></span>
					</a>
				</div>
				<div class="c-pattern">
					<img class="c-pattern__layer--right" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
					<img class="c-pattern__image" src="<?php echo get_theme_file_uri('/assets/image/top-music.jpg'); ?>" alt="">
				</div>
			</article>

			<br><br><br><br><br>

			<!-- informationのギャラリー表示 -->
			<article class="k-information">
				<div class="c-pattern">
					<div class="k-information__archive k-flex--space-between">
						<?php get_template_part('/includes/archive-information')?>
					</div>
					<img class="c-pattern__layer--right" src="<?php echo get_theme_file_uri('/assets/image/monyou01.png'); ?>" alt="">
				</div>
			</article>

			<br><br><br><br><br><br><br>

			<!-- 投稿のギャラリー表示 -->
			<article class="k-article">
				<div class="c-pattern">
					<div class="k-article__archive k-flex--space-between">
						<?php get_template_part('/includes/archive-post')?>
					</div>
					<img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/assets/image/monyou01.png'); ?>" alt="">
				</div>
			</article>

			<br><br><br><br><br><br><br>
		</div>

	</div>
<?php get_footer(); ?>
