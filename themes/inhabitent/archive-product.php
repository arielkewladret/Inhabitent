<?php
/**
 * The template for displaying archive-products pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="shop-container" role="main">



		<div class="shop-name">
			<h1 class="shop-page-title">Shop Stuff</h1>
		</div>

		<?php if ( have_posts() ) : ?>


		<div class="taxonomies-navigation">
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
						<a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo $term->name; ?></a>
						</li>
					</ul>
				<?php }}} ?>
	</div>

	<?php endif; ?>

	

		<!-- <div class="products-container"> 
				<h1 class="page-title">Shop Stuff</h1> 
				<ul class="product-type-list">
				<li><p><a href="">Do</a></p>
				<li><p><a href="">Eat</a></p>
				<li><p><a href="">Sleep</a></p>
				<li><p><a href="">Wear</a></p></ul> 
		</div>   -->
</section>

<main class="shop-container-grid">

		<?php if ( have_posts() ) : ?>

			<!-- <header class="page-header"> -->
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

          


		
		<?php 
		// Product loop
		$shop_loop = new WP_Query( array(
			'post_type' => 'product',
			'order' => 'DESC',
			'posts_per_page' => 20,
		)); 
		?>

		<?php if ( $shop_loop->have_posts() ) : ?>
		<?php while ( $shop_loop->have_posts() ) : $shop_loop->the_post(); ?>
			
			<?php get_template_part( 'template-parts/content' ); ?>

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

