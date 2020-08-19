<?php get_header(); ?>
<?php get_sidebar(); ?>  
<div class="content with-sidebars">
    <?php 
        if( have_posts() ){
            while( have_posts() ){
                the_post();
                
                get_template_part( 'template-parts/content', 'article' );
            }
        }
    ?>
<?php get_footer(); ?>