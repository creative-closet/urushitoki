	<footer>
		<?php
			$menu_name = 'footer-main_nav';
			get_template_part('includes/nav-menu', null , $menu_name );

			$menu_name = 'footer-post_nav';
			get_template_part('includes/nav-menu', null , $menu_name );

			/* SNS */
			$users = get_users(array('orderby'=>'ID','order'=>'ASC'));
			foreach($users as $user) {
				$user_id = $user->ID;
				$group = SCF::get_user_meta($user_id,'sns');
				foreach ($group as $fields ) {
					if($fields['sns_type'] != "" && $fields['sns_url'] != ""){
						$my_sns = $fields['sns_type'];
						if($my_sns == 'Twitter'){ ?>
							<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="k-menu-twitter" target="_blank" rel="noopener noreferrer">
							<p class="c-text"><i class="fab fa-twitter"></i><?php echo $fields['sns_name']; ?></p>
						<?php }
						elseif($my_sns == 'Instagram'){ ?>
							<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="k-menu-insta" target="_blank" rel="noopener noreferrer">
								<p class="c-text"><i class="fab fa-instagram"></i><?php echo $fields['sns_name']; ?></p>
							</a>
						<?php }
						elseif($my_sns == 'Facebook'){ ?>
							<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="k-menu-facebook" target="_blank" rel="noopener noreferrer">
								<p class="c-text"><i class="fab fa-facebook"></i><?php echo $fields['sns_name']; ?></p>
							</a>
						<?php }
						elseif($my_sns == 'YouTube'){ ?>
							<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="k-menu-youtube" target="_blank" rel="noopener noreferrer">
								<p class="c-text"><i class="fab fa-youtube"></i><?php echo $fields['sns_name']; ?></p>
							</a>
						<?php } ?>
					<?php }
				}
			} ?>
			<?php $menu_name = 'footer-contact_nav';
			get_template_part('includes/nav-menu', null , $menu_name );
		?>
	</footer>

	<?php wp_footer(); ?>
</body>

</html>
