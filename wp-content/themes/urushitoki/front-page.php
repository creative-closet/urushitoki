<style>
	.l-body{
		width: 100%;
		overflow-x: hidden;
	}
	.k-flex--space-between{
		display: flex;
		justify-content: space-between;
	}

	.k-description-margin{
		margin-top: 20px;
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
		padding: 30px 0 0 25px;
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

	/* Information , Article */
	.k-information__archive , .k-article__archive{
		position: relative;
		z-index: 10;
	}
	.k-information__monyou{
		position: absolute;
		right: -5%;
		transform: translateY(-60%);
		z-index: -1;
	}
	.k-article__monyou{
		position: absolute;
		left: -5%;
		transform: translateY(-90%);
		z-index: -1;
	}


</style>


<?php get_header(); ?>
<body class="l-body">
	<?php get_template_part('includes/menu'); ?>
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
				<p class="c-text k-description-margin">化学塗料、漆の吹付塗装の技術が進化している中でも、天然漆にこだわり手塗りの伝統の技法を大切にした
					漆本来の味わいやぬくもりのある物づくりをすることで日本人が忘れかけている伝統工芸の本筋を正すことが進化と考えています。</p>
			</section>
		</article>

		<br><br><br><br><br>

		<article class="k-make k-flex--space-between c-wrapper--left">
			<section class="k-make__text">
				<h2 class="c-title">指物と乾漆で素地から塗り蒔絵まで一貫した制作</h2>
				<p class="c-text k-description-margin">仏壇蒔絵や仏壇修理修繕を行いながら、素地(木地・乾漆)から塗り蒔絵まで一貫した取り組みで厨子や器、
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
						<p class="c-text k-description-margin">年代を問わずにお使いいただける、シンプルなデザインのアクセサリー流行りに流されない特別な品を、末永く身につけていただけたら幸いです。</p>
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
						<p class="c-text k-description-margin">壊れてしまった大切なものを蘇らせます。金継ぎをすることでより味わい深いものに仕上げます。</p>
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
						<p class="c-text k-description-margin">天然素材のものが身近にあることでぬくもりのある生活をおくりませんか。皆様の生活がより豊かになるようなものづくりを心がけています。</p>
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
						<p class="c-text k-description-margin">楽器や楽器付属品に付加価値を、<br>漆の魅力を音楽にのせて伝えます。</p>
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
				<div class="k-information__archive k-flex--space-between">
					<?php get_template_part('/includes/archive-information')?>
				</div>
				<img class="k-information__monyou" src="<?php echo get_theme_file_uri('/assets/image/monyou01.png'); ?>" alt="">
			</article>

			<br><br><br><br><br><br><br>

			<!-- 投稿のギャラリー表示 -->
			<article class="k-article">
				<div class="k-article__archive k-flex--space-between">
					<?php get_template_part('/includes/archive-post')?>
				</div>
				<img class="k-article__monyou" src="<?php echo get_theme_file_uri('/assets/image/monyou01.png'); ?>" alt="">
			</article>

			<br><br><br><br><br><br><br>
		</div>

	</div>
<?php get_footer(); ?>
