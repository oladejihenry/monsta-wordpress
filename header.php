<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="theme-color" content="#000000"/>
    <?php wp_head(); ?>
</head>
<body>
   <div id="cmn_wrap">
        <div class="container">
            <header class="header site-chrome">
                <div class="top clearfix">	
                    <div class="logo">
                        <a href="/">
                            <br>
                            <?php 
                            if(function_exists('the_custom_logo')){
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $logo = wp_get_attachment_image_src($custom_logo_id);
                            }
                            ?>
                            <img class="mobile" src="<?php echo get_template_directory_uri(); ?>/img/w-1.png" alt="MonstaJamss" style="margin-left: -83px;">
                            <img class="desktop" src="<?php echo $logo[0] ?>" alt="MonstaJamss">
                        </a>
                    </div>
                    <div class="social-counts desktop">
                        <a href="https://www.facebook.com/monstajams">
                            <i class="fab fa-facebook-f" style="color: #3b5998;"></i>
                    
                        </a>
                        <a href="https://twitter.com/monstajams">
                            <i class="fab fa-twitter"></i>
                            
                        </a>
                        <a href="https://instagram.com/monstajams">
                            <i class="fab fa-instagram"></i>
                            
                        </a>
                    </div>
                </div>
                <form class="search-box show" action="{{ route('search') }}" method="GET">
                    <input class="search-field" type="text" name="query" value="" placeholder="Search">
                    <button class="search-submit" type="submit">
                        <i class="fa fa-search"></i>
                    </button>  
                </form>
                
                <nav class="main-nav-desktop desktop">
                    <ul>
                        <li class="{{ '/' == request()->path() ? 'active' : ''}}"><a href="/">Home</a></li>
                        <li class=""><a href="/category/music">Music</a></li>
                        <li class="{{ 'category/news' == request()->path() ? 'active' : ''}}"><a href="/category/news">News</a></li>
                        <li class="{{ 'category/video' == request()->path() ? 'active' : ''}}"><a href="/category/video">Video</a></li>
                        <li class="{{ 'category/reviews' == request()->path() ? 'active' : ''}}"><a href="/category/reviews">Reviews</a></li>
                        <li class="{{ 'category/releases' == request()->path() ? 'active' : ''}}"><a href="/category/releases">Releases</a></li>
                    </ul>
                </nav>
                <nav class="secondary-nav mobile">
                    <ul>
                        <li class="{{ '/' == request()->path() ? 'active' : ''}}"><a href="/">Home</a></li>
                        <li class="{{ 'category/music' == request()->path() ? 'active' : ''}}"><a href="/category/music">Music</a></li>
                        <li class="{{ 'category/video' == request()->path() ? 'active' : ''}}"><a href="/category/video">Video</a></li>
                        <li class="{{ 'category/news' == request()->path() ? 'active' : ''}}"><a href="/category/news">News</a></li>
                        <li class="{{ 'category/reviews' == request()->path() ? 'active' : ''}}"><a href="/category/reviews">Reviews</a></li>
                    </ul>
                </nav>
            </header>