<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
if(is_front_page()){  ?>
	<div class="fp-banner">
		<!-- if client wants to customize -->
		<!-- <?php the_post_thumbnail(); ?> -->
		
		<img class="fp-banner-logo" src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>"/>
	</div>
<?php }
if(is_page('About')){
    if ( has_post_thumbnail() ) {
         the_post_thumbnail();
        echo get_the_title();
    }
}
?>


	<h2> Shop </h2> 



<h2> Inhabitent Journal </h2> 
<?php
$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
$journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php if( have_posts() ):?>

	<section class="fp-journal-entries">
	<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
		
		<article class="fp-journal-entry">

			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			} 
			?>

			<h2>
				<a href="<?php echo get_the_permalink(); ?>">
				<?php the_title();?></a>
			</h2>

			<a href="<?php echo get_the_permalink(); ?>">Read Entry</a>
		
		</article>
	<?php endforeach; wp_reset_postdata(); ?>
	</section>
<?php endif; ?>

<h2> Adventures </h2> 

<?php
$args = array( 'post_type' => 'adventures', 'order' => 'ASC', 'posts_per_page' => 4);
$adventures_posts = get_posts( $args ); // returns an array of posts
?>
<?php if( have_posts() ):?>

	<section class="fp-adventures">
	<?php foreach ( $adventures_posts as $post ) : setup_postdata( $post ); ?>
		
		<article class="fp-adventures-entry">

			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			} 
			?>

			<h2>
				<a href="<?php echo get_the_permalink(); ?>">
				<!-- <?php the_title();?></a> -->
			</h2>

			<a href="<?php echo get_the_permalink(); ?>">Read More</a>
		
		</article>
	<?php endforeach; wp_reset_postdata(); ?>
	</section>
<?php endif; ?>



<?php 
// foreach ( $posts as $post ) : setup_postdata( $post ); 
?>
<?php 
// the_title();
?>
<?php 
// endforeach; wp_reset_postdata(); 
?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>