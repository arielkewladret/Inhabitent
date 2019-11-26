<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

	<div id="primary" class="about-content-area">
		
		<main id="main" class="site-main" role="main">
		<?php the_title( '<h1 class="entry-title-about">', '</h1>' ); ?>
		<div class="fp-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="container">
				<?php get_template_part( 'template-parts/content', 'about' ); ?>
			</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>