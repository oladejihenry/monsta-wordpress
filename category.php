<?php get_header();?>
<?php get_sidebar(); ?> 
<div class="content home  with-sidebars">
    <div class="just-homepage"> 
        <div class="section-header item-header desktop">
            <div class="title">
                <h2>MonstaJamss
                    <span>MUSIC</span>					
                </h2>
            </div>
        </div>
    </div>
    <div class="wire">
        <?php 
            if( have_posts() ){
                while( have_posts() ){
                    the_post();
                    get_template_part( 'template-parts/content', 'category' );
                }
            }
        ?>
    </div>
    <div class="pagination">
        <!-- {{-- Previous Page Link --}} -->
            <a href="{{ $paginator->previousPageUrl() }}" class="prev">
            <i class="fa fa-angle-left"></i>
            Prev
            </a>
        <!-- {{-- Next Page Link --}} -->
            <a href="{{ $paginator->nextPageUrl() }}" class="next">Next
            <i class="fa fa-angle-right"></i>
            </a>
    </div>
</div>
<?php get_footer(); ?>