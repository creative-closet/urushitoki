<?php get_header(); ?>
<body>
	<!-- ヘッダー画像・タイトル -->
	<?php get_template_part('/includes/header')?>
	<!-- メインコンテンツ -->
	<main class="" id="">
		<!-- 記述内容の表示 -->
		<div class="c-wrapper">
		<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
				<h2 class="c-title-large"><?php the_title();?></h2>
				<p class="c-text"><?php the_time();?></p>
				<?php
				$tags = get_the_tags();
				if($tags){
					echo '<ul class="p-archive__tags c-flex">';
					foreach($tags as $tag):
						$tag_name = $tag->name;
						$tag_link = get_tag_link($tag->term_id);
						echo '<li><a class="c-tab" href="'.$tag_link.'">'.$tag_name.'</a></li>';
					endforeach;
						echo '</ul>';
				}
				?>
				<?php the_content() ?>
				<div class="p-pager c-flex c-flex--center">
					<?php
					$linkPrevious = get_previous_post_link('%link',"%title");
					if ($linkPrevious){
						$linkPrevious = str_replace('<a','<a class="p-pager__previous"',$linkPrevious);
						echo $linkPrevious;
					}
					$linkNext = get_next_post_link('%link','%title');
					if ($linkNext){
						$linkNext = str_replace('<a','<a class="p-pager__next"',$linkNext);
						echo $linkNext;
					}
					?>
				</div>
			<?php endwhile; ?>
		<?php else: ?>
			投稿が無い時の処理を書く
		<?php endif; ?>
		</div>
		<!-- 投稿用ミニアーカイブ -->
		<?php if (!(is_post_type_archive( array( 'information', 'craft', 'shop', 'accessory') ) )) :?>
			<?php get_template_part('./includes/archive-post');?>
			<a href="<?php echo home_url('/post_archive/'); ?>" class="c-button--primary" id="p-ripples--effect">
					<span class="c-button--primary--text">MORE</span>
					<span class="c-button--primary--line"></span>
			</a>
		<?php endif; ?>
	</main>

	<?php get_footer(); ?>
