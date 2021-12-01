<style>
	.k-flex{
		display: flex;
	}
	.k-button-position{
		position: relative;
		z-index: 10;
		margin-left: auto;
	}
	.k-information__archive , .k-article__archive{
		position: relative;
		z-index: 10;
	}
</style>


<?php get_header(); ?>
<body>
	<header>
		<?php get_template_part('includes/menu'); ?>
		<?php get_template_part('includes/header'); ?>
	</header>

	<div class="c-background--dot">
		<div class="c-background--wave">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 471.833">
				<path class="shape-fill" d="M-21832-16290.018s36.342,7.16,92.715,17.173c133.57,23.722,379.355,63.457,527.4,63.457,210.893,0,426.289-193.964,684.771-188.575s615.109,228.11,615.109,228.11v-471.833h-1920Z" transform="translate(21832 16641.686)"></path>
			</svg>
		</div>
		<!-- 仮置きスタイル -->
		<article class="k-urushi k-flex">
			<div class="c-pattern">
				<img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/production/images/monyou02.png'); ?>" alt="">
				<img class="c-pattern__image" src="<?php echo get_theme_file_uri('/production/images/16.jpg'); ?>" alt="">
			</div>
			<div class="k-urushi__text">
				<h2 class="c-title">天然漆にこだわる</h2>
				<p>化学塗料、漆の吹付塗装の技術が進化している中でも、天然漆にこだわり手塗りの伝統の技法を大切にした
					漆本来の味わいやぬくもりのある物づくりをすることで日本人が忘れかけている伝統工芸の本筋を正すことが進化と考えています。</p>
				<!-- width heightはマークアップ完了までの仮置き -->
				<img class="" src="<?php echo get_theme_file_uri('/production/images/3天然漆.png'); ?>" alt="" width="508" height="329">
			</div>
		</article>

		<br><br><br><br><br>

		<article class="k-makie k-flex">
			<div class="c-pattern">
				<img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/production/images/monyou01.png'); ?>" alt="">
				<div class="k-makie__text">
					<h2 class="c-title-large">指物と乾漆で素地から塗り蒔絵まで一貫した制作</h2>
					<p>仏壇蒔絵や仏壇修理修繕を行いながら、素地(木地・乾漆)から塗り蒔絵まで一貫した取り組みで厨子や器、
						漆アクセサリーなどの漆工芸品の制作活動に力をいれオーダーメイドにも対応しています。今の時代に合ったデザインで伝統的な漆の良さを伝えます。</p>
				</div>
			</div>
			<!-- width heightはマークアップ完了までの仮置き -->
			<img class="" src="<?php echo get_theme_file_uri('/production/images/30.JPG'); ?>" alt="" width="911" height="368">
		</article>

		<br><br><br><br><br>

		<h2 class="c-title-large">Urushi Contents</h2>

		<article class="k-accessory k-flex">
			<div class="c-pattern">
				<img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/production/images/monyou02.png'); ?>" alt="">
				<img class="c-pattern__image" src="<?php echo get_theme_file_uri('/production/images/20.jpg'); ?>" alt="">
			</div>
			<div class="k-accessory__text">
				<h3 class="c-title-small">アクセサリー</h3>
				<p>年代を問わずにお使いいただける、シンプルなデザインのアクセサリー流行りに流されない特別な品を、末永く身につけていただけたら幸いです。</p>
				<a href="<?php echo home_url('/archive_accessory/'); ?>" class="c-button--primary" id="p-ripples--effect">
					<span class="c-button--primary--text">MORE</span>
					<span class="c-button--primary--line"></span>
				</a>
			</div>
		</article>

		<br><br><br><br><br>

		<article class="k-kintsugi k-flex">
			<div class="k-kintsugi__text">
				<h3 class="c-title-small">金継ぎ</h3>
				<p class="c-text">壊れてしまった大切なものを蘇らせます。金継ぎをすることでより味わい深いものに仕上げます。</p>
				<a href="<?php echo home_url('/kintsugi/'); ?>" class="c-button--primary" id="p-ripples--effect">
					<span class="c-button--primary--text">MORE</span>
					<span class="c-button--primary--line"></span>
				</a>
			</div>
			<div class="c-pattern">
				<img class="c-pattern__layer--right" src="<?php echo get_theme_file_uri('/production/images/monyou02.png'); ?>" alt="">
				<img class="c-pattern__image" src="<?php echo get_theme_file_uri('/production/images/07.jpg'); ?>" alt="">
			</div>
		</article>

		<br><br><br><br><br><br>

		<article class="k-life k-flex">
			<div class="c-pattern">
				<img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/production/images/monyou02.png'); ?>" alt="">
				<img class="c-pattern__image" src="<?php echo get_theme_file_uri('/production/images/87.jpg'); ?>" alt="">
			</div>
			<div class="k-life__text">
				<h3 class="c-title-small">うるしと生活</h3>
				<p>天然素材のものが身近にあることでぬくもりのある生活をおくりませんか。皆様の生活がより豊かになるようなものづくりを心がけています。</p>
				<a href="<?php echo home_url('/life/'); ?>" class="c-button--primary" id="p-ripples--effect">
					<span class="c-button--primary--text">MORE</span>
					<span class="c-button--primary--line"></span>
				</a>
			</div>
		</article>

		<br><br><br><br><br>

		<article class="k-music k-flex">
			<div class="k-music__text">
				<h3 class="c-title-small">うるしと楽器</h3>
				<p class="c-text">楽器や楽器付属品に付加価値を。漆の魅力を音楽にのせて伝えます。</p>
				<a href="<?php echo home_url('/instrument/'); ?>" class="c-button--primary" id="p-ripples--effect">
					<span class="c-button--primary--text">MORE</span>
					<span class="c-button--primary--line"></span>
				</a>
			</div>
			<div class="c-pattern">
				<img class="c-pattern__layer--right" src="<?php echo get_theme_file_uri('/production/images/monyou02.png'); ?>" alt="">
				<img class="c-pattern__image" src="<?php echo get_theme_file_uri('/production/images/DSC06771.jpg'); ?>" alt="">
			</div>
		</article>

		<br><br><br><br><br>

		<!-- informationのギャラリー表示 -->
		<article class="k-information">
			<div class="c-pattern">
				<div class="k-information__archive k-flex">
					<?php get_template_part('/includes/archive-information')?>
				</div>
				<img class="c-pattern__layer--right" src="<?php echo get_theme_file_uri('/production/images/monyou01.png'); ?>" alt="">
			</div>
			<a href="<?php echo home_url('/archive_information/'); ?>" class="c-button--primary k-button-position" id="p-ripples--effect">
				<span class="c-button--primary--text">MORE</span>
				<span class="c-button--primary--line"></span>
			</a>
		</article>

		<br><br><br>

		<!-- 投稿のギャラリー表示 -->
		<article class="k-article">
			<div class="c-pattern">
				<div class="k-article__archive k-flex">
					<?php get_template_part('/includes/archive-post')?>
				</div>
				<img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/production/images/monyou01.png'); ?>" alt="">
			</div>
			<a href="<?php echo home_url('/archive_post/'); ?>" class="c-button--primary k-button-position" id="p-ripples--effect">
				<span class="c-button--primary--text">MORE</span>
				<span class="c-button--primary--line"></span>
			</a>
		</article>

		<br><br><br>

	</div>

	<?php get_footer(); ?>
