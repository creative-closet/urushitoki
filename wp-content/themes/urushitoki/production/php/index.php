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

グループ3：投稿内容とアーカイブ
- カスタム投稿アーカイブ
- カスタム投稿詳細ページ
- 投稿アーカイブ
- 投稿詳細ページ
-->


<?php get_header(); ?>
	<!-- ヘッダー画像・タイトル -->
	<?php get_template_part('/includes/header')?>

	<!-- メインコンテンツ -->
	<main class="l-main" id="">
		<article class="c-wrapper">

			<!-- 個別投稿とアーカイブ以外 -->
			<?php if (!(is_single()||is_tag())): ?>
				<!-- グループ1：the_contentのみ -->
				<div><!-- c-wrapperはエディタ内で必要なブロックにのみ追加CSSで付加 -->
					<?php get_template_part('./includes/have-post-loop');?>
				</div>
				<!-- グループ2：the_contentとギャラリーパーツファイル -->
				<?php if(is_page('archive_accessory')) {?>
					<article class="p-content c-wrapper">
						<?php get_template_part('./includes/archive-accessory');?>
					</article>
				<?php } ?>

				<?php if(is_page('kintsugi')) {?>
					<article class="p-content c-wrapper">
						<?php get_template_part('./includes/archive-post');?>
					</article>
				<?php } ?>

				<?php if(is_page('archive_craft')) {?>
					<article class="p-content c-wrapper">
						<?php get_template_part('./includes/archive-craft');?>
					</article>
				<?php } ?>

			<?php endif; ?>

			<!-- グループ3：投稿詳細とギャラリーパーツファイルor投稿詳細のみ -->
			<?php if (is_single()){ ?>
				<?php get_template_part('./includes/post');?>
			<?php } ?>

			<?php if (is_tag()){ ?>
				<article class="p-content c-wrapper">
					<?php get_template_part('./includes/archive-post');?>
				</article>
			<?php } ?>

		</article>
	</main>

	<?php get_footer(); ?>
