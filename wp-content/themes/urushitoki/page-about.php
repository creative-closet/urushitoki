<?php get_header(); ?>
<body>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>
	<header>
	</header>
	<article class="documentClass">
    	<h1>Css Test</h1>
	</article>
	<article id="sampleId">
			<h1>Js Test2</h1>
	</article>

	<!-- うるしときの職人表示 -->
	<h2 class="c-title-large">うるしときの職人</h2>
	<?php $users = get_users(array('orderby'=>'ID','order'=>'ASC'));
	foreach($users as $user) {
		$user_id = $user->ID;?>
		<!-- 写真 -->
		<?php if(SCF::get_user_meta($user_id,'user_photo') != ""):
				$img = SCF::get_user_meta($user_id,'user_photo');
				echo wp_get_attachment_image( $img , 'large' );
		endif; ?>

		<!-- SNS -->
		<?php if(SCF::get_user_meta($user_id,'sns') != ""):
			$group = SCF::get_user_meta($user_id,'sns');
			foreach ($group as $fields ) {
				$my_sns = $fields['sns_type'];
				if($my_sns == 'Twitter'){ ?>
					<a href="<?php esc_attr($fields['sns_url']) ?>" target="_blank" rel="noopener noreferrer">
					<img src="twitter-icon" alt="twitter"></a>
				<?php }
				elseif($my_sns == 'Instagram'){ ?>
					<a href="<?php esc_attr($fields['sns_url']) ?>" class="c-button--sns--insta" target="_blank" rel="noopener noreferrer">
						<i class="fab fa-instagram"></i>
						<span class="c-title__profile">Instagram</span>
					</a>
				<?php }
				elseif($my_sns == 'Facebook'){ ?>
					<a href="<?php esc_attr($fields['sns_url']) ?>" target="_blank" rel="noopener noreferrer">
					<img src="facebook-icon" alt="facebook"></a>
				<?php }
				elseif($my_sns == 'Youtube'){ ?>
					<a href="<?php esc_attr($fields['sns_url']) ?>" class="c-button--sns--youtube" target="_blank" rel="noopener noreferrer">
						<i class="fab fa-youtube"></i>
						<span class="c-title__profile">YouTube</span>
					</a>
				<?php }
			}
		endif; ?>


		<dl class="c-definition">
			<!-- 名前 -->
			<dt class="c-definition__title">
				<?php if(get_the_author_meta('last_name',$user_id) != "" and get_the_author_meta('first_name',$user_id) != ""): ?>
					<p><?php the_author_meta('last_name',$user_id); ?> <?php the_author_meta('first_name',$user_id); ?></p>
				<?php endif ?>
			</dt>

			<!-- 経歴 -->
			<?php if(SCF::get_user_meta($user_id,'career') != ""):
				$group = SCF::get_user_meta($user_id,'career');
				$last_year = 0;
				foreach ($group as $fields ) { ?>
					<dd class="c-definition__detail">
						<?php if($last_year != $fields['career_year'] && $fields['career_year'] !=""){ ?>
							<p class="c-definition__detail__item"><?php echo $fields['career_year']; ?></p>
						<?php } ?>
						<p class="c-definition__detail__item"><?php echo $fields['career_detail']; ?></p>
					</dd>
					<?php $last_year = $fields['career_year'];
				}
			endif; ?>
		</dl>

		<!-- 受賞 -->
		<?php if(SCF::get_user_meta($user_id,'award') != ""):
			$group = SCF::get_user_meta($user_id,'award'); ?>
			<ul class="c-bullet">
				<?php foreach ($group as $fields ) { ?>
					<li class="c-bullet__item"><?php echo $fields['award_detail']; ?></li>
				<?php } ?>
			</ul>
		<?php endif; ?>

		<?php
	} ?>
	<!-- うるしときの職人表示ここまで -->

	<?php get_footer(); ?>
