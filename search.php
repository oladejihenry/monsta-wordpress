<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="content home  with-sidebars">
    <div class="just-homepage">
        <div class="section-header item-header desktop">
            <div class="title">
                <h2>Search 
                    <span>Result</span>					
                </h2>
            </div>
        </div>
    </div>
    <div class="wire">
        <?php 
            if( have_posts() ){
                while( have_posts() ){
                    the_post();
                    get_template_part( 'template-parts/content', 'search' );
                }
            }
        ?>
        
        
    </div>
    
</div>
<div class="pagination">
    <?php posts_nav_link(' — ', __('&laquo; Next'), __('Previous &raquo;')); ?>  
</div>

<?php get_footer(); ?>