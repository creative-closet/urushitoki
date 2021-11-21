<?php if (!(is_front_page(  ))):
	$titleEn = get_post_meta( get_the_ID(), 'title_english', true );
	$titleDesc = get_post_meta( get_the_ID(), 'title_description', true );
	$img = get_eyecatch_default();
?>
<!-- フロントページ以外のヘッダーのパーツ -->
<!-- マークアップは仮です。 -->
<header class="masthead" style="background-image: url('<?php echo $img[0];?>')">
	<?php get_template_part('includes/menu'); ?>
	<h1 class="c-title--header" title-english="
	<?php if($titleEn):?>
		<?php echo esc_attr($titleEn)?>">
	<?php else:?>
		ページタイトルの英訳が入ります">
	<?php endif;?>
	<?php the_title( );?>
	</h1>
	<p>
	<?php if($titleDesc):?>
		<?php echo $titleDesc?>
	<?php else:?>
		ページの説明文が入ります
	<?php endif;?>
	</p>
</header>
<!-- フロントページのヘッダーのパーツ -->
<?php else:?>
	<h1>こちらはフロントページのヘッダー</h1>
<?php endif;?>
