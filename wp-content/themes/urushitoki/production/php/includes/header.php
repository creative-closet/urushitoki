<?php if (!(is_front_page(  ))):
	$img = urushitoki_get_header_image();
?>

<!-- フロントページ以外のヘッダーのパーツ -->
<!-- マークアップは仮です。 -->
<header class="masthead" style="background-image: url('<?php echo $img[0];?>')">

	<!-- （smart_custum_fieldの繰り返しを使用） -->
	<?php
    $title = SCF::get('title');
	foreach($title as $fields){
	?>
	<h1 class="c-title--header" title-english="
	<?php echo esc_attr($fields["titleEn"])?>">
	<?php the_title( );?>
	</h1>
	<p><?php echo $fields["titleDesc"]?></p>
	<?php } ?>
	<!-- （smart_custum_fieldの繰り返しを使用-ここまで-） -->
	<?php get_template_part('includes/menu'); ?>
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

