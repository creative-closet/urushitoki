<?php get_header(); ?>
<body>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>

	<?php $users = get_users(array('orderby'=>'ID','order'=>'ASC'));
	foreach($users as $user) {
		$user_id = $user->ID;?>

		<!-- SNS -->
		<?php if(SCF::get_user_meta($user_id,'sns') != ""):
			$group = SCF::get_user_meta($user_id,'sns');
			foreach ($group as $fields ) {
				$my_sns = $fields['sns_type'];
				if($my_sns == 'Twitter'){ ?>
					<a href="<?php echo esc_attr($fields['sns_url']) ?>" target="_blank" rel="noopener noreferrer">
					<img src="twitter-icon" alt="twitter"></a>
				<?php }
				elseif($my_sns == 'Instagram'){ ?>
					<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="c-button--sns--insta" target="_blank" rel="noopener noreferrer">
						<i class="fab fa-instagram"></i>
						<span class="c-title__profile">Instagram</span>
					</a>
				<?php }
				elseif($my_sns == 'Facebook'){ ?>
					<a href="<?php echo esc_attr($fields['sns_url']) ?>" target="_blank" rel="noopener noreferrer">
					<img src="facebook-icon" alt="facebook"></a>
				<?php }
				elseif($my_sns == 'YouTube'){ ?>
					<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="c-button--sns--youtube" target="_blank" rel="noopener noreferrer">
						<i class="fab fa-youtube"></i>
						<span class="c-title__profile">YouTube</span>
					</a>
				<?php } ?>
				<p><?php echo $fields['sns_name']; ?></p>
				<p><?php echo $fields['sns_description']; ?></p>
			<?php }
		endif;
	} ?>

	<!-- 記述内容の表示 -->
	<?php get_template_part('/includes/have-post-loop');?>

	<?php get_footer(); ?>
