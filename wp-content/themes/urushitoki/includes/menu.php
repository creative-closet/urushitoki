<!-- styleはマークアップ完了までの仮置き -->
<style>
	menu{
		background-color: #270B0B;
	}
	.menu-main_nav_list{
		position: relative;
	}
	.menu-main_nav_list a{
		text-decoration: none;
		color: #fff;
	}
	.menu-main_nav_list::after {
		content: attr(title) "";
		position: absolute;
		left: 200px;
		color: #E0D7CA;
	}
</style>

<menu>
	<a href="<?php echo esc_url(home_url('/')); ?>">
		<!-- width="200" height="58"はマークアップ完了までの仮置き -->
		<img src="<?php echo get_theme_file_uri('/production/images/うるしどきロゴ.png'); ?>" alt="うるしどきロゴ" width="200" height="58">
	</a>
	<?php
		$menu_name = 'menu-main_nav';
		get_template_part('includes/nav-menu', null , $menu_name );
	?>
</menu>
