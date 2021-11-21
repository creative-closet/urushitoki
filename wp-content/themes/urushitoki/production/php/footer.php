	<!-- styleはマークアップ完了までの仮置き -->
	<style>
		.k-footer{
			background-image: url("<?php echo get_theme_file_uri('/production/images/4M3A9744-full.jpg'); ?>");
			background-size: cover;
			height: 800px;
			padding: 60px;
			display: flex;
			flex-direction: column;
		}
		.k-footer ul{
			list-style: none;
		}
		.k-footer a,.k-text--white{
			text-decoration: none;
			color: #fff;
		}
		.k-footer-nav{
			display: flex;
			justify-content: space-between;
		}
		.k-footer-link{
			display: flex;
		}
		.footer-main_nav,.footer-post_nav{
			padding-right: 50px;
		}
		.k-footer-logo{
			display: flex;
			justify-content: space-between;
			margin-top: auto;
		}
		.k-copyright{
			margin-top: auto;
		}
	</style>

	<!-- タグ・クラス名はマークアップ完了までの仮置き -->
	<footer class="k-footer">
		<nav class="k-footer-nav">
			<div class="k-footer-link">
				<?php $menu_name = 'footer-main_nav';
				get_template_part('includes/nav-menu', null , $menu_name );

				$menu_name = 'footer-post_nav';
				get_template_part('includes/nav-menu', null , $menu_name ); ?>
			</div>

			<div class="k-contact">
				<?php $menu_name = 'footer-contact_nav';
				get_template_part('includes/nav-menu', null , $menu_name );?>
				<address class="k-text--white">076-229-0860</address>
			</div>
		</nav>

		<?php /* SNS */
		$users = get_users(array('orderby'=>'ID','order'=>'ASC'));
		$i = 1;
		foreach($users as $user) {
			$user_id = $user->ID;
			$group = SCF::get_user_meta($user_id,'sns');
				foreach ($group as $fields ) {
					if($fields['sns_type'] != "" && $fields['sns_url'] != ""){
						if($i == 1){
							$i = 2; ?>
							<ul class="footer-sns_nav">
						<?php }
						$my_sns = $fields['sns_type']; ?>
						<li class="footer-sns_nav__list">
							<?php if($my_sns == 'Twitter'){ ?>
								<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="k-menu-twitter" target="_blank" rel="noopener noreferrer">
								<i class="fab fa-twitter"></i><?php echo $fields['sns_name']; ?>
							<?php }
							elseif($my_sns == 'Instagram'){ ?>
								<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="k-menu-insta" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-instagram"></i><?php echo $fields['sns_name']; ?>
								</a>
							<?php }
							elseif($my_sns == 'Facebook'){ ?>
								<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="k-menu-facebook" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-facebook"></i><?php echo $fields['sns_name']; ?>
								</a>
							<?php }
							elseif($my_sns == 'YouTube'){ ?>
								<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="k-menu-youtube" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-youtube"></i><?php echo $fields['sns_name']; ?>
								</a>
							<?php } ?>
						</li>
					<?php }
				} ?>
		<?php }
		if($i == 2){ ?>
			</ul>
		<?php } ?>
		<div class="k-footer-logo">
			<!-- width heightはマークアップ完了までの仮置き -->
			<img src="<?php echo get_theme_file_uri('/production/images/うるしどきロゴ.png'); ?>" alt="うるしどきロゴ" width="334" height="98">
			<p class="k-copyright k-text--white">©︎ 2021 URUSHITOKI ALL RIGHTS RESERVED.</p>
		</div>

	</footer>

	<?php wp_footer(); ?>
</body>

</html>
