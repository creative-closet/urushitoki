<!-- 仮 -->
<style>
	.c-flex{
		display:flex;
	}
	.c-flex--center{
		justify-content: center;
		gap:50px;
	}
	.c-flex--wrap{
		flex-wrap: wrap;
	}

	.tag_list{
		list-style-type:none;
		gap:10px;
	}
	.pager{
		/* text-align:center; */
	}
	.p-archive{
		padding-top: 39px;
		padding-bottom:39px;
	}
	.c-button--primary{
		margin-left: auto;
	}
	.previous{
	text-decoration: none;
	color:black;
	}

	.next{
	text-decoration: none;
	color:black;
	}

	.previous:before{
	content:"<";
	display:inline-block;
	border:solid 1px;
	border-radius:50%;
	width:25px;
	height:25px;
	background-color:#FFF;
	text-align:center;
	line-height:25px;



	}
	.previous:hover:before{
	background-color:yellow;
	}

	.next:after{
	content:">";
	display:inline-block;
	border:solid 1px;
	border-radius:50%;
	width:25px;
	height:25px;
	background-color:#FFF;
	text-align:center;
	line-height:25px;

	}
	.next:hover:after{
	background-color:yellow;
}
</style>
<!-- 仮 -->

<?php get_header(); ?>
<body>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>

	<!-- 記述内容の表示 -->
	<?php //get_template_part('/includes/have-post-loop');?>

	<!-- カスタム投稿アクセサリー ループ表示 -->
	<?php if (is_page('accessory-archive') || is_singular('accessory')) { ?>
	<?php } ?>

	<!-- カスタム投稿アクセサリーアーカイブ ループ表示 -->
	<?php if (is_page('accessory-archive')){ ?>
		<section class="c-wrapper">
			<?php get_template_part('/includes/archive-accessory');?>
		</section>
	<?php } ?>

	<!-- Article ループ表示 -->
	<?php if (is_page('kintsugi') || is_archive()
	|| !(is_singular(array('accessory','craft','information'))) || is_single()) { ?>
	<?php } ?>

	<!-- 投稿アーカイブ -->
	<?php if(is_page('article-archive')){ ?>
		<section class="c-wrapper">
			<?php get_template_part('/includes/have-post-loop'); ?>
		</section>
		<section class="c-wrapper">
			<?php get_template_part('/includes/archive-post'); ?>
		</section>
	<?php } ?>

	<!-- 投稿 タグアーカイブ -->
	<?php if(is_archive()){ ?>
		<section class="c-wrapper">
			<?php get_template_part('/includes/archive-post'); ?>
		</section>
	<?php } ?>


		<!-- 投稿・カスタム投稿詳細ページ ループ表示 -->
	<?php if (is_single()){ ?>
		<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
				<section class="c-wrapper">
					<h2 class="c-title-large"><?php the_title();?></h2>
					<p class="c-text"><?php the_time();?></p>
					<?php
					$tags = get_the_tags();
					if($tags){
						echo '<ul class="tag_list c-flex">';
						foreach($tags as $tag):
							$tag_name = $tag->name;
							$tag_link = get_tag_link($tag->term_id);
							echo '<li><a class="c-tab" href="'.$tag_link.'">'.$tag_name.'</a></li>';
						endforeach;
							echo '</ul>';
					}
					?>
					<?php the_content() ?>
					<div class="pager c-flex c-flex--center">
						<?php
						$linkPrevious = get_previous_post_link('%link',"%title");
						if ($linkPrevious){
							$linkPrevious = str_replace('<a','<a class="previous"',$linkPrevious);
							echo $linkPrevious;
						}
						$linkNext = get_next_post_link('%link','%title');
						if ($linkNext){
							$linkNext = str_replace('<a','<a class="next"',$linkNext);
							echo $linkNext;
						}
						?>
					</div>
				</section>
			<?php endwhile; ?>
		<?php else: ?>
			投稿が無い時の処理を書く
		<?php endif; ?>
		<!-- 投稿用ミニアーカイブ -->
		<?php if (!(is_singular(array('accessory','craft','information')))) { ?>
			<section class="p-archive c-wrapper">
				<h2 class="c-title-large">Article</h2>
				<?php get_template_part('/includes/archive-post'); ?>
				<a href="<?php echo home_url('/article-archive/'); ?>" class="c-button--primary" id="p-ripples--effect">
					<span class="c-button--primary--text">MORE</span>
					<span class="c-button--primary--line"></span>
				</a>
			</section>
		<?php } ?>
	<?php } ?>

	<!-- カスタム投稿工芸作品 ループ表示 -->
	<?php if (is_page('gallery') || is_singular('craft')) { ?>
		<?php get_template_part('/includes/archive-craft'); ?>
	<?php } ?>

	<!-- カスタム投稿Information ループ表示 -->
	<?php if (is_page('information-archive') || is_singular('information')) { ?>

	<?php } ?>

	<!-- カスタム投稿Information ループ表示 -->
	<?php if (is_page('information-archive') || is_front_page()) { ?>
		<?php get_template_part('/includes/archive-information'); ?>
	<?php } ?>

	<?php get_footer(); ?>
