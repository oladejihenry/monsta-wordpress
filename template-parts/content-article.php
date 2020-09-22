<div id="article-header" class="article-header">
        <div class="title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="date"> Published on: <?php the_date('M d, Y, h:i A'); ?> | <?php echo get_the_category_list(', ') ?> </div>
        <div class="author">
            By <?php echo the_author_posts_link(); ?> 
        </div>
        <div class="image large">
			<?php $thumb_id = get_post_thumbnail_id(get_the_ID()); $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); if(count($alt)) ?>
            <img src="<?php the_post_thumbnail_url('large-size'); ?>" alt="<?php echo $alt; ?>">
        </div>
        <div class="article-advertisement  article-body article-editorials">
            <div class="body-copy first-letter-dropcap js-entry-text">
                <?php 
                        $content = get_the_content();
                        $content = preg_replace("/<img[^>]+\>/i", " ", $content);          
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]>', $content);
                        echo $content;
                    ?>
            </div>
        </div>
        <center><a href="https://chat.whatsapp.com/CTzBwGJE11O8A8TWC1cSnZ" style="color:#dc3d31;"><strong>Join Our Whatsapp Group (Stay Up To Date)</strong></a></center>
        <br>
        <div class="tag-inner tags">  
        <i class="fa fa-tags" aria-hidden="true"></i> <span class="tag-label"> </span> <?php the_tags() ?>
        </div>
        
    </div>
    <br>
    <div class="desktop">
        <div class="box-list small desktop">	
            
            
       
            <?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 4, // Number of related posts that will be shown.
'ignore_sticky_posts'=>1
);

$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '
<div class="section-header item-header desktop">
<div class="title">
<h2>More
    <span>Related Posts</span>
    on MonstaJams
    <span></span>
</h2>
</div>
</div>';
while( $my_query->have_posts() ) {
$my_query->the_post();?>

<div class="story">
	<?php $thumb_id = get_post_thumbnail_id(get_the_ID()); $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); if(count($alt)) ?>
                <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('singlepost-thumb'); ?>" alt="<?php echo $alt; ?>">
                </a>
                <p class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
            </div>
<?php
}
echo '';
}
}
$post = $orig_post;
wp_reset_query(); ?>
            
        </div>
    </div>
    <div class="mobile">
        <div class="related-items">
        <?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 4, // Number of related posts that will be shown.
'ignore_sticky_posts'=>1
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '
<h3 class="trending-news-title">
    Related
    <span>Posts</span>
</h3>';
while( $my_query->have_posts() ) {
$my_query->the_post();?>
<div class="trending-news-wrapper">
	<?php $thumb_id = get_post_thumbnail_id(get_the_ID()); $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); if(count($alt)) ?>
                <div class="trending">
                    <div class="trending-image">
                        <a href="<?php the_permalink() ?>">
                            <img src="<?php the_post_thumbnail_url('sidemore-thumb'); ?>" alt="<?php echo $alt; ?>">
                        </a>
                    </div>
                    <div class="trending-title">
                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="meta-container">
                        <div class="inner-meta">
                            <a href="<?php the_permalink() ?>" class="listing-meta">
                                <i class="fa fa-clock-o"></i>
                                <span><?php echo meks_time_ago(); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<?php
}
echo '';
}
}
$post = $orig_post;
wp_reset_query(); ?>
            
            
        </div>
    </div>
</div>
<div class="community">
    <div class="comments-widget">
        <div class="heading">
            <h2>
                MonstaJamss
                <span>Community</span>
            </h2>
        </div>
        <div id="disqus_thread"></div>
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

        var disqus_config = function () {
        this.page.url = '<?php echo get_permalink(); ?>';  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = '<?php echo get_permalink(); ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://monstajamss.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
    </div>
</div>