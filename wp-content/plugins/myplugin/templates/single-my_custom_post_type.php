<?php 
/**
 * Template Name: Custom Post Type Template
 *
 * This is a custom template for displaying content from a custom post type.
 * Note: don't forget to add the comment section!!!
 */

<div class="main-container">

    </?php

    if( have_posts() )
        while( have_post() ): the_post(); ?>
            <p><?php the_content(); ?></p>
            <h3><?php the_title(); ?></h3>
            <hr>
        <?php endwhile;
    endif;
    ?>

    <!-- Comment Section -->
    <?php 
        if( comments_open() ){ 
            comments_template(); 
        } else {
            echo '<h5 class="text-center"> Sorry, comments is not available right now! </h5>';
        }
    ?>

</div>
