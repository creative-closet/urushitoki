<?php get_header(); ?>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>

		<div class="c-wrapper">

		<?php /* SNS */
		$group = SCF::get('page-sns');
		foreach ((array)$group as $fields ) {
			if($fields['page-sns_type'] != "" && $fields['page-sns_url'] != ""){ ?>
				<figure class="k-sns">
					<?php $my_sns = $fields['page-sns_type'];
					if($my_sns == 'Instagram'){ ?>
						<a href="<?php echo esc_attr($fields['page-sns_url']) ?>" class="c-sns--insta" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-instagram"></i>
							<span class="c-title__profile">Instagram</span>
						</a>
					<?php }
					elseif($my_sns == 'Facebook'){ ?>
						<a href="<?php echo esc_attr($fields['page-sns_url']) ?>" target="_blank" rel="noopener noreferrer">
						<img src="facebook-icon" alt="facebook"></a>
					<?php }
					elseif($my_sns == 'YouTube'){ ?>
						<a href="<?php echo esc_attr($fields['page-sns_url']) ?>" class="c-sns--youtube" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-youtube"></i>
							<span class="c-title__profile">YouTube</span>
						</a>
					<?php } ?>
					<div class="k-sns__introduction">
						<p class="c-text--large"><?php echo $fields['page-sns_name']; ?></p>
						<p class="c-text"><?php echo $fields['page-sns_description']; ?></p>
					</div>
				</figure>
			<?php }
		}?>


		<!-- 記述内容の表示 -->
		<?php get_template_part('/includes/have-post-loop');?>
	</div>

	<?php get_footer(); ?>
