<?php get_header(); ?>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>
	<!-- メインコンテンツ -->
	<main class="l-main">
		<article class="c-wrapper">
			<!-- 記述内容の表示 -->
			<?php get_template_part('/includes/have-post-loop');?>
			<!-- 記事内容との間隔調整 -->
			<article class="l-main--about">
				<!-- 見出しタイトル -->
				<h2 class="c-title-large u-margin--small">うるしときの職人</h2>
				<!-- うるしときの職人表示 -->

				<?php $users = get_users(array('orderby'=>'ID','order'=>'ASC'));
				foreach($users as $user) {// 職人データforeach -start-
					$user_id = $user->ID;?>

					<?php /* 写真 写真がある場合のみタグを出力する */
					if(SCF::get_user_meta($user_id,'user_photo') != ""){
						$img = SCF::get_user_meta($user_id,'user_photo');
						echo '<article class="p-craftman c-flex">';
						echo '<div class="p-craftman__image">';
						echo wp_get_attachment_image( $img , 'large' );
						echo '</div>';
					} ?>

					<?php if(get_the_author_meta('last_name',$user_id) != "" and get_the_author_meta('first_name',$user_id) != ""){ ?>
						<div class="p-craftman__information">
							<dl class="c-definition">
								<!-- 名前 -->
								<dt class="p-craftman__information__name">
									<div class="p-craftman__information__name__detail"><?php the_author_meta('last_name',$user_id); ?> <?php the_author_meta('first_name',$user_id); ?></div>
									<?php /* SNS */
									$group = SCF::get_user_meta($user_id,'sns');
									if(SCF::get_user_meta($user_id,'sns_type') !=""){
										echo '<div class="p-sns c-flex">' ;
									} ?>
									<?php foreach ((array)$group as $fields ) {
												if($fields['sns_type'] != "" && $fields['sns_url'] != ""){
													$my_sns = $fields['sns_type'];
													if($my_sns == 'Instagram'){ ?>
													<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="p-sns__button c-sns--insta" target="_blank" rel="noopener noreferrer">
														<i class="fab fa-instagram"></i>
														<span class="c-title__profile">Instagram</span>
													</a>
												<?php }
												elseif($my_sns == 'Facebook'){ ?>
													<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="p-sns__button c-sns--facebook" target="_blank" rel="noopener noreferrer">
														<i class="fab fa-facebook-f"></i>
														<span class="c-title__profile">Facebook</span>
													</a>
												<?php }
												elseif($my_sns == 'YouTube'){ ?>
													<a href="<?php echo esc_attr($fields['sns_url']) ?>" class="p-sns__button c-sns--youtube" target="_blank" rel="noopener noreferrer">
														<i class="fab fa-youtube"></i>
														<span class="c-title__profile">YouTube</span>
													</a>
											<?php }
										}
									}
									if(SCF::get_user_meta($user_id,'sns_type') !=""){
										echo '</div>' ;
									} ?>
								</dt>
							<!-- 経歴 -->
							<?php if(SCF::get_user_meta($user_id,'career') != ""){
								$group = SCF::get_user_meta($user_id,'career');
								$last_year = 0;
								foreach ((array)$group as $fields ) { ?>
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
					$group       = SCF::get_user_meta($user_id,'award');
					$have_ul_tag = false;
					foreach ((array)$group as $fields ) {
						if($fields['award_detail'] != ""){
							if(!$have_ul_tag){ ?>
								<ul class="c-bullet">
								<?php $have_ul_tag = true;
							} ?>
							<li class="c-bullet__item"><?php echo $fields['award_detail']; ?></li>
						<?php }
					}
					if($have_ul_tag){ ?>
						</ul>
						</div>
					<?php }
					//写真がある場合のみ閉じタグを出力する
					if(SCF::get_user_meta($user_id,'user_photo') != ""){
						echo '</article>';
					}
				} ?><!-- 職人データforeach -end- -->
			</article>
		</article>
		<!-- うるしときの職人表示ここまで -->
		<article class="c-wrapper">
			<?php get_template_part('/includes/archive-shop');?>
		</article>
	</main>
	<div class="c-background-icon__left--cloisonne">
	</div>
	<?php get_footer(); ?>
