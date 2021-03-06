<?php get_header(); ?>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>

		<div class="c-wrapper c-sns__margin">
		<?php /* SNS */
			$group = SCF::get('page-sns');
			foreach ((array)$group as $fields ) :
				if($fields['sns_page_type'] != "" && $fields['page-sns_url'] != "") : ?>
					<figure class="p-sns">
						<?php $my_sns = $fields['sns_page_type'];
						if($my_sns == 'Instagram') : ?>
							<a href="<?php echo esc_attr($fields['page-sns_url']) ?>" class="c-sns--insta" target="_blank" rel="noopener noreferrer">
								<i class="fab fa-instagram"></i>
								<span class="c-title__profile">Instagram</span>
							</a>
						<?php
						elseif($my_sns == 'Facebook') : ?>
							<a href="<?php echo esc_attr($fields['page-sns_url']) ?>"  class="c-sns--facebook" target="_blank" rel="noopener noreferrer">
								<i class="fab fa-facebook-f"></i>
								<span class="c-sns__title">Facebook</span>
							</a>
						<?php
						elseif($my_sns == 'YouTube') : ?>
							<a href="<?php echo esc_attr($fields['page-sns_url']) ?>" class="c-sns--youtube" target="_blank" rel="noopener noreferrer">
								<i class="fab fa-youtube"></i>
								<span class="c-title__profile">YouTube</span>
							</a>
						<?php endif; ?>
						<div class="p-sns__introduction">
							<p class="c-text--large"><?php echo $fields['page-sns_name']; ?></p>
							<p class="c-text"><?php echo $fields['page-sns_description']; ?></p>
						</div>
					</figure>
				<?php endif;
			endforeach;
		?>


		<!-- 記述内容の表示 -->
		<?php get_template_part('/includes/have-post-loop');?>
	</div>

	<?php get_footer(); ?>
