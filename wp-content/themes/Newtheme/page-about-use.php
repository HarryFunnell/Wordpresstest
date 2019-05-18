<?php
/*
Template Name: Blank2 Page
*/
?>
<?php get_header();?>

<div class="container">
    <?php 
    if( have_posts() ):
        while( have_posts() ): the_post(); 
        
    endwhile; else:
    ?>
    <?php endif; ?>
    <h1 class="entry-title"> <?php the_title(); ?> </h1>
    <?php the_content(); ?> 
    <h3> HELLO HARRY </h3>
</div>
<?php get_footer();?>