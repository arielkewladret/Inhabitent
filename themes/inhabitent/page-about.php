<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php the_title(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page-about' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
   $args = array( 'post_type' => 'product', 'order' => 'ASC' );
   $product_posts = get_posts( $args ); // returns an array of posts
?>
<?php if(count($product_posts)> 0):?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); ?>
<?php else:?> 
<?php endif; ?>

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>