<!-- styleはマークアップ完了までの仮置き -->
<style>
	body.active{
		overflow-y: hidden;
	}
	menu{
		overflow: hidden;
	}
	.menu-main_nav{
		margin: 50px 0;
	}
	.menu-main_nav__list{
		position: relative;
		list-style: none;
		margin-bottom: 30px;
	}
	.menu-main_nav__list a{
		text-decoration: none;
		color: #fff;
	}
	.menu-main_nav__list::after {
		content: attr(title) "";
		position: absolute;
		left: 200px;
		color: #E0D7CA;
	}
	.menu-list{
		position: fixed;
		z-index: 100;
		overflow-y: scroll;
		top: 0;
		right: -100%;
		padding-top: 250px;
		padding-left: 60px;
		width: 100%;
		height: 100vh;
	}
	.menu-list.active{
		right: 0;
	}
	.k-menu-background{
		position: absolute;
		top :0px;
		left:0px;
		z-index: -1;
		width: 100%;
		object-fit: cover;

	}
	.k-open--button{
		top: 60px;
		left: 60px;
		position: fixed;
		z-index: 200;
	}
</style>
<!-- styleはマークアップ完了までの仮置き -->

<menu>
	<div class="c-open--button k-open--button">
		<div class="c-open--button--area">
			<span></span><span></span><span></span>
		</div>
	</div>
	<!-- タグ・クラス名等マークアップ完了までの仮置き -->
	<article class="menu-list">
		<img class="k-menu-background" src="<?php echo get_theme_file_uri('/assets/image/menu-background.jpg') ?>" alt="">
		<a href="<?php echo esc_url(home_url('/')); ?>">
			<!-- width="200" height="58"はマークアップ完了までの仮置き -->
			<img src="<?php echo get_theme_file_uri('/assets/image/urushitoki-logo.png'); ?>" alt="うるしときロゴ" width="200" height="58">
		</a>
		<?php
			$menu_name = 'menu-main_nav';
			get_template_part('includes/nav-menu', null , $menu_name );
		?>
		<a href="<?php echo home_url('/contact/');  ?>" class="c-button--inquiry--menu-inner">
			お問い合わせ・ご依頼
		</a>
	</article>
</menu>
