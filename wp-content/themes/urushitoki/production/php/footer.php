	<footer class="p-footer">
		<div class="c-wrapper--footer">
			<nav class="p-footer__nav">
				<div class="p-footer__nav__menu">
					<?php
						$menu_name = 'menu_nav';
						get_template_part('includes/nav-menu', null , $menu_name );
					?>
				</div>

				<ul class="p-footer__contact">
					<li class="p-footer__contact__list"><a href="<?php echo home_url('/contact/');  ?>" class="c-text--white">お問い合わせ・ご依頼</a></li>
					<li class="p-footer__contact__list"><a href="<?php echo home_url('/faq/');  ?>" class="c-text--white">よくある質問</a></li>
					<li class="p-footer__contact__list"><a href="<?php echo home_url('/tokushoho/');  ?>" class="c-text--white">特定商取引法</a></li>
					<li class="p-footer__contact__list"><address class="c-text--white">076-229-0860</address></li>
				</ul>
			</nav>

			<div class="p-footer-logo">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer-logo__link">
					<img src="<?php echo get_theme_file_uri('/assets/image/urushitoki-logo.png'); ?>" alt="うるしときロゴ">
				</a>
				<p class="p-footer-logo__copyright c-text--white">©︎ 2021 URUSHITOKI ALL RIGHTS RESERVED.</p>
			</div>
		</div>

	</footer>

	<?php wp_footer(); ?>
</body>
</div>

</html>
