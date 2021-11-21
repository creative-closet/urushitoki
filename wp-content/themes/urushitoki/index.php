<?php get_header(); ?>
<body>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>

	<!-- 記述内容の表示 -->
	<?php get_template_part('/includes/have-post-loop');?>

	<!-- カスタム投稿アクセサリー ループ表示 -->
	<?php if (
		is_page('accessory-archive') || is_singular('accessory')) { ?>
		<?php get_template_part('/includes/archive-accessory');?>
	<?php } ?>

	<!-- Article ループ表示 -->
	<?php if (is_page('kintsugi') || is_single() || is_archive()) { ?>
		<?php get_template_part('/includes/archive-post'); ?>
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
