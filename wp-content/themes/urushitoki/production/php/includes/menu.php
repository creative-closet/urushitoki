<nav class="p-gnavi">
	<div class="c-button--open js-menu-open">
		<div class="c-button--open--area">
			<span></span>
			<span>メニュー展開ボタン</span>
			<span></span>
		</div>
	</div>
	<aside class="p-menu js-menu">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="p-menu__logo">
			<img src="<?php echo get_theme_file_uri('/assets/image/urushitoki-logo.png'); ?>" alt="うるしときロゴ" width="200" height="58">
		</a>
		<?php
			$menu_name = 'menu_nav';
			get_template_part('includes/nav-menu', null , $menu_name );
		?>
		<a href="<?php echo home_url('/contact/');  ?>" class="c-button--inquiry--menu-inner">
			お問い合わせ・ご依頼
		</a>
	</aside>
</nav>
