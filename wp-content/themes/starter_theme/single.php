<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
?>

<div class="wrapper" id="single-wrapper">

	<main class="site-main" tabindex="-1">
	
		<div class="container">

			<div class="row">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>
						

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						
						get_template_part( 'loop-templates/content', 'single' );
						?>
						
							<?php understrap_post_nav(); ?>

							<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</div>

		</div>

	</main><!-- #main -->

</div>

<?php get_footer(); ?>
