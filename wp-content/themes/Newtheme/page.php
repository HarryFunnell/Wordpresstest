<?php
/*
Template Name: Blank Page
*/
?>
<?php get_header();?>

<div class="container">
    <?php 
    if( have_posts() ):
        while( have_posts() ): the_post(); 
        
        the_content();
    endwhile; else:
    ?>
    <?php endif; ?>

    
</div>
<?php get_footer();?>