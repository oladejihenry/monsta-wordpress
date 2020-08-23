<?php get_header(); ?>
<?php get_sidebar(); ?>  
<div class="content home  with-sidebars">
    <div class="just-homepage">
        <div class="section-header item-header desktop">
            <div class="title">
                <h2><?php echo get_bloginfo('name'); ?>
                    <span>Now</span>					
                </h2>
            </div>
        </div>
    </div>
    <div class="wire">
        <?php 
            if( have_posts() ){
                while( have_posts() ){
                    the_post();
                    get_template_part( 'template-parts/main', 'article' );
                }
            }
        ?>
        
        <div class="pagination">
        <?php posts_nav_link(' — ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
           
        </div>
    </div>
</div>
<?php get_footer(); ?>