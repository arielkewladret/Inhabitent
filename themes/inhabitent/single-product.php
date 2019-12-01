<?php
/**
 * The template for displaying all product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="shop-items-grid">


		<?php while ( have_posts() ) : the_post(); ?>

		


						
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="left-col">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
				</div>
			

				<div class="right-col">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<h2>$ <?php the_field('number'); ?></h2>
					<?php the_content(); ?>
				</div>
			

				
			</article><!-- #post-## -->

	

			



		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
