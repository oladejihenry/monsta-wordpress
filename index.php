<?php get_header(); ?>
<?php get_sidebar(); ?>  
<div class="content home  with-sidebars">
    <div class="just-homepage">
        <div id="newsbox" class="desktop">
            <div class="section-header item-header desktop">
                <div class="title">
                    <h2>News:
                        <span>Today's Headline</span>
                    </h2>
                </div>
            </div> 
            <div class="newscol right">
                <ul class="list">
                    <li><a href="{{ route('posts.show',$post->slug) }}">Eminem - Rap God</a></li>
                </ul>
            </div>
            <div class="newscol">
                <ul class="list">
                    <li><a href="{{ route('posts.show',$post->slug) }}">50 Cent - In Da Club</a></li>
                </ul>
            </div>
            <div class="clear"></div>
            <a href="/category/news" class="uni-link">
                More News Stories &nbsp;
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        <div class="box-list small desktop">
            <div class="section-header item-header desktop">
                <div class="title">
                    <h2>MonstaJams
                        <span>Exclusives</span>
                    </h2>
                </div>
            </div>
            <div class="story">
                <a href="{{ route('posts.show',$post->slug) }}">
                    <img src="https://static.hiphopdx.com/2020/07/200726-Eric-B-Rakim-150x150.jpg">
                </a>
                <p class="title">
                    <a href="{{ route('posts.show',$post->slug) }}">Eminem - Rap God</a>
                </p>
            </div>
        </div> 
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
</div>
<div class="box-list large desktop">
    <div class="section-header item-header desktop">
        <div class="title">
            <h1>MonstaJamss:
                <span>Editor's Choice</span>
            </h1>
        </div>
    </div>
    <div class="story">
        <a href="{{ route('posts.show',$post->slug) }}">
            <img src="https://static.hiphopdx.com/2020/08/jamixtapes-150x150.png" alt="">
        </a>
        <p class="title">
            <a href="{{ route('posts.show',$post->slug) }}">
            Eminem - Rap God	
            </a>
        </p>
    </div>
    <div class="story">
        <a href="{{ route('posts.show',$post->slug) }}">
            <img src="https://static.hiphopdx.com/2020/08/jamixtapes-150x150.png" alt="">
        </a>
        <p class="title">
            <a href="{{ route('posts.show',$post->slug) }}">
            Eminem - Rap God	
            </a>
        </p>
    </div>
    <div class="story">
        <a href="{{ route('posts.show',$post->slug) }}">
            <img src="https://static.hiphopdx.com/2020/08/jamixtapes-150x150.png" alt="">
        </a>
        <p class="title">
            <a href="{{ route('posts.show',$post->slug) }}">
            Eminem - Rap God	
            </a>
        </p>
    </div>
    <div class="story">
        <a href="{{ route('posts.show',$post->slug) }}">
            <img src="https://static.hiphopdx.com/2020/08/jamixtapes-150x150.png" alt="">
        </a>
        <p class="title">
            <a href="{{ route('posts.show',$post->slug) }}">
            Eminem - Rap God	
            </a>
        </p>
    </div>
    <div class="story">
        <a href="{{ route('posts.show',$post->slug) }}">
            <img src="https://static.hiphopdx.com/2020/08/jamixtapes-150x150.png" alt="">
        </a>
        <p class="title">
            <a href="{{ route('posts.show',$post->slug) }}">
            Eminem - Rap God	
            </a>
        </p>
    </div>
</div>
<?php get_footer(); ?>