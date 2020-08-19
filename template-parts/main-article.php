<a href="<?php the_permalink(); ?>" class="card single">
    <span class="post-meta-information">
    <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>
    |
    <?php echo meks_time_ago(); ?>
    </span> 
    <img class="post-image rectangle" src="<?php the_post_thumbnail_url('thumbnail'); ?>"> 
    <h3 class="title"><?php the_title(); ?></h3>
    <p class="excerpt"><?php the_excerpt(); ?></p>
    <div class="post-meta"> 
        <div class="post-meta-section comments">
        </div>
    </div>
</a>