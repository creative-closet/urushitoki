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
	.menu{
		width: 100%;
	}
	.menu_nav{
		margin: 30px 0;
		width: 100%;
	}
	.menu_nav__link{
		display: block;
		width: 420px;
		text-decoration: none;
		color: #fff;
		background-color: transparent;
	}
	.menu_nav__link:hover{
		background-color: rgba(255, 255, 255, 0.2);
		transition: all 0.2s;
	}
	.menu_nav__list{
		position: relative;
		display: block;
		list-style: none;
		margin-bottom: 30px;
	}
	.menu_nav__list::after {
		content: attr(title) "";
		position: absolute;
		left: 200px;
		color: #E0D7CA;
	}
	.menu-list{
		position: fixed;
		z-index: 300;
		overflow-y: scroll;
		top: 0;
		left: -100%;
		padding-top: 250px;
		padding-left: 60px;
		width: 100%;
		height: 100vh;
		transition: all 0.5s;
	}
	.menu-list.active{
		left: 0;
	}
	.k-menu-background{
		position: fixed;
		top :0;
		left:-100%;
		z-index: -1;
		height: 100%;
		object-fit: contain;
		transition: all 0.5s;
	}
	.k-menu-background.active{
		left:0;
	}
	.k-open--button{
		top: 60px;
		left: 60px;
		position: fixed;
		z-index: 1000;
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
			$menu_name = 'menu_nav';
			get_template_part('includes/nav-menu', null , $menu_name );
		?>
		<a href="<?php echo home_url('/contact/');  ?>" class="c-button--inquiry--menu-inner">
			お問い合わせ・ご依頼
		</a>
	</article>
</menu>

