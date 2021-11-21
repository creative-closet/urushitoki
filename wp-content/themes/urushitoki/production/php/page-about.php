<?php get_header(); ?>
<body>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>

	<!-- 記述内容の表示 -->
	<?php get_template_part('/includes/have-post-loop');?>

	<!-- うるしときの職人表示 -->
	<h2 class="c-title-large">うるしときの職人</h2>
	<?php $users = get_users(array('orderby'=>'ID','order'=>'ASC'));
	foreach($users as $user) {
		$user_id = $user->ID;?>
		<?php /* 写真 */
		if(SCF::get_user_meta($user_id,'user_photo') != ""){
			$img = SCF::get_user_meta($user_id,'user_photo');
			echo wp_get_attachment_image( $img , 'large' );
		} ?>

		<?php /* SNS */
		$group = SCF::get_user_meta($user_id,'sns');
		foreach ($group as $fields ) {
			if($fields['sns_type'] != "" && $fields['sns_url'] != ""){
				$my_sns = $fields['sns_type']; ?>
				<?php if($my_sns == 'Twitter'){ ?>
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
				<?php }
			}
		} ?>



		<?php if(get_the_author_meta('last_name',$user_id) != "" and get_the_author_meta('first_name',$user_id) != ""){ ?>
			<dl class="c-definition">
				<!-- 名前 -->
				<dt class="c-definition__title">
					<p><?php the_author_meta('last_name',$user_id); ?> <?php the_author_meta('first_name',$user_id); ?></p>
				</dt>

				<!-- 経歴 -->
				<?php if(SCF::get_user_meta($user_id,'career') != ""){
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
				} ?>
			</dl>
		<?php } ?>

		<?php /* 受賞 */
		$group = SCF::get_user_meta($user_id,'award');
		$i     = 1;
		foreach ($group as $fields ) {
			if($fields['award_detail'] != ""){
				if($i == 1){ ?>
					<ul class="c-bullet">
					<?php $i = 2;
				} ?>
				<li class="c-bullet__item"><?php echo $fields['award_detail']; ?></li>
			<?php }
		}
		if($i == 2){ ?>
			</ul>
		<?php }
	} ?>
	<!-- うるしときの職人表示ここまで -->
	<?php get_template_part('/includes/archive-shop');?>
	<?php get_footer(); ?>
