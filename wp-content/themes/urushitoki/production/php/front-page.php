<?php get_header(); ?>
<body>
	<header>
		<?php get_template_part('includes/menu'); ?>
		<h1 class="test-header">テス</h1>
	</header>
	<article class="documentClass">
    	<h1>Css Test</h1>
	</article>
	<article id="sampleId">
			<h1>Js Test2</h1>
	</article>
<dl class="p-shop-card">
	<dt class="p-shop-card__title">玉匣「たまくしげ」</dt>
	<dd class="p-shop-card__text">
		<p class="c-text">〒920-0831　石川県金沢市東山１丁目14番7号</p>
		<p class="c-text">東茶屋街に構えるセレクトショップ。漆アクセサリー、ぐい呑などの販売をしています。</p>
	</dd>
	<dd class="p-shop-card__link">
		<a class="c-title-noborder" href="http://www.tamakushige.com/">http://www.tamakushige.com/</a>
		<img src="<?php echo get_template_directory_uri(); ?>/production/images/125_arr_hoso_b.png" alt="">
	</dd>
	<dd class="p-shop-card__image">
		<img src="<?php echo get_template_directory_uri(); ?>/production/images/1玉匣.jpg" alt="">
	</dd>
</dl>

	<?php get_template_part('/includes/archive-information')?>
	<?php get_template_part('/includes/archive-post')?>

<?php get_footer(); ?>
