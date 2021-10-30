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

	<p><?php the_author_meta('first_name',1); ?> <?php the_author_meta('last_name',1); ?></p>
	<p><?php the_author_meta('twitter_name',1); ?></p>

	<!-- 経歴を表示 -->
	<?php
	$table = get_field( 'career','user_1' );
	if ( ! empty ( $table ) ) {
		echo '<table border="0">';
			if ( ! empty( $table['caption'] ) ) {
				echo '<caption>' . $table['caption'] . '</caption>';
			}
			if ( ! empty( $table['header'] ) ) {
				echo '<thead>';
					echo '<tr>';
						foreach ( $table['header'] as $th ) {
							echo '<th>';
								echo $th['c'];
							echo '</th>';
						}
					echo '</tr>';
				echo '</thead>';
			}
			echo '<tbody>';
				foreach ( $table['body'] as $tr ) {
					echo '<tr>';
						foreach ( $tr as $td ) {
							echo '<td>';
								echo $td['c'];
							echo '</td>';
						}
					echo '</tr>';
				}
			echo '</tbody>';
		echo '</table>';
	}
	?>

	<!-- 受賞をリスト表示 -->
	<ul>
		<?php
		$fieldData = explode("\n",get_the_author_meta('award',1) );
		$i = 0;
		foreach ($fieldData as $value){
			if ( $value ){
			echo '<li>' . $value . '</li>';
			}
			$i++;
		}
		?>
	</ul>

	<?php get_footer(); ?>
