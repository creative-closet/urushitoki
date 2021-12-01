<!-- index.phpを使うページ -->
<!--
グループ1：the_contentのみ
- うるしと生活 固定ページ
- うるしと楽器 固定ページ
- よくある質問 固定ページ
- お問い合わせ 固定ページ
- お問い合わせ確認 固定ページ
- お問い合わせ完了 固定ページ
- お問い合わせプライバシーポリシー 固定ページ

グループ2：the_contentとギャラリーパーツファイル
- アクセサリー 固定ページ
- 金継ぎ 固定ページ
- 工芸作品 固定
-->


<?php get_header(); ?>
<body>
	<!-- ヘッダー画像・タイトル -->
	<?php get_template_part('/includes/header')?>

	<!-- メインコンテンツ -->
	<main class="" id="">

		<!-- アーカイブ以外 -->
		<?php if (!(is_single())): ?>

			<!-- グループ1：the_contentのみ -->
			<div class="c-wrapper">
				<?php get_template_part('./includes/have-post-loop');?>
			</div>
			<!-- グループ2：the_contentとギャラリーパーツファイル -->
			<?php if(is_page('archive-accessory')) {?>
				<?php get_template_part('./includes/archive-accessory');?>
			<?php } ?>

			<?php if(is_page('kintsugi')) {?>
				<?php get_template_part('./includes/archive-post');?>
			<?php } ?>

			<?php if(is_page('craft-archive')) {?>
				<?php get_template_part('./includes/archive-craft');?>
			<?php } ?>

		<?php endif; ?>
	</main>

	<?php get_footer(); ?>
