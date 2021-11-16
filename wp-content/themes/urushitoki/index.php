<?php get_header(); ?>
<body>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>
	<article class="documentClass">
    	<h1>Css Test</h1>
	</article>
	<article id="sampleId">
    	<h1>Js Test2</h1>
	</article>

	<?php if (is_front_page() && is_home()) { ?>
	<!-- ホームページ 最新の投稿 -->
	<h1>is_front_page() && is_home() Test</h1>


	<?php } elseif (is_front_page()) { ?>
	<!-- ホームページ 固定ペーシ -->
	<h1>is_front_page() Test</h1>


	<?php } elseif (is_home()) { ?>
	<!-- ブログ投稿インデックスページ -->
	<h1>is_home() Test</h1>


	<?php } elseif (is_page('accessory-archive')) { ?>
	<!-- カスタム投稿アクセサリー アーカイブページ -->
	<h1>is_page('accessory-archive') Test</h1>
	<?php get_template_part('/includes/archive-accessory');?>

	<?php } elseif (is_page('kintsugi')) { ?>
	<!-- 固定ページ 金継ぎ -->
	<h1>is_page('kintsugi') Test</h1>
	<?php get_template_part('/includes/archive-post'); ?>


	<?php } elseif (is_page(array('life' , 'musical'))) { ?>
	<!-- 固定ページ うるしと生活、うるしと楽器 -->
	<h1>is_page(array('life' , 'musical')) Test</h1>


	<?php } elseif (is_page('about')) { ?>
	<!-- 固定ページ About -->
	<h1>is_page('about') Test</h1>

	<?php
		//ユーザープロフィール設定読み出しテスト
		the_author_meta('twitter-name',1);
		echo nl2br(get_user_meta(1,'career', true));
	?>


	<?php } elseif (is_page('gallery')) { ?>
	<!-- 固定ページ ギャラリー （工芸作品アーカイブページ） -->
	<h1>is_page('gallery') Test</h1>
	<?php get_template_part('/includes/archive-craft'); ?>

	<?php } elseif (is_page('sns')) { ?>
	<!-- 固定ページ SNS -->
	<h1>is_page('sns') Test</h1>


	<?php } elseif (is_page('contact')) { ?>
	<!-- 固定ページ お問い合わせフォーム -->
	<h1>is_page('contact') Test</h1>
		<?php the_content(); ?>


	<?php } elseif (is_page('information-archive')) { ?>
	<!-- カスタム投稿Information アーカイブページ -->
	<h1>is_page('information-archive') Test</h1>
	<?php get_template_part('/includes/archive-infomation'); ?>

	<?php } elseif (is_page()) { ?>
	<!-- その他 固定ページ -->
	<h1>is_page() Test</h1>
	<?php the_content(); ?>


	<?php } elseif (is_singular('accessory')) { ?>
	<!-- カスタム投稿アクセサリー 詳細ページ -->
	<h1>is_singular('accessory') Test</h1>
	<?php get_template_part('/includes/archive-accessory'); ?>


	<?php } elseif (is_singular('craft')) { ?>
	<!-- カスタム投稿工芸作品 詳細ページ -->
	<h1>is_singular('craft') Test</h1>
	<?php get_template_part('/includes/archive-craft'); ?>


	<?php } elseif (is_singular('information')) { ?>
	<!-- カスタム投稿Information 詳細ページ -->
	<h1>is_singular('information') Test</h1>
	<?php get_template_part('/includes/archive-information'); ?>


	<?php } elseif (is_archive()) { ?>
	<!-- archiveページ -->
	<h1>is_archive() Test</h1>
	<?php get_template_part('/includes/archive-post'); ?>

	<?php } elseif (is_single()) { ?>
	<!-- 投稿 詳細ページ -->
	<h1>is_single() Test</h1>

	<?php get_template_part('/includes/archive-post'); ?>
	<?php the_content(); ?>



	<?php } elseif (is_404()) { ?>
	<!-- 404ページ -->
	<h1>is_404() Test</h1>

	<?php } else { ?>
	<!-- それ以外 -->

	<?php } ?>



	<?php get_footer(); ?>

