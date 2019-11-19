<?php
/**
 * Template part for displaying products.
 *
 * @package RED_Starter_Theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php echo get_post_permalink(); ?>">
            <?php the_post_thumbnail('shop'); ?>

    </a>
        <?php endif; ?>

        <div class="product-price-info">
            <p><?php echo get_the_title(); ?> ...
            <?php the_field( 'price' ); ?></p>
        </div> 

    </div><!-- .entry div -->
        </div><!-- #post-## -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
