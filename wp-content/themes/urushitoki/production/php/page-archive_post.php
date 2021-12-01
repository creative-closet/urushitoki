<?php get_header(); ?>
<body>
	<!-- ヘッダー画像・タイトル -->
	<?php get_template_part('/includes/header')?>
	<!-- メインコンテンツ -->
	<main class="" id="">
		<!-- 記述内容の表示 -->
		<div class="c-wrapper">
			<?php get_template_part('./includes/have-post-loop');?>
		</div>
		<?php get_template_part('./includes/archive-post');?>
	</main>

	<?php get_footer(); ?>
