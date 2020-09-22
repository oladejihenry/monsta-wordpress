<?php get_header(); ?>

<div class="feed">
    <div class="grid">
        <div class="card author">
            <div class="info">
                <img class="avatar" src="https://henryoladeji.xyz/wp-content/uploads/2020/09/PngItem_1468479.png" alt="Author Image">
                <h2><?php the_author(); ?></h2>
                <span><?php $author_id = get_the_author_meta('ID');
                    echo count_user_posts($author_id); ?> items
                </span>
            </div>
        </div>
        <?php if( have_posts() ){
                while( have_posts() ){
                    the_post();
                    get_template_part( 'template-parts/content', 'author' );
                }
            }
        ?>
       <div class="pagination">
            <?php posts_nav_link(' — ', __('&laquo; Next'), __('Previous &raquo;')); ?>  
    </div>
    </div>
</div>

<?php get_footer(); ?>