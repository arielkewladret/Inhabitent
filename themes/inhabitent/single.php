<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php endwhile; ?>


			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

<section class="journal-container">

<div id="secondary" class="widget-area">
	<?php get_sidebar(); ?>
</div> 

	<div class="journal-section">   

		<?php /* Start the Loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="journal-single-post">
			<?php get_template_part('template-parts/content', 'blog'); ?>

        <div class="social-media-button">
                            <button class="social-button"><i class="fab fa-facebook"></i>Like</button>
                            <button class="social-button"><i class="fab fa-twitter"></i>Tweet</button>
                            <button class="social-button"><i class="fab fa-pinterest"></i>Pin</button>
                        </div>
	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
