<?php
/**
 * The template file for journals/home page. 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="page-title screen-reader-text image-overlay"><?php single_post_title(); ?></h2>


				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<!-- <?php the_posts_navigation(); ?> -->

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	<!-- get_comments_template( string $file = '/comments.php', bool $separate_comments = false ); ?> -->


		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
