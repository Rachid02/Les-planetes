<?php /* Template Name: Page Planetes */ ?>

<?php

get_header('planetes');

?>

	<main id="primary" class="site-main">		
		<article class="container">
			<?php
			if(has_post_thumbnail()) {
				the_post_thumbnail();
			}
			else {
				echo "<img src='".get_template_directory_uri()."/src/img/planete.jpg'>";
			?>			
				<br>
			<?php
				echo "Image indisponible ?";
			}
			?>
				<br>
			<?php
			$args = array(
				'post_per_page' => 4, /*Affiche max 4 articles par page */
				'post_status' => 'publish', /*qui est publié*/
				'orderby' => 'date'
			);
			$nbPosts = new WP_Query($args);
			$nbPosts = $nbPosts->posts;
			?>
			
			<div class="articleAside">
				<div class="articlesContainer">
				<?php
				foreach($nbPosts as $art): ?>
					<article class="articles">
						<div>
							<?= get_the_post_thumbnail($art->ID); ?>
						</div>
						<div class="divContainer">
							<time datetime="<?= $art->post_title; ?>">Publié le&nbsp;<?= get_the_time('j F Y'); ?></time>
							<h2><?= $art->post_title; ?></h2>
							<p><?= $art->post_content; ?></p>
						</div>
					</article>			
				<?php
				endforeach;
				?>
				</div>
				
				
			</div>	
			
		</article class="container">
	</main><!-- #main -->

<?php get_footer('planetes'); ?>