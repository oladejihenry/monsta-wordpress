<div id="article-header" class="article-header">
        <div class="title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="date"> Published on: <?php the_date('M d, Y, h:i A'); ?> | <?php echo get_the_category_list(', ') ?> </div>
        <div class="author">
            by <?php echo the_author_posts_link(); ?> 
        </div>
        <div class="image large">
            <img src="<?php the_post_thumbnail_url('large-size'); ?>">
        </div>
        <div class="article-advertisement  article-body article-editorials">
            <div class="body-copy first-letter-dropcap js-entry-text">
                <p><?php 
                        $content = get_the_content();
                        $content = preg_replace("/<img[^>]+\>/i", " ", $content);          
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]>', $content);
                        echo $content;
                    ?></p>
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
            <div class="section-header item-header desktop">
            <div class="title">
                    <h2>More
                        <span>Related Posts</span>
                        on MonstaJams
                        <span></span>
                    </h2>
                </div>
            </div>
            <div class="story">
                <a href="{{ route('posts.show',$relate->slug) }}"><img src="https://static.hiphopdx.com/2020/08/200813-CJ-Wallace-150x150.jpg" alt="">
                </a>
                <p class="title"><a href="{{ route('posts.show',$relate->slug) }}">Eminem - Rap God</a></p>
            </div>
        </div>
    </div>
    <div class="mobile">
        <div class="related-items">
            <h3 class="trending-news-title">
                Related
                <span>Posts</span>
            </h3>
            <div class="trending-news-wrapper">
                <div class="trending">
                    <div class="trending-image">
                        <a href="{{ route('posts.show',$relate->slug) }}">
                            <img src="https://static.hiphopdx.com/2020/08/200813-CJ-Wallace-150x150.jpg" alt="">
                        </a>
                    </div>
                    <div class="trending-title">
                        <a href="{{ route('posts.show',$relate->slug) }}">Eminem - Rap God</a>
                    </div>
                    <div class="meta-container">
                        <div class="inner-meta">
                            <a href="{{ route('posts.show',$relate->slug) }}" class="listing-meta">
                                <i class="fa fa-clock-o"></i>
                                <span>2 mins ago</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
        this.page.url = '{{Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = 1; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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