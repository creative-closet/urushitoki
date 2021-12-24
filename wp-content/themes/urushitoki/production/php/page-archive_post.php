<?php get_header(); ?>
	<!-- ヘッダー画像・タイトル -->
	<?php get_template_part('/includes/header')?>
	<!-- メインコンテンツ -->
	<main class="l-main" id="">
		<!-- 記述内容の表示 -->
		<article class="p-content c-wrapper">
			<?php get_template_part('./includes/have-post-loop');?>
			<?php get_template_part('./includes/archive-post');?>
		</article>
	</main>

	<?php get_footer(); ?>
