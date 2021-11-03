<?php get_header(); ?>
<body>
	<header>
		<?php get_template_part('includes/menu'); ?>
		<h1 class="test-header">テス</h1>
	</header>
	<article class="documentClass">
    	<h1>Css Test</h1>
	</article>
	<figure class="p-articleCard">
		<img class="p-articleCard__image" src="<?php echo get_template_directory_uri(); ?>/production/images/4ぐい吞み.jpg" alt="">
		<figcaption class="p-articleCard__title">漆への思い</figcaption>
	</figure>
	<article id="sampleId">
    	<h1>Js Test2</h1>
	</article>
	<?php get_footer(); ?>
