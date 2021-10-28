<?php if (!(is_front_page(  ))):
	$titleEn = get_post_meta( get_the_ID(), 'title_english', true );
	$titleDesc = get_post_meta( get_the_ID(), 'title_description', true );
	$img = get_eyecatch_default();
?>
<!-- フロントページ以外のヘッダーのパーツ -->
<!-- マークアップは仮です。 -->
<header class="masthead" style="background-image: url('<?php echo $img[0];?>')">
	<h1 class="c-title--header" title-english="<?php echo esc_attr($titleEn)?>"> <?php the_title( );?></h1>
	<p><?php echo $titleDesc?></p>
</header>
<!-- フロントページのヘッダーのパーツ -->
<?php else:?>
	<h1>こちらはフロントページのヘッダー</h1>
<?php endif;?>
