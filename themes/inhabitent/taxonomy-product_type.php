<?php
/**
 * The template for displaying archive-products pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="shop-container" role="main">


	<h1 class="entry-title-shop">Shop Stuff</h1>
	

		 <?php if ( have_posts() ) : ?> 		
			<h1 class="page-title"><?php single_term_title(); ?></h1>
			<div class="taxonomy-description">
				<?php the_archive_description(); ?>
			</div>
			<?php the_posts_navigation(); ?>

<main class="shop-container-grid small">

			<!-- // Product loop -->
		
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<a href="<?php esc_url( get_permalink() ); ?>" rel="bookmark">

				<header class="entry-header-shop">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="product-img-wrap">
							<?php the_post_thumbnail( 'large' ); ?>
						</div>
					<?php endif; ?>

					<div class="product-info">
						<h2 class="entry-shop-item"><?php the_title(); ?></h2>
						<div class="product-price">$<?php the_field('number'); ?></div>
					</div>
				</header><!-- .entry-header -->

			</a>
		</article><!-- #post-## -->

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php __('No product found'); ?></p>
		
		<?php endif; ?>
		<?php endif; ?>
		<!-- End loop -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
 