<?php get_header(); ?>
<body>
	<header>
		<h1 class="test-header">テスト</h1>
	</header>
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


	<?php } elseif (is_page('accessory')) { ?>
	<!-- カスタム投稿アクセサリー アーカイブページ -->
	<h1>is_page('accessory') Test</h1>


	<?php } elseif (is_page('kintsugi')) { ?>
	<!-- 固定ページ 金継ぎ -->
	<h1>is_page('kintsugi') Test</h1>


	<?php } elseif (is_page(array('life' , 'musical'))) { ?>
	<!-- 固定ページ うるしと生活、うるしと楽器 -->
	<h1>is_page(array('life' , 'musical')) Test</h1>


	<?php } elseif (is_page('about')) { ?>
	<!-- 固定ページ About -->
	<h1>is_page('about') Test</h1>


	<?php } elseif (is_page('gallery')) { ?>
	<!-- カスタム投稿ギャラリー アーカイブページ -->
	<h1>is_page('gallery') Test</h1>


	<?php } elseif (is_page('sns')) { ?>
	<!-- 固定ページ SNS -->
	<h1>is_page('sns') Test</h1>


	<?php } elseif (is_page('contact')) { ?>
	<!-- 固定ページ お問い合わせフォーム -->
	<h1>is_page('contact') Test</h1>


	<?php } elseif (is_page('information')) { ?>
	<!-- カスタム投稿Information アーカイブページ -->
	<h1>is_page('information') Test</h1>


	<?php } elseif (is_page()) { ?>
	<!-- その他 固定ページ -->
	<h1>is_page() Test</h1>


	<?php } elseif (is_singular('accessory')) { ?>
	<!-- カスタム投稿アクセサリー 詳細ページ -->
	<h1>is_singular('accessory') Test</h1>


	<?php } elseif (is_singular('gallery')) { ?>
	<!-- カスタム投稿ギャラリー 詳細ページ -->
	<h1>is_singular('gallery') Test</h1>


	<?php } elseif (is_singular('information')) { ?>
	<!-- カスタム投稿Information 詳細ページ -->
	<h1>is_singular('information') Test</h1>


	<?php } elseif (is_archive()) { ?>
	<!-- archiveページ -->
	<h1>is_archive() Test</h1>

	<?php } elseif (is_single()) { ?>
	<!-- 投稿 詳細ページ -->
	<h1>is_single() Test</h1>


	<?php } elseif (is_404()) { ?>
	<!-- 404ページ -->
	<h1>is_404() Test</h1>

	<?php } else { ?>
	<!-- それ以外 -->

	<?php } ?>





	<?php get_footer(); ?>
