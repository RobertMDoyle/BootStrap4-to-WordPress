<?php

    /*
    * The template for displaying all single posts
    */
?>

<!-- Header Section -->
<?php get_header() ?>


<!-- Start The Loop -->
<?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

    <?php the_content() ?>

<?php endwhile; else : ?>

<p><?php _e('Sorry, no pages matched your criteria'); ?></p>

<?php 
endif;
?>
<!-- End The Loop -->


<!-- Footer Section -->
<?php get_footer() ?>