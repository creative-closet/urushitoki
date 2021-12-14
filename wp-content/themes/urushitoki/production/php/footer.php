	<!-- styleはマークアップ完了までの仮置き -->
	<style>
		.k-footer{
			background-image: url("<?php echo get_theme_file_uri('/assets/image/footer-background.jpg'); ?>");
			background-size: cover;
			height: 100vh;
		}
		.c-wrapper--footer{
			display: flex;
			flex-direction: column;
			padding-left:17%;
			padding-right:17%;
			height: inherit;
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
			margin-top: 50px;
		}
		.k-footer-link{
			flex-grow: 1;
		}
		.k-footer-logo{
			display: flex;
			justify-content: space-between;
			margin: auto 0 60px;
		}
		.k-copyright{
			margin-top: auto;
		}
	</style>

	<!-- タグ・クラス名はマークアップ完了までの仮置き -->
	<footer class="k-footer">
		<div class="c-wrapper--footer">
			<nav class="k-footer-nav">
				<div class="k-footer-link">
					<?php
						$menu_name = 'menu_nav';
						get_template_part('includes/nav-menu', null , $menu_name );
					?>
				</div>

				<div class="k-contact">
					<p><a href="<?php echo home_url('/contact/');  ?>" class="k-text--white">お問い合わせ・ご依頼</a></p>
					<p><a href="<?php echo home_url('/faq/');  ?>" class="k-text--white">よくある質問</a></p>
					<address class="k-text--white">076-229-0860</address>
				</div>
			</nav>

			<?php /* SNS */
			$users = get_users(array('orderby'=>'ID','order'=>'ASC'));
			$have_ul_tag = false;
			foreach($users as $user) {
				$user_id = $user->ID;
				$group = SCF::get_user_meta($user_id,'sns');
					foreach ((array)$group as $fields ) {
						if($fields['sns_type'] != "" && $fields['sns_url'] != ""){
							if(!$have_ul_tag){ ?>
								<ul class="footer-sns_nav">
								<?php $have_ul_tag = true;
							}
							$my_sns = $fields['sns_type']; ?>
							<li class="footer-sns_nav__list">
								<?php if($my_sns == 'Instagram'){ ?>
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
			if($have_ul_tag){ ?>
				</ul>
			<?php } ?>
			<div class="k-footer-logo">
				<!-- width heightはマークアップ完了までの仮置き -->
				<img src="<?php echo get_theme_file_uri('/assets/image/urushitoki-logo.png'); ?>" alt="うるしときロゴ">
				<p class="k-copyright k-text--white">©︎ 2021 URUSHITOKI ALL RIGHTS RESERVED.</p>
			</div>
		</div>

	</footer>

	<?php wp_footer(); ?>
</body>

</html>
