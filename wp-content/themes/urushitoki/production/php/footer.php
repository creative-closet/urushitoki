	<footer>
		<?php
			$menu_name = 'footer-main_nav';
			get_template_part('includes/nav-menu', null , $menu_name );

			$menu_name = 'footer-post_nav';
			get_template_part('includes/nav-menu', null , $menu_name );

			$menu_name = 'footer-sns_nav';
			get_template_part('includes/nav-menu', null , $menu_name );

			$menu_name = 'footer-contact_nav';
			get_template_part('includes/nav-menu', null , $menu_name );
		?>
	</footer>

	<?php wp_footer(); ?>
</body>

</html>
