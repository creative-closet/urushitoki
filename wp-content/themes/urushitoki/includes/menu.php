<!-- styleはマークアップ完了までの仮置き -->
<style>
	body::before{
		content: '';
		background-color: transparent;
		transition: all 0.5s;
	}
	body.active{
		position: relative;
		overflow-y: hidden;
	}
	body.active::before{
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		background-color: #fff;
		z-index: 200;
	}
</style>
<!-- styleはマークアップ完了までの仮置き -->

<nav class="p-gnavi">
	<div class="c-button--open js-menu-open">
		<div class="c-button--open--area">
			<span></span><span></span><span></span>
		</div>
	</div>
	<!-- タグ・クラス名等マークアップ完了までの仮置き -->
	<article class="p-menu js-menu">
		<!-- <img class="p-menu__background js-menu-background" src="<?php echo get_theme_file_uri('/assets/image/menu-background.jpg') ?>" alt=""> -->
		<a href="<?php echo esc_url(home_url('/')); ?>" class="p-menu__logo">
			<!-- width="200" height="58"はマークアップ完了までの仮置き -->
			<img src="<?php echo get_theme_file_uri('/assets/image/urushitoki-logo.png'); ?>" alt="うるしときロゴ" width="200" height="58">
		</a>
		<?php
			$menu_name = 'menu_nav';
			get_template_part('includes/nav-menu', null , $menu_name );
		?>
		<a href="<?php echo home_url('/contact/');  ?>" class="c-button--inquiry--menu-inner">
			お問い合わせ・ご依頼
		</a>
	</article>
</nav>

