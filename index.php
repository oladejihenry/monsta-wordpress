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