<!-- 仮 -->
<style>
	.c-flex{
		display:flex;
	}
	.c-flex--space-between{
		justify-content: space-between;
	}

	.tag_list{
		list-style-type:none;
		gap:10px;
	}
	.pager{
		/* text-align:center; */
	}
	.p-archive{
		padding-top: 39px;
		padding-bottom:39px;
	}
	.c-button--primary{
		margin-left: auto;
	}
</style>
<!-- 仮 -->

<?php get_header(); ?>
<body>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>

	<!-- 記述内容の表示 -->
	<!-- <?php get_template_part('/includes/have-post-loop');?> -->

	<!-- カスタム投稿アクセサリー ループ表示 -->
	<?php if (
		is_page('accessory-archive') || is_singular('accessory')) { ?>
		<?php get_template_part('/includes/archive-accessory');?>
	<?php } ?>

	<!-- Article ループ表示 -->
	<?php if (is_page('kintsugi') || is_archive()
	|| !(is_singular(array('accessory','craft','information'))) || is_single()) { ?>


	<!-- 個別投稿ページ ループ表示 -->
	<?php if (is_single()) { ?>
		<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
				<section class="c-wrapper">
					<h2 class="c-title-large"><?php the_title();?></h2>
					<p class="c-text"><?php the_time();?></p>
					<?php
						$tags = get_the_tags();
						if($tags):
							echo '<ul class="tag_list c-flex">';

							foreach($tags as $tag):
							$tag_name = $tag->name;
							$tag_link = get_tag_link($tag->term_id);

							echo '<li><a class="c-tab" href="'.$tag_link.'">'.$tag_name.'</a></li>';
							endforeach;

							echo '</ul>';
						endif;
					?>
					<?php the_content() ?>
					<div class="pager c-flex c-flex--space-between">
						<?php
						$linkPrevious = get_previous_post_link('%link',"%title");
						if ($linkPrevious){
							$linkPrevious = str_replace('<a','<a class="c-button--mix--before"',$linkPrevious);
							echo $linkPrevious;
						}
						$linkNext = get_next_post_link('%link','%title');
						if ($linkNext){
							$linkNext = str_replace('<a','<a class="c-button--mix--after"',$linkNext);
							echo $linkNext;
						}
						?>
					</div>
				</section>
			<?php endwhile; ?>
		<?php else: ?>
			投稿が無い時の処理を書く
		<?php endif; ?>
	<?php } ?>

	<!-- 投稿ミニアーカイブ -->
	<section class="p-archive c-wrapper">
		<h2 class="c-title-large">Article</h2>
		<?php get_template_part('/includes/archive-post'); ?>
		<a href="<?php echo home_url('/archive/'); ?>" class="c-button--primary" id="p-ripples--effect">
			<span class="c-button--primary--text">MORE</span>
			<span class="c-button--primary--line"></span>
		</a>
	</section>
	<?php } ?>


	<!-- カスタム投稿工芸作品 ループ表示 -->
	<?php if (is_page('gallery') || is_singular('craft')) { ?>
		<?php get_template_part('/includes/archive-craft'); ?>
	<?php } ?>

	<!-- カスタム投稿Information ループ表示 -->
	<?php if (is_page('information-archive') || is_singular('information')) { ?>
		<?php get_template_part('/includes/archive-information'); ?>
	<?php } ?>

	<?php get_footer(); ?>
