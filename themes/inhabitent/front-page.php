<?php
/**
 * The template for displaying front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

					
		 
		<!-- <div class="fp-banner"> -->
		<!-- if client wants to customize -->
	
	

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="fp-banner" style="background: linear-gradient( to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.4) ), url('<?php the_post_thumbnail_url(); ?>') no-repeat center top; background-size: cover, cover; display: flex; align-items: center; justify-content: center;">
					<img class="fp-banner-logo" src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>"/>
				</div>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<!-- <?php
if(is_front_page()){  ?>
	
<?php }
if(is_page('About')){
    if ( has_post_thumbnail() ) {
         the_post_thumbnail();
        echo get_the_title();
    }
}
?> -->


<section>
	<div class="container">
	<h2> Shop Stuff</h2> 

	
   <!-- double check taxonomy name -->
   <!-- may be "taxonomy" -->
   <!-- for each loop not displaying -->
   <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
			//    print_r($terms);
			   if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>

			<div class="fp-terms">
				<?php foreach ($terms as $value) : setup_postdata($value); ?>
				<div class="fp-term">  
					<img alt="Product Icons" src=<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $value->slug . '.svg' ?>>
					<p><?php echo $value->description; ?></p>
					<a class="fp-term-link" href=<?php echo get_term_link($value) ?>><span><?php echo $value->name ?> stuff</span></a>
				</div>
				<?php endforeach;
				wp_reset_postdata(); ?>
			</div><!-- .fp-terms -->
		  <?php 
		endif; 
		?>  
	</div>
	</section>
	



<section> 
	<div class="container">

<h2> Inhabitent Journal </h2> 
<?php
$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
$journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php if( have_posts() ):?>

	<section class="fp-journal-entries-row">
	<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
		
		<article class="fp-journal-entry">

		    <div class="journal-entry-container">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('large');
				} 
				?>
			</div>

			<div class="fp-journal-info">
				<span class="fp-journal-info-date">
				<?php the_date('l, M Y'); ?>/<?php $comments = get_comments_number(); if ($comments) { echo $comments; } else { echo '0';} ?> Comments</span>
				<a class="fp-journal-info-title" href="<?php echo get_the_permalink(); ?>"><?php the_title();?></a>
				<a class="fp-journal-info-btn" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
			</div>
		
		</article>
	<?php endforeach; wp_reset_postdata(); ?>
	</section>
<?php endif; ?>


<section class="adventures-section"> 

<h2> Latest Adventures </h2> 

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

			<!-- //the title  -->

			<div class="fp-adventures-blog-tag">
				<a class="fp-adventures-blog" href="<?php echo get_the_permalink(); ?>">
					<?php the_title();?>
				</a>
		</div>

			<a class="fp-adventures-blog" href="<?php echo get_the_permalink(); ?>">Read More</a>
		
		</article>
	<?php endforeach; wp_reset_postdata(); ?>
	</section>
<?php endif; ?></section> 


		 <div class="adventure-button-container">
                        <button class="adventures-button-more">More Adventures</button>
                    </div> 
		 



<?php 
foreach ( $posts as $post ) : setup_postdata( $post ); 
?>
<?php 
the_title();
?>
<?php 

endforeach; wp_reset_postdata(); 
?>
<?php get_footer(); ?>