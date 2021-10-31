<?php get_header(); ?>
<body>
	<!-- ヘッダーのフロントに表示 -->
	<?php get_template_part('/includes/header')?>
	<header>
	</header>
	<article class="documentClass">
    	<h1>Css Test</h1>
	</article>
	<article id="sampleId">
    	<h1>Js Test2</h1>
	</article>

	<!-- うるしときの職人表示 -->
	<?php $users = get_users(array('orderby'=>'ID','order'=>'ASC'));
	foreach($users as $user) {
		$user_id = $user->ID;?>
		<!-- 写真 -->
		<?php if(get_field('photo',"user_$user_id") != ""): ?>
			<?php
			$image = get_field('photo',"user_$user_id");
			$src = $image['url'];
			$width = $image['width'];
			$height = $image['height'];
			?>
			<img src="<?php echo $src; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo get_the_title(get_field('photo',"user_$user_id")) ?>" >
		<?php endif ?>

		<!-- 名前 -->
		<?php if(get_the_author_meta('last_name',$user_id) != "" and get_the_author_meta('first_name',$user_id) != ""): ?>
			<p><?php the_author_meta('last_name',$user_id); ?> <?php the_author_meta('first_name',$user_id); ?></p>
		<?php endif ?>

		<!-- SNS -->
		<!-- src画像パスへ書き換え必須 -->
		<?php if(get_the_author_meta('twitter_url',$user_id) != ""): ?>
			<p>
				<a href="<?php esc_attr(the_author_meta('twitter_url',$user_id)); ?>" target="_blank" rel="noopener noreferrer">
				<img src="twitter-icon" alt="twitter_url"></a>
			</p>
		<?php endif; ?>

		<?php if(get_the_author_meta('facebook_url',$user_id) != ""): ?>
			<p>
				<a href="<?php esc_attr(the_author_meta('facebook_url',$user_id)); ?>" target="_blank" rel="noopener noreferrer">
				<img src="facebook-icon" alt="facebook_url"></a>
			</p>
		<?php endif; ?>

		<?php if(get_the_author_meta('instagram_url',$user_id) != ""): ?>
			<p>
				<a href="<?php esc_attr(the_author_meta('instagram_url',$user_id)); ?>" target="_blank" rel="noopener noreferrer">
				<img src="instagram-icon" alt="instagram_url"></a>
			</p>
		<?php endif; ?>

		<?php if(get_the_author_meta('youtube_url',$user_id) != ""): ?>
			<p>
				<a href="<?php esc_attr(the_author_meta('youtube_url',$user_id)); ?>" target="_blank" rel="noopener noreferrer">
				<img src="youtube-icon" alt="youtube_url"></a>
			</p>
		<?php endif; ?>

		<!-- 経歴 -->
		<?php
		if (get_field('career',"user_$user_id") != ""):
			$table = get_field('career',"user_$user_id");
			if(!empty($table)) {
				echo '<table border="0">';
					if(!empty($table['caption'])) {
						echo '<caption>' . $table['caption'] . '</caption>';
					}
					if(!empty($table['header'])) {
						echo '<thead>';
							echo '<tr>';
								foreach ($table['header'] as $th) {
									echo '<th>';
										echo $th['c'];
									echo '</th>';
								}
							echo '</tr>';
						echo '</thead>';
					}
					echo '<tbody>';
						foreach($table['body'] as $tr) {
							echo '<tr>';
								foreach ($tr as $td) {
									echo '<td>';
										echo $td['c'];
									echo '</td>';
								}
							echo '</tr>';
						}
					echo '</tbody>';
				echo '</table>';
			}
		endif;
		?>

		<!-- 受賞 -->
		<?php if(get_the_author_meta('award',$user_id) != ""): ?>
			<ul>
				<?php
				$fieldData = explode("\n",get_the_author_meta('award',$user_id) );
				$i = 0;
				foreach ($fieldData as $value){
					if ( $value ){
					echo '<li>' . $value . '</li>';
					}
					$i++;
				}
				?>
			</ul>
		<?php endif;
	} ?>
	<!-- うるしときの職人表示ここまで -->

	<?php get_footer(); ?>
