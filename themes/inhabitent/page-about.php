<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

 get_header('about'); ?>

	<div id="primary" class="about-content-area">
		
		<main id="main" class="site-main-about" role="main">
		
		<div class="fp-banner" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;">
			<?php the_title( '<h1 class="entry-title-about">', '</h1>' ); ?>
		</div>

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-container">
				<?php get_template_part( 'template-parts/content', 'about' ); ?>
			</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

