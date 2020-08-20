<div class="card post start">
    <a class="post-image" href="<?php the_permalink(); ?>">
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
    </a>
    <div class="item-info">
        <span class="post-type"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
        <p class="title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </p>
        <?php echo '<p class="excerpt">'. get_the_excerpt() .'</p>';?>
    </div>
    <div class="item-meta">
        <div class="timestamp">
            <i class="far fa-clock"></i>
            <span><?php echo meks_time_ago(); ?></span>
        </div>
    </div>
</div>