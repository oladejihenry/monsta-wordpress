<div class="sidebars desktop">
    <div class="desktop side-ad">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Ads 2 -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:300px;height:600px"
            data-ad-client="ca-pub-8897835908934169"
            data-ad-slot="3619596871"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <div class="sidebar tracks">
        <div class="section-header item-header desktop">
            <div class="title">
                <h1>Hip Hop
                    <span>Singles</span>
                </h1>
            </div>
        </div>
        <ul>
            <?php
$post_by_category = new WP_Query( 'cat=4&posts_per_page=8' );
if ($post_by_category->have_posts()) :
?>
<?php
    while ($post_by_category->have_posts()) :
        $post_by_category->the_post();
        ?>
        <li>
                <a href="<?php the_permalink() ?>">
                <div><i class="fa fa-headphones"></i></div>
                <div><?php the_title(); ?></div>
                </a>
            </li>
<?php
endwhile;
endif; 
?>
        </ul>
        <a href="/category/music" class="uni-link">
            More Singles &nbsp;
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    <br>
    <div class="sidebar videos">
        <div class="section-header item-header desktop">
            <div class="title">
                <h1>Hip Hop
                    <span>Videos</span>
                </h1>
            </div>
        </div>
        <table>
            <tbody>
            <?php
$post_by_category = new WP_Query( 'cat=7&posts_per_page=8' );
if ($post_by_category->have_posts()) :
?>
<?php
    while ($post_by_category->have_posts()) :
        $post_by_category->the_post();
        ?>
        <tr>
            <td><a href="<?php the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>"" width="75" height="75">  
            </a></td>
            <td>
                <p class="title">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </p>
                <?php echo '<p class="excerpt">'. get_the_excerpt() .'</p>';?>
            </td>
            
        </tr>
<?php
endwhile;
endif; 
?>
                
            </tbody>
        </table>
        <a href="/category/video" class="uni-link">
            More Videos &nbsp;
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    <br>
    <div class="desktop side-ad">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Ads Resp 1 -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-8897835908934169"
            data-ad-slot="2316934125"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    </div>