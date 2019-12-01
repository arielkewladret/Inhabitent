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


		<div class="taxonomies-navigation-list">
		<?php 
			$args = array(
				'public'   => true,
  				'_builtin' => false,
			);
			$output = 'names';
			$link = 'and';
			$tax = get_taxonomies($args, $output, $link); 
			if  ($tax) {
  				foreach ($tax as $taxonomy ) {
    			$terms = get_terms($taxonomy);
				foreach ( $terms as $term) { ?>
				
				 <ul>
						<li> 
						<a class="taxonomies-navigation" href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo $term->name; ?></a>
						</li>
					</ul>
				<?php }}} ?>
	</div>

	<?php endif; ?>

	

</section> 

<main class="shop-container-grid">

		<?php if ( have_posts() ) : ?>

			<!-- // Product loop -->
			
		
		<?php 
		$shop_loop = new WP_Query( array(
			'post_type' => 'product',
			'order' => 'DESC',
			'posts_per_page' => 20,
		)); 
		?>

		<?php if ( $shop_loop->have_posts() ) : ?>
		<?php while ( $shop_loop->have_posts() ) : $shop_loop->the_post(); ?>
			
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header-shop">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="product-img-wrap">
						<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>

				<div class="product-info">
					<?php the_title( sprintf( '<h2 class="entry-title-shop"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<div class="product-price">$<?php the_field('number'); ?></div>
				</div>
			</header><!-- .entry-header -->
		</article><!-- #post-## -->

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php __('No product found'); ?></p>
		<?php endif; ?>
		<!-- End loop -->

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
 
