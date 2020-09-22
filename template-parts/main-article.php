<a href="<?php the_permalink(); ?>" class="card single">
    <span class="post-meta-information">
    <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>
    |
    <?php echo meks_time_ago(); ?>
    </span> 
	<?php $thumb_id = get_post_thumbnail_id(get_the_ID()); $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); ?>
    <img class="post-image rectangle" src="<?php the_post_thumbnail_url('thumbnail'); ?>" <?php if ($alt): ?> alt="<?php echo $alt; ?>" <?php endif; ?> /> 
    <h3 class="title"><?php the_title(); ?></h3>
    <?php echo '<p class="excerpt">'. get_the_excerpt() .'</p>';?>
    <div class="post-meta"> 
        <div class="post-meta-section comments">
        </div>
    </div>
</a>