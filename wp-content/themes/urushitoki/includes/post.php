<!-- 記述内容の表示 -->
<article class="p-content">
	<article class="p-post">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>
			<h2 class="p-post__title c-title-large u-margin-bottom "><?php the_title();?></h2>
			<div class="p-post__tags c-flex c-flex--align-center c-flex--wrap u-margin-bottom u-gap--20">
				<p class="c-text--large"><?php the_time('Y.m.d');?></p>
				<?php
				$tags = get_the_tags();
				if($tags){
					echo '<ul class="p-archive__tags c-flex c-flex--wrap">';
					foreach($tags as $tag):
						$tag_name = $tag->name;
						$tag_link = get_tag_link($tag->term_id);
						echo '<li><a class="c-tab" href="'.$tag_link.'">'.$tag_name.'</a></li>';
					endforeach;
						echo '</ul>';
				}
				?>
			</div>
			<?php if (is_single()){
				echo the_content();
			}
			?>
			<!-- ページネーション　前後ページリンク -->
			<div class="p-pager c-flex c-flex--center u-margin-top--large u-margin-bottom--medium">
				<?php
				$linkNext = get_next_post_link('%link','%title');
				if ($linkNext){
					// $linkNext = str_replace('<a','<a class="p-pager__next"',$linkNext);
					// echo $linkNext;
					$linkNext = str_replace('<a','<a class="p-pager__next"',$linkNext);
					$linkNext = str_replace('"next">','"next"><span>',$linkNext);
					$linkNext = str_replace('</a>','</span></a>',$linkNext);
					echo $linkNext;
				}
				$linkPrevious = get_previous_post_link('%link','%title');
				if ($linkPrevious){
					// $linkPrevious = str_replace('<a','<a class="p-pager__previous"',$linkPrevious);
					// echo $linkPrevious;
					$linkPrevious = str_replace('<a','<a class="p-pager__previous"',$linkPrevious);
					$linkPrevious = str_replace('"prev">','"prev"><span>',$linkPrevious);
					$linkPrevious = str_replace('</a>','</span></a>',$linkPrevious);
					echo $linkPrevious;
				}
				?>
			</div>
		<?php endwhile; ?>
	<?php else: ?>
		投稿が無い時の処理を書く
	<?php endif; ?>
	</article>

	<!-- 投稿用ミニアーカイブ -->
	<?php if (!(is_singular( array( 'information', 'craft', 'shop', 'accessory')))) :?>
		<?php get_template_part('./includes/archive-post');?>
	<?php endif; ?>


</article>
